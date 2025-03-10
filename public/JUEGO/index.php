<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
</head>
<body>
    <h1>PIEDRA PAPEL Y TIJERA</h1>
<form method="POST" action="" id="partidas">
    <label for="Jug1">JUGADOR 1:</label><br>
        <label for="Nombre1">Nombre:</label>
        <input type="text" id="Nombre1" name="Nombre1" value="" required><br>
    <select id="Jug1" name="Jug1" required>
            <option value="">SELECCIONA</option>
            <option value="Piedra">Piedra</option>
            <option value="Papel">Papel</option> 
            <option value="Tijera">Tijera</option> 
        </select><br><br>
    <label for="Jug2">JUGADOR 2:</label><br>
    <label for="Nombre2">Nombre:</label>
        <input type="text" id="Nombre2" name="Nombre2" value="" required><br>
    <select id="Jug2" name="Jug2" required>
            <option value="">SELECCIONA</option>
            <option value="Piedra">Piedra</option>
            <option value="Papel">Papel</option> 
            <option value="Tijera">Tijera</option> 
        </select><br>
    <br>
    <button type="submit">¡¡JUGAR!!</button>
     </form><br>
     <form method="POST" action="" id="borrar">
     <input type="submit" id="borrar" name="borrar" value="BORRAR REGISTRO" required><br>
     </form><br><br>
     <?php 

require_once("./class/jugadores.php");
require_once("./class/partida.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST["Nombre1"]) && isset($_POST["Nombre2"])){
    $Partida = new Partida();
    $Partida->createJugador1("1",$_POST["Nombre1"],"NO",$_POST["Jug1"]);
    $Partida->createJugador2("2",$_POST["Nombre2"],"NO",$_POST["Jug2"]);
    $Partida->validarTiradas(($_POST["Jug1"]), ($_POST["Jug2"]),($_POST["Nombre1"]),($_POST["Nombre2"]));
    $Partida->setTiradas(($_POST["Jug1"]), ($_POST["Jug2"]));
    $Partida->añadirJson();
 }
 if (isset($_POST["borrar"])){
    $Partida = new Partida();
$Partida->borrarRegistro();
}
}
?>
</body>
</html>