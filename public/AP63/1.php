<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO3</title>
</head>
<body>
<?php
class Instrumento{
    protected $interprete = "";
    protected $notas = "";
    public function __construct($player = "", $notes = ""){
        $this->interprete = $player;
        $this->notas = $notes;
    }
    public function getInterprete(){
        return $this->interprete;
    }
    public function getNotas(){
        return $this->notas;
    }
}
class Cuerda extends Instrumento{
    private $numCuerdas = "";
    public function __construct($player, $notes, $strings){
        parent::__construct($player, $notes);
        $this->numCuerdas = $strings;
    }
}
class Viento extends Instrumento{
    private $boquilla = "";
    public function __construct($player, $notes, $mouth){
        parent::__construct($player, $notes);
        $this->boquilla = $mouth;
    }
}
class Tecla extends Instrumento{
    private $cola = "";
    public function __construct($player, $notes, $tail){
        parent::__construct($player, $notes);
        $this->cola = $tail;
    }
    public function getCola(){
        return $this->cola;
    }
}
class Percusion extends Instrumento{
    private $material = "";
    public function __construct($player, $notes, $materia){
        parent::__construct($player, $notes);
        $this->material = $materia;
    }
}

$piano = new Tecla("Justo", "88", "Gran Cola");
echo "Interprete: " . $piano->getInterprete() . "<br>";
echo "Número de notas: " . $piano->getNotas() . "<br>";
echo "Cola del piano: " . $piano->getCola() . "<br>";

?>
</body>
</html>
