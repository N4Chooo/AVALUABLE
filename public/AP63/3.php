<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO3</title>
</head>
<body>
    <?php
    
    class Figura {
        protected $medida, $ubicacion;
        function __construct($medida, $ubicacion ) {
            $this->medida = $medida;
            $this->ubicacion = $ubicacion;
        }
    
        function getinfo() {
            echo "Dibujando la figura en la posición: $this->ubicacion  <br>";
        }
    }
    class Rectangulo extends Figura {
        private $color ;
        public function __construct($medida, $ubicacion, $color) {
            parent::__construct($medida, $ubicacion);
            $this->color = $color;
        }
        function getinfo() {
            echo "Dibujando un rectángulo de medida: $this->medida, color: $this->color, en la posición: $this->ubicacion". "<br>";
        }
    }
    class Triangulo extends Figura {
        private $color ;
        public function __construct($medida, $ubicacion, $color) {
            parent::__construct($medida, $ubicacion);
            $this->color = $color;
        }
        function getinfo() {
            echo "Dibujando un triangulo de medida: $this->medida, color: $this->color, en la posición: $this->ubicacion". "<br>";
        }
    }
    class Circulo extends Figura {
        private $color;
        public function __construct($medida, $ubicacion, $color) {
            parent::__construct($medida, $ubicacion);
            $this->color = $color;
        }
    
        function getinfo() {
            echo "Dibujando un círculo de medida: $this->medida, color: $this->color, en la posición: $this->ubicacion". "<br>";
        }
    }

    $rectangulo = new Rectangulo(5, "arriba a la derecha", "rojo");
    $triangulo = new Triangulo(3, "abajo a la izquierda", "azul");
    $círculo = new Circulo (4, "en el centro", "verde");
    $rectangulo->getinfo();
    $triangulo->getinfo();
    $círculo->getinfo();
    ?>
</body>
</html>