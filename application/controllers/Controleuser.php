<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controleuser extends CI_Controller {

    // Função que lista as noticias
   
    public function not(){
	    require_once APPPATH."models/news.php";
		$m = $this->getmodel();
		$cont = $m->searchAllnoticia();
	    return $cont;
	    	
    }
    
    // Função que pega o email do usuario que está logado
    // Reaproveitamento de codigo
    
    public function user(){
        $data['usu'] = $this->session->userdata("_EMAIL");
        return $data;
    }
    
    // VIEW
    
    public function homeuser(){
		$data['news'] = $this->not();
		$data['usu'] = $this->session->userdata("_EMAIL");
		$this->load->view('homeuser',$data);
	}
	
	public function instuser(){
		$this->load->view('instuser',$this->user());
	}
	
	
	public function faleuser(){
		$this->load->view('faleuser',$this->user());
	}
	
	
	public function duvidauser(){
		$this->load->view('duvidasuser',$this->user());
	}
	
	
	public function showuser(){
		$this->load->view('showuser',$this->user());
	}
	
	public function noticiauser(){
		$data['news'] = $this->not();
		$data['usu'] = $this->session->userdata("_EMAIL");
		$this->load->view('noticiauser',$data);
	}
	
	// FIM VIEW
	
	
	// Função que pega o titulo do livro e faz uma consulta no banco 
	
    public function consultaok(){
    	$a = $_POST['titulo'];
		require_once APPPATH."models/book.php";
		$m = $this->getmodel();
		$cont = $m->searchlivro($a);
	    $data['book']=$cont;
	    $data['usu'] = $this->session->userdata("_EMAIL");
	    $this->load->view('consultauser',$data);
    }
    
    // Função que mostra todos os livros na consulta
    
    public function consultauser(){
		require_once APPPATH."models/book.php";
		$m = $this->getmodel();
		$cont = $m->searchAlllivro();
		$data['book'] = $cont;
		$data['usu'] = $this->session->userdata("_EMAIL");
		$this->load->view('consultauser',$data);
	}
	
	// Função para o usuario fazer o logout
    
    public function logoutuser(){
        $this->session->unset_userdata("_ID");
        $this->session->unset_userdata("_EMAIL");
        redirect("/Controle/home");
    }
    
    // Função que pega model
    // Reaproveitamento de codigo
    
    public function getmodel(){
    	$this->load->model('model');
		$m = $this->model;
		return $m;
    }
    
}