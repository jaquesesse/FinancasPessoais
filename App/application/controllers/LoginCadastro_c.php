<?php
//aqui terá os metodos salvar, editar, excluir

defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	* Controller: Responsável por carregar a view
	*/
	class LoginCadastro_c extends CI_Controller
	{
		function inserir()//carrega o formulario para novo cadastro de login
		{
			$variavel['titulo'] = 'Novo Cadastro';
			$this->load->view('LoginCadastro_v', $variavel);
		}

		//Este é o local para onde o formulário irá fazer o post. Aqui devemos fazer a validação dos dados e em seguida enviá-los para o model fazer a inserção no banco de dados. 
		//Caso venha o valor id, indica uma edição, caso contrário, um insert.
		public function salvar(){//store
			$this->load->library('form_validation');//biblioteca de validaçãodo codeIgniter

			$validacao = array (
								array(
											'field' => 'usuario', //campo
											'label' => 'Usuário',
											'rules' => 'required'
										),
										array(
												'field' => 'senha', //campo
												'label' => 'Senha',
												'rules' => 'required'
											),
												array(
														'field' => 'nome', //campo
														'label' => 'Nome',
														'rules' => 'required'
													)
								);

			$this->form_validation->set_rules($validacao);

			if($this->form_validation->run() == FALSE)
			{
				$variavel['titulo'] = 'Novo Registro';
				$this->load->view('LoginCadastro_v', $variavel);
			}
			else
			{
				$id = $this->input->post('id');

				$dados = array( //campos da tabela do BD
								"user" => $this->input->post('usuario'),
								"senha" => $this->input->post('senha'),
								"nome" => $this->input->post('nome')
								);

				if($this->LoginCadastro_m->salvar($dados, $id))
				{
					$variavel['mensagem'] = "Cadastro de login efetuado com sucesso!";
					$this->load->view('Sucesso_v', $variavel);
				}else {
					$variavel['mensagem'] = "Erro ao gravar. Tente novamente.";
					$this->load->view('errors/html/erro_v');
				}
				//criar as views erro_v e sucesso_v na pasta errors/html
			}

		}//fim da funcao salvar

		public function editar($id=null){
			//Chama o formulário com os campos preenchidos pelo registro selecionado
			if($id){

				$cadastro = $this->LoginCadastro_m->get($id);

				if($cadastro->num_rows() > 0){
					$variavel['titulo'] = 'Editar Cadastro de Login';
					$variavel['id'] = $cadastro->row()->id;
					$variavel['usuario'] = $cadastro->row()->usuario;
					$variavel['senha'] = $cadastro->row()->senha;
					$variavel['nome'] = $cadastro->row()->nome;

					$this->load->view('LoginCadastro_v', $variavel);

				} else {
					$variavel['mensagem'] = "Registro não encontrado.";
					$this->load->view('errors/html/erro_v');
				}

			}


		}//fim da funcao editar

		public function excluir($id){
			if(!id == null){
				$retorno = $this->load->view('LoginCadastro_m', $id);

			}else {
				$variavel['mensagem'] = "Registro não encontrado. Não foi possível fazer a exclusao.";
				$this->load->view('errors/html/erro_v');
			}
		}

	}
?>