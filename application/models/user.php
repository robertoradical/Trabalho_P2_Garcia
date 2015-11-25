<?php 
class Usuario{

    public $nome, $email,$cpf,$endereco,$telefone;
    
    public function __construct($nome,$email,$cpf,$endereco,$telefone,$senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->senha = $senha;
    }
}

class Funcionario extends Usuario{
    public $rm;
    
    public function __construct($rm,$nome,$email,$cpf,$endereco,$telefone,$senha){
        parent::__construct($nome,$email,$cpf,$endereco,$telefone,$senha);
        $this->rm = $rm;
    }
     

}
    
class Aluno extends Usuario{
    public $ra, $curso,$ciclo,$horariocurso;
        
    public function __construct($ra, $curso,$ciclo,$horariocurso,$nome,$email,$cpf,$endereco,$telefone,$senha){
        parent::__construct($nome,$email,$cpf,$endereco,$telefone,$senha);
        $this -> ra = $ra; 
        $this -> curso = $curso;
        $this -> ciclo = $ciclo;
        $this -> horariocurso = $horariocurso;
    }
    

}