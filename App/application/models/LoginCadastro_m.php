<?php


class LoginCadastro_m extends CI_Model{

	public function salvar($dados = null, $id=null){
	  //Grava os dados na tabela.
	 //param $dados. Array que contém os campos a serem inseridos
	 //param Se for passado o $id via parâmetro, então atualizo o registro em vez de inseri-lo.
	 //return boolean
		if($dados){
			if ($id){
				$this->db->where('id', $id);
				if ($this->db->update("usuario", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("usuario", $dados)) {
					return true;
				} else {
					return false;
				}
			}

		}
	}


			public function get($id = null){
				//metodo para retornar os registros que há no banco.
					/**
			 		* Recupera o registro do banco de dados
			 		* param $id - Se indicado, retorna somente um registro, caso contário, todos os registros.
			 		* return objeto da banco de dados da tabela cadastros
			 		*/
				
				if ($id) {
					$this->db->where('id', $id);
				}
					$this->db->order_by("id", 'desc');
					return $this->db->get('usuario');
				}

		public function excluir($id = null){
			if ($id) {
				return $this->db->where('id', $id)->delete('cadastros');
			}

		}

	}//fin da classe
?>