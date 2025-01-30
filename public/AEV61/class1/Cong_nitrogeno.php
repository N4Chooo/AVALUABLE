<?php
require_once("Congelados.php");

class Cong_nitrogeno extends Congelados{
    private $info_metodo;
    private $tiempo_exposicion;
      
    public function __construct($cadu, $lote, $enva, $origen,$mante,$metodo, $expo){
        parent::__construct($cadu, $lote,$enva, $origen,$mante);
        $this->info_metodo = $metodo;
        $this->tiempo_exposicion = $expo;
    } 
}
?>