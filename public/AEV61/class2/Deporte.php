<?php
class Deporte{
    protected $kcal;
    protected $tiempo_realizacion;

    public function __construct($calorias, $tiempo){
        $this->kcal = $calorias;
        $this->tiempo_realizacion = $tiempo;
    }
}
?>