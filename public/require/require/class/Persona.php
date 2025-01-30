<?php
class Persona{
    protected $nombre;
    protected $edad;

    function __construct($name="", $age=0){
        $this->nombre = $name;
        $this->edad = $age;
    }
}
