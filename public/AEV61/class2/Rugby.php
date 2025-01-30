<?php
require_once("Deporte.php");

class Rugby extends Deporte{
    private $ensayo;
    private $placar;

    public function __construct($calorias, $tiempo, $ensa, $placa){
        parent::__construct($calorias, $tiempo);
        $this->ensayo = $ensa;
        $this->placar = $placa;
        
    }
}
?>