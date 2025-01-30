<?php
require_once("Productos.php");

class Congelados extends Productos{
    protected $f_envasado;
    protected $pais_origen;
    protected $temp_mantenimiento;

    public function __construct($cadu, $lote, $enva, $origen,$mante){
        parent::__construct($cadu, $lote);
        $this->f_envasado = $enva;
        $this->pais_origen = $origen;
        $this->temp_mantenimiento = $mante;
    }  
}
?>