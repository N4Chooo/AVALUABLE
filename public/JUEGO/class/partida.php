<?php
require_once("jugadores.php");

class Partida{
    private $tiradas=[];

    public function createJugador1($nu, $nom, $rond, $tir){
        $this->jug1 = new Jugadores($nu, $nom, $rond, $tir);
    }
    
    public function createJugador2($nu, $nom, $rond,$tir){
        $this->jug2 = new Jugadores($nu, $nom, $rond,$tir);
    }
    public function setTiradas($tirada1, $tirada2){
        $this->tiradas[] = [$tirada1, $tirada2];
    }
        
    public function validarTiradas($tirada1, $tirada2,$nombre1,$nombre2){
        if($tirada1 == "Piedra" && $tirada2=="Piedra"){
            echo "¡¡Empatee, volved a tirar!!";
        }
        if($tirada1 == "Piedra" && $tirada2=="Papel"){
            echo "¡¡Gana el jugador ". $nombre2. "!! <br>";
            $this->jug2->setRond("SI");
            
        }
        if($tirada1 == "Piedra" && $tirada2=="Tijera"){
            echo "¡¡Gana el jugador ". $nombre1. "!! <br>";
            $this->jug1->setRond("SI");
            
        }
        if($tirada1 == "Papel" && $tirada2=="Piedra"){
            echo "¡¡Gana el jugador ". $nombre1. "!! <br>";
            $this->jug1->setRond("SI");
            
        }
        if($tirada1 == "Papel" && $tirada2=="Papel"){
            echo "¡¡Empatee, volved a tirar!!";
        }
        if($tirada1 == "Papel" && $tirada2=="Tijera"){
            echo "¡¡Gana el jugador ". $nombre2. "!! <br>";
            $this->jug2->setRond("SI");
           
        }
        if($tirada1 == "Tijera" && $tirada2=="Piedra"){
            echo "¡¡Gana el jugador ". $nombre2. "!! <br>";
            $this->jug2->setRond("SI");
            
        }
        if($tirada1 == "Tijera" && $tirada2=="Papel"){
            echo "¡¡Gana el jugador ". $nombre1. "!! <br>";
            $this->jug1->setRond("SI");
            
        }
        if($tirada1 == "Tijera" && $tirada2=="Tijera"){
            echo "¡¡Empatee, volved a tirar!!";
        }
       echo "<br>PARTIDAS: <br>";
    }

    //JSON
    public function añadirJson(){
        $jsonBiblio = [];

        if (file_exists('datos.json')) {
            $jsonContent = file_get_contents('datos.json');
            $jsonBiblio = json_decode($jsonContent, true);
        }
        $array1 = $this->jug1->toArray();
        $array2 = $this->jug2->toArray();
        $jsonBiblio[] = $array1;
        $jsonBiblio[] = $array2;
        var_dump($jsonBiblio);
        $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
        file_put_contents('datos.json', $jsonBiblio);
        
    }


public function borrarRegistro(){
    $jsonBiblio = [];
$jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
file_put_contents('datos.json', $jsonBiblio); 
echo "<br>Registro Borrado<br>";
}
}
?>