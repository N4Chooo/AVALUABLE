<?php
require_once("Deporte.php");

class Futbol extends Deporte{
    private $goles;
    private $tarj_amarilla;
    private $tarj_rojas;

    public function __construct($calorias, $tiempo, $gol, $amarilla, $roja){
        parent::__construct($calorias, $tiempo);
        $this->goles = $gol;
        $this->tarj_amarilla = $amarilla;
        $this->tarj_rojas = $roja;
    }
}
?>