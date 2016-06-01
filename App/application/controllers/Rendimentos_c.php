<?php
defined('BASEPATH') OR exit('No direct script access allowed');	//pega as informações da interface principal
    


class Rendimentos_c extends CI_Controller {
        
        //pega os dados da tabela e trata
    
    public function __construct()
    {

        
       
        $this->load->view("Principal",$dados);
        
    }
		
   
}

    


