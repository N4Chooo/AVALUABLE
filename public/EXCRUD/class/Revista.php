<?php
require_once("Publicaciones.php");

class Revista extends Publicaciones{
    private $tematica;

//CONTRUCT
    public function __construct($tit, $aut, $año, $tem){
    parent::__construct($tit, $aut, $año);
    $this->tematica = $tem;
    }

//SETTER
    public function setTema($tema){
        $this->tematica = $tema;
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
    public function getTema() {
        return $this->tematica;
    }
}

?>