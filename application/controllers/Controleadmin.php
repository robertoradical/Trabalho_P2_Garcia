<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controleadmin extends CI_Controller {
	
	// VIEWS
    
    public function adicionarlivro(){
		$this->load->view('adicionarlivro');
	}
	
	public function adicionaraluno(){
		$this->load->view('adicionaaluno');
	}
	
	public function adicionarnoticia(){
		$this->load->view('adicionarnoticia');
	}
	
	public function home(){
        redirect("Controle/home");
    }
    
	public function adicionarfuncionario(){
		$this->load->view('adicionarfuncionario');
	}
    
    // FIM VIEWS
    
    
    // Função que pega model
    // Reaproveitamento de codigo
    
    public function getmodel(){
    	$this->load->model('model');
		$m = $this->model;
		return $m;
    }
    
    
    // Função para inserir livros no banco
    
	public function livro(){
		require_once APPPATH."models/book.php";
		$m = $this->getmodel();
		$m->insertlivro(new Livro($_POST['titulo'],$_POST['autor'],$_POST['lancamento'],$_POST['exemplar'],$_POST['assunto']));
		$this->mostralivro();
	}
	
		
	// Função para inserir alunos no banco
	
	public function doPostaluno(){
		require_once APPPATH."models/user.php";
		$m = $this->getmodel();
		$m->insertaluno(new Aluno($_POST['ra'],$_POST['curso'],$_POST['ciclo'],$_POST['horario'],$_POST['nome'],$_POST['email'],$_POST['cpf'],$_POST['endereco'],$_POST['telefone'],$_POST['senha']));
		$this->adicionaraluno();
	}
	
	// Função para inserir funcionarios no banco
	
	public function doPostfuncionario(){
		require_once APPPATH."models/user.php";
		$m = $this->getmodel();
		$m->insertfuncionario(new Funcionario($_POST['rm'],$_POST['nome'],$_POST['email'],$_POST['cpf'],$_POST['endereco'],$_POST['telefone'],$_POST['senha']));
		$this->adicionarfuncionario();
	}
	
	// Função para o administrador fazer logout
	
	public function logout(){
        $this->session->unset_userdata("_ID");
        redirect("/Controle/home");
    }
    
    // Função para inserir noticias no banco
    
    public function doPostnoticias(){
    	require_once APPPATH."models/news.php";
		$m = $this->getmodel();
		$m->insertnoticia(new Noticia($_POST['titulo'],$_POST['assunto'],$_POST['img']));
		$this->adicionarnoticia();
    }
	
	// Função que lista todos os livros cadastrados
	
	public function mostralivro(){
		require_once APPPATH."models/book.php";
		$m = $this->getmodel();
		$book = $m->searchAlllivro();
		$data['livro'] = $book;
		$this->load->view('mostralivro',$data);
	}
	
	// Função que lista todas as pessoas que entraram em contato pela pagina fale conosco
	
	public function mostracontatos(){
		require_once APPPATH."models/contato.php";
		$m = $this->getmodel();
		$cont = $m->searchAll();
		$data['usu'] = $cont;
		$this->load->view('mostracontatos',$data);
	}
    
}
	