<?php
require_once("Congelados.php");

class Cong_agua extends Congelados{
    private $info_salinidad;

    public function __construct($cadu, $lote, $enva, $origen,$mante,$salinidad){
        parent::__construct($cadu, $lote,$enva, $origen,$mante);
        $this->info_salinidad = $salinidad;
    }  
}
?>