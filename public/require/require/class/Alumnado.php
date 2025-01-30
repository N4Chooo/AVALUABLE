<?php
require_once("Persona.php");

class Alumnado extends Persona{
    private $anyoMatricula;

    function __construct($name, $age, $year){
        parent::__construct($name, $age);
        $this->anyoMatricula = $year;
    }
}