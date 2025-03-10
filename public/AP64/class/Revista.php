<?php
require_once("Publicaciones.php");

class Revista extends Publicaciones{
    private $tematica;


    public function __construct($tit, $aut, $año, $tem){
    parent::__construct($tit, $aut, $año);
    $this->tematica = $tem;
    }

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

    public function toArray(): array {
        return [
            'Titulo' => $this->getTitulo(),
            'Autor' => $this->getAutor(),
            'Anyo publi' => $this->getAñoP(),
            'Tematica' => $this->tematica
        ];
    }

    public static function fromArray(array $data): Revista {
        return new Revista($data['Titulo'], $data['Autor'], $data['Anyo publi'], $data['Tematica']);
    }
}

?>