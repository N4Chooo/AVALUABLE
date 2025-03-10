<?php
require_once("Revista.php");
require_once("Libro.php");


class Biblio{
   private array $libros=[];
   private array $revistas=[];

//CREAR
   public function createLibros($titulo,$autor,$año,$num){
    $libro = new Libro($titulo,$autor,$año,$num);
    $this->libros[] = $libro;
    echo "Libro: <br>" . " - " . $titulo . " - " . " creado correctamente<br>";
    
}
   public function createRevista($titulo,$autor,$año,$num){
    $revista =new Revista($titulo,$autor,$año,$num);
    $this->revistas[] = $revista;
    echo "Revista: <br> " . " - " . $titulo . " - " . " creada correctamente<br>";
}

//VER
    public function verLibros(){ 
        
        foreach ($this->libros as $libro) {
            echo "Título:" . $libro->getTit() .  "| Autor:" . $libro->getAut() . "| Año:" . $libro->getAño() . "| Pags:" . $libro->getNumPag(). "<br>";
    }
}
    public function verRevista(){ 
        foreach ($this->revistas as $revista) {
            echo "Título:" . $revista->getTit() .  "| Autor:" . $revista->getAut() . "| Año:" . $revista->getAño() . "| Tema:" .  $revista->getTema() . "<br>";
        }
    }

//BORRAR
    public function borrarLibros($posi){
        unset($this->libros[$posi]);
        echo "Libro borrado correctamente";
}

public function borrarRevistas($posi){
    unset($this->revistas[$posi]);
    echo "Revista borrada correctamente";
}
}
?>