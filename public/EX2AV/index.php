<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX2AV</title>
</head>
<body>
    <h2>Comienza el combate: </h2>
    <br>
</body>
</html>

<?php
require_once("./classes/maga.php");
require_once("./classes/guerrera.php");
require_once("./classes/jugadoras.php");

$maga = new maga("maga",120, rand(0,15));
$guerrera = new guerrera("guerrera", 100, rand(0,20));

while ($maga->getvida()>0){
echo "<br>";
$maga -> doAtaque("maga");
$maga -> estaViva();

if($guerrera->getvida()>0){
echo "<br>";
$guerrera -> doAtaque("guerrera");
$guerrera -> estaViva();
echo "<br>";
}else{
    $maga->setVida(0);
    echo " <br>GANA LA MAGA";
}
}












?>