<?php
class Publicaciones{
    protected $titulo;
    protected $autor;
    protected $año_publi;

    public function __construct($tit, $aut, $año){
        $this->titulo = $tit;
        $this->autor = $aut;
        $this->año_publi = $año;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function getAñoP() {
        return $this->año_publi;
    }
    

}
?>