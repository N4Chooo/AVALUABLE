<html>
<head>
    <title>POO 3</title>
</head>
<body>
</body>
</html>
<?php
class Instrumento{
public $musicoAsociado;
public $notas;

}
class Cuerda extends Instrumento{
public $numCuerdas;

}
class Viento extends Instrumento{
public $metal;
public $madera;
}

class Percusion extends Instrumento{
public $baquetas;
public $manos;

}

$Guitarra = new Instrumento();

 
?>
