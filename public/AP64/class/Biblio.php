<?php
require_once("Publicaciones.php");
require_once("Revista.php");
require_once("Libro.php");


class Biblio{
   private  $libros=[];
   private $revistas=[];

  public function añadirJson(){
        $this->leerJson();
        $jsonBiblio = [];
        foreach ($this->libros as $objeto) {
            $arrayLibro = $objeto->toArray();
            $jsonBiblio[] = $arrayLibro;
        }
        foreach ($this->revistas as $objeto) {
            $arrayRevista = $objeto->toArray();
            $jsonBiblio[] = $arrayRevista;
        }
        $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
        file_put_contents('datos.json', $jsonBiblio);
    }

    public function leerJson() {
        $jsonContent = file_get_contents('datos.json');
        $dataArray = json_decode($jsonContent, true);
           if ($dataArray != null){
            foreach ($dataArray as $array) {
                if (isset($array['Num paginas'])) { 
                $this->libros[] = Libro::fromArray($array);
                }elseif (isset($array['Tematica'])) { 
                $this->revistas[] = Revista::fromArray($array);
                }
              }
        }
    }

   
   public function createLibros($titulo,$autor,$año,$num){
    $libro = new Libro($titulo,$autor,$año,$num);
    $this->libros[] = $libro;
    echo "Libro: <br>" . " - " . $titulo . " - " . " creado correctamente<br>";
    
}
   public function createRevista($titulo,$autor,$año,$num){
    $revista =new Revista($titulo,$autor,$año,$num);
    $this->revistas[] = $revista;
    echo "Revista: <br> " . " - " . $titulo . " - " . " creado correctamente<br>";
}

    public function formLibros(){ 
        echo "<form method='POST' action='index.php'>";
        echo "<input type='hidden' name='accion' value='borrarLibro'>";
        foreach ($this->libros as $index => $libro) {
            echo "Libro: ";
            echo "Título:" . $libro->getTit() .  "| Autor:" . $libro->getAut() . "| Año:" . $libro->getAño() . "| Pags:" . $libro->getNumPag(). 
            "<button type='submit' name='Posicion' value='$index'>Eliminar</button><br>"; }
            echo "</form>";
            
}
    public function formRevista(){ 
        echo "<form method='POST' action='index.php'>";
        echo "<input type='hidden' name='accion' value='borrarLibro'>";
        foreach ($this->revistas as $index =>$revista) {
            echo "Revista: ";
            echo "Título:" . $revista->getTit() .  "| Autor:" . $revista->getAut() . "| Año:" . $revista->getAño() . "| Tema:" .  $revista->getTema() .
        "<button type='submit' name='Posicion' value='$index'>Eliminar</button><br>"; }
        echo "</form>";
        
    }




    public function borrarPublis($posi){
        if (empty($this->libros) && (empty($this->revistas))) {
            $this->leerJson(); 
        }
    if (isset($this->libros[$posi])) {
        unset($this->libros[$posi]); 
        $this->libros = array_values($this->libros); 
        echo "<br>Libro borrado<br>";
    }elseif (isset($this->revistas[$posi])) {
        unset($this->revistas[$posi]);  
        $this->revistas = array_values($this->revistas);
        echo "<br>Revista borrada<br>";
    }else{
        echo "<br>REGISTRO VACIO<br>";
     }

        $jsonBiblio = [];
       foreach ($this->libros as $objeto){
        $arrayLibro = $objeto->toArray();
        $jsonBiblio[] = $arrayLibro;
    }
    foreach ($this->revistas as $objeto){
        $arrayRevista = $objeto->toArray();
        $jsonBiblio[] = $arrayRevista;
    }
    $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
    file_put_contents('datos.json', $jsonBiblio); 
    
    }

}


?>