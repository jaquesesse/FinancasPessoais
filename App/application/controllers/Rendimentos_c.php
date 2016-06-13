<?php
defined('BASEPATH') OR exit('No direct script access allowed');	//pega as informações da interface principal
    


class Rendimentos_c extends CI_Controller {
        
        //pega os dados da tabela e trata

    function index($idUsr = null){
        $this->load->model("Rendimentos_m");
        $dados['rendimentos']=$this->Rendimentos_m->get($idUsr);

        $this->load->view('Principal_v', $dados);

        #$this->load->view("Principal_v",$dados);
        //$this->carregar($usuario['id']);

    }

    public function carregar($idUsuario=null){
        //  $this->load->model("Rendimentos_m");

       // $dados['desepesas']=$this->Rendimentos_m->get($idUsuario);
       
        

    }

    public function editar($idDespesa=null)
    {
        $despesa['despesa'] = $this->Rendimentos_M->consultar("id");
        $this->load->view('EditarDespesa_v', $despesa);

    }
    public function salvar(){
        $dados['categoria']=$this->input->post('nome');
        $dados['descricao']=$this->input->post('descricao');
        $dados['valor']=$this->input->post('valor');
        $this->Rendimentos_m->salvar($dados);
    }
		
   
}