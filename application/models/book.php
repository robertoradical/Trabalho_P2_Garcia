<?php 
class Livro{
    public $nm_titulo,$nm_autor,$dt_lancamento,$nr_exemplar,$ds_assunto;
    
    public function __construct($titulo,$autor,$lancamento,$nexemplar,$assunto){
        $this->nm_titulo=$titulo;
        $this->nm_autor=$autor;
        $this->dt_lancamento=$lancamento;
        $this->nr_exemplar=$nexemplar;
        $this->ds_assunto=$assunto;
    } 
}