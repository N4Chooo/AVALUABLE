<?php
require_once("Publicaciones.php");

class Libro extends Publicaciones{
    private $num_pag;


    public function __construct($tit, $aut, $año, $num){
    parent::__construct($tit, $aut, $año);
    $this->num_pag = $num;
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
    

    public function getNumPag() {
        return $this->num_pag;
    }
    
    public function toArray(): array {
        return [
            'Titulo' => $this->getTitulo(),
            'Autor' => $this->getAutor(),
            'Anyo publi' => $this->getAñoP(),
            'Num paginas' => $this->num_pag
        ];
    }

    public static function fromArray(array $data): Libro {
        return new Libro($data['Titulo'], $data['Autor'], $data['Anyo publi'], $data['Num paginas']);
    }
}
?>