<?php
require_once("Deporte.php");

class Baloncesto extends Deporte{
    private $canastas;
    private $faltas;

    public function __construct($calorias, $tiempo, $canas, $falta){
        parent::__construct($calorias, $tiempo);
        $this->canastas = $canas;
        $this->faltas = $falta;
    }
}
?>