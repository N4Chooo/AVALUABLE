<?php
class Publicaciones{
    protected $titulo;
    protected $autor;
    protected $año_publi;

//CONTRUCT
    public function __construct($tit, $aut, $año){
        $this->titulo = $tit;
        $this->autor = $aut;
        $this->año_publi = $año;
    }

//SETTERS
    public function setTitulo($titu){
        $this->titulo = $titu;
    }
    public function setAutor($auto){
        $this->autor = $auto;
    }
    public function setAñoP($añopu){
        $this->año_publi = $añopu;
    }

//GETTERS
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