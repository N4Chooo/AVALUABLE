<?php
require_once("Productos.php");

class Refrigerados extends Productos{
    private $cod_organismo;
    private $f_envasado;
    private $temp_mantenimiento;
    private $pais_origen;

    public function __construct($cadu, $lote, $orga, $enva, $mante, $origen){
        parent::__construct($cadu, $lote);
        $this->cod_organismo = $orga;
        $this->f_envasado = $enva;
        $this->temp_mantenimiento = $mante;
        $this->pais_origen = $origen;
    }
}
?>