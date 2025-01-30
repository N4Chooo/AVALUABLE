<?php
class Productos{
    protected $f_caducidad;
    protected $num_lote;

    public function __construct($cadu, $lote){
        $this->f_caducidad = $cadu;
        $this->num_lote = $lote;
    }
}
?>