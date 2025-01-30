<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php

    class Obra {
        protected $referencia, $titulo, $autor, $numPags;
        public function __construct($referencia, $titulo, $autor, $numPags){
            $this->referencia = $referencia;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->numPags = $numPags;
        }
        public function getReferencia(){
            echo $this->referencia;
        }
        public function getTitulo(){
            echo $this->titulo;
        }
        public function getAutor(){
            echo $this->autor;
        }
        public function getNumPags(){
            echo $this->numPags;
        }
        public function setReferencia($referencia){
            $this->referencia = $referencia;
        }
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        public function visualizer(){
            echo "Referencia: ".$this->referencia;
            echo "Titulo: ". $this->titulo;
            echo "Autor: ". $this->autor;
            echo "Numero de paginas: ". $this->numPags;
        }
    }
    class Volumen extends Obra{
        private $numVol;
        public function __construct($referencia, $titulo, $autor, $numPags, $numVol){
            parent::__construct($referencia, $titulo, $autor, $numPags);
            $this->numVol = $numVol;
        }
        public function getNumVol(){
            echo $this->numVol;
        }
        public function setNumVol($numVol){
            $this->numVol = $numVol;
        }
        public function visualizer(){
            parent::visualizer();
            echo "Numero de volumen: ". $this->numVol;
        }
    }
    
    class Revista {
        private $referencia, $titulo, $anyoPub, $numRev;
        public function __construct($referencia, $titulo, $anyoPub, $numRev){
            $this->referencia = $referencia;
            $this->titulo = $titulo;
            $this->anyoPub = $anyoPub;
            $this->numRev = $numRev;
        }
        public function visualizer(){
            echo "Referencia: ".$this->referencia;
            echo "Titulo: ".$this->titulo;
            echo "Año de publicacion: ".$this->anyoPub;
            echo "Numero de revista: ".$this->numRev;
        }
    }

    ?>
</body>
</html>