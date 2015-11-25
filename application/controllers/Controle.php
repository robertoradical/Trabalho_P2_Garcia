<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controle extends CI_Controller {
	
	//VIEW
	
	public function home(){
		$this->load->view('home',$this->not());
	}
	
	public function inst(){
		$this->load->view('institucional');
	}
	
	
	public function fale(){
		$this->load->view('faleconosco');
	}
	
	
	public function duvida(){
		$this->load->view('duvida');
	}
	
	
	public function show(){
		$this->load->view('show');
	}
	
	
	public function erro(){
		$this->load->view('erro');
	}
	
	public function noticia(){
		$this->load->view('noticia',$this->not());
	}
	
	// FIM VIEW
	
	// Função que faz a destinção dos tipos de usuarios
	// Reaproveitamento de codigo
	
	public function tipouser(){
		$a = $this->session->userdata("_ID");
		$b = $this->session->userdata("_EMAIL");
		if($b !== null){
			return true;
		}else{
			if($a !== null){
				return false;		
			}
		}
	}
	
	// Função que permite que voce volte para sua area de controle, ou seja
	// quando voce já esta logado e volta para o Controle e clica em area restrita
	// voce tem a oportunidade de voltar para seu controle sendo ele admin ou user
	
	public function area(){
		if($this->tipouser() === true){
			redirect("Controleuser/homeuser");
		}else{
			redirect("Controleadmin/adicionarlivro");
		}
	}
	
	
	// Função que permite que um usuario logado que não esteja em seu devido controle
	// possa fazer logout indenpendente do tipo de usuario
	
	public function logoutuser(){
		if($this->tipouser() === true){
			redirect("Controleuser/logoutuser");	
		}else{
			redirect("Controleadmin/logout");
		}
	}
	
	// Função que permite que os tipo de usuario sejam direcionados para cada pagina e assim
	// seguir para seu devido controle
	
	public function login(){
		if($this->tipouser() === true){
			$this->load->view('logadouser');
		}else{
			if($this->tipouser() === false){
				$this->load->view('logadoadmin');		
			}else{
				$this->load->view('fazerlogin');	
			}
		}
	}
	
	// Função que mostra as noticias cadastradas no banco em paginas
	
	public function not(){
		require_once APPPATH."models/news.php";
		$m = $this->getmodel();
		$cont = $m->searchAllnoticia();
		$data['news'] = $cont;
		return $data;
	}
	
	// Função formulario para entrar em contato enviando email para empresa
	
	public function doPost(){
		require_once APPPATH."models/contato.php";
		$m = $this->getmodel();
		$m->insert(new Contato($_POST['nome'],$_POST['email'],$_POST['mensagem']));
		if($this->tipouser() === true){
			redirect('Controleuser/showuser');
		}else{
			$this->load->view('show');	
		}
	}
		
	// Função que valida se o usuario conseguiu se logar e qual o tipo desse usuario
	// direcionando-os para seu devido controle
	
	public function valida(){
    	$email = $_POST["email"];
        $senha = $_POST["key"];
        $this->load->model("model");
        $usr = $this->model->getUser($email,$senha);
        if($usr !== false){
            if($usr === "admin"){
                $this->session->set_userdata("_ID", "admin");
                redirect("/Controleadmin/adicionarlivro"); 
            }else{
             	$this->session->set_userdata("_ID", "usuario"); 
             	$this->session->set_userdata("_EMAIL", $email);
             	redirect("/Controleuser/homeuser"); 
        	}
        }else{
            redirect("/Controle/erro");
        }
    }
    
    // Função que pega model
    // Reaproveitamento de codigo
    
    public function getmodel(){
    	$this->load->model('model');
		$m = $this->model;
		return $m;
    }
	
}
