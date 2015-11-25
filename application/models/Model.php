<?php
 class Model extends CI_Model{
  
    // Inseri contatos a partir da pagina fale conosco
    
    public function insert (Contato $cont){
        $this->db->insert('Contatos',$cont);
    }
    
    // Inseri noticias 
    
    public function insertnoticia (Noticia $cont){
        $this->db->insert('Noticia',$cont);
    }
    
    // Lista as noticias
     
    public function searchAllnoticia(){
         return $this->db->get('Noticia')->result();
    }
     
    // Lista os contatos por meio da pagina SAC admin
    
    public function searchAll(){
         return $this->db->get('Contatos')->result();
    }
     
    // Lista os livros por meio da consulta
    
    public function searchlivro($a){
        $sql = $this->db->query("SELECT * FROM Livro WHERE nm_titulo Like '%".$a."%'");
        return $sql->result();
        
    }
    
    // Inseri os livros
    
    public function insertlivro(Livro $cont){
        $this->db->insert("Livro", $cont);
    }
    
    // Lista todos os livros 
    
    public function searchAlllivro(){
         return $this->db->get('Livro')->result();
    }
    
    // Verifica se o usario é admim ou é comum
    
    public function getUser($email,$senha) {
        $this->db->where("ds_email",$email);
        $this->db->where("senha",$senha);
        $a=$this->db->get('Usuario');
        if ($a->num_rows()>0){
            if($a->row()->ds_email === "andressamiki@gmail.com"){
                return "admin";
            }else{
                return "usuario";
            }
            
        }else{
            return false;
        }
    }
    
    // Função que pega o ultimo is inserido
    
    public function getid(){
       return $this->db->insert_id();
    }
    
    // Insert aluno na tabela aluno e usuario usando a função getid
    
    public function insertaluno (Aluno $cont){
        $data1['nr_cpf'] = $cont->cpf;
        $data1['nm_usuario'] = $cont->nome;
        $data1['senha'] = $cont->senha;
        $data1['ds_endereco'] = $cont->endereco;
        $data1['nr_telefone'] = $cont->telefone;
        $data1['ds_email'] = $cont->email;
        $this->db->insert('Usuario',$data1);
        $data['cd_usuario'] = self::getid();
        $data['nr_ra'] = $cont->ra;
        $data['nm_curso'] = $cont->curso;
        $data['nr_ciclo'] = $cont->ciclo;
        $data['hr_horario'] = $cont->horariocurso;
        return $this->db->insert('Aluno',$data);
    }
    
    // Insert aluno na tabela aluno e usuario usando a função getid
    
    public function insertfuncionario (Funcionario $cont){
        $data1['nr_cpf'] = $cont->cpf;
        $data1['nm_usuario'] = $cont->nome;
        $data1['senha'] = $cont->senha;
        $data1['ds_endereco'] = $cont->endereco;
        $data1['nr_telefone'] = $cont->telefone;
        $data1['ds_email'] = $cont->email;
        $this->db->insert('Usuario',$data1);
        $data['cd_usuario'] = self::getid();
        $data['nr_rm'] = $cont->rm;
        $this->db->insert('Funcionario',$data);
    }
    
 }