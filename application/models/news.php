<?php 
class Noticia{
    public $nm_titulo,$ds_assunto,$lk_foto;
    
    public function __construct($titulo,$assunto,$img){
        $this->nm_titulo=$titulo;
        $this->ds_assunto=$assunto;
        $this->lk_foto=$img;
    } 
}