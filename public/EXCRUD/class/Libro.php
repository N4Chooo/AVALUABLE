<?php
require_once("Publicaciones.php");

class Libro extends Publicaciones{
    private $num_pag;

//CONTRUCT
    public function __construct($tit, $aut, $año, $num){
    parent::__construct($tit, $aut, $año);
    $this->num_pag = $num;
    }

//SETTER
    public function setNum($Pags){
        $this->num_pag = $Pags;
    }

//GETTERS
    public function getTit() {
        return $this->getTitulo();
    }
    public function getAut() {
        return $this->getAutor();
    }
    public function getAño() {
        return $this->getAñoP();
    }
    public function getNumPag() {
        return $this->num_pag;
    }
}
?>