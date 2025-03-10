<?php
require_once("jugadoras.php");

class maga extends jugadoras{
    public function __construct($nom, $vid,$ataq){
    parent::__construct($nom, $vid,$ataq);
    }

    
    public function ataqueEsp(){
        $this->getAtaque() *2;
        $this->setVida($this->getvida()-5);
        
    }
    

}
    





?>