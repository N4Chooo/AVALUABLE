<?php
require_once("Productos.php");

class Frescos extends Productos{
    private $f_envasado;
    private $pais_origen;

    public function __construct($cadu, $lote, $enva, $origen){
        parent::__construct($cadu, $lote);
        $this->f_envasado = $enva;
        $this->pais_origen = $origen;
    }
}
?>