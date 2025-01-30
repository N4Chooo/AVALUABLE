<?php
require_once("Congelados.php");

class Cong_aire extends Congelados{
    private $info_composicion;
    
    public function __construct($cadu, $lote, $enva, $origen,$mante,$compo){
        parent::__construct($cadu, $lote,$enva, $origen,$mante);
        $this->info_composicion = $compo;
    }  
}
?>