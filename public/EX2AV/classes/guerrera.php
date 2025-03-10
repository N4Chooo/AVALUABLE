<?php
require_once("jugadoras.php");

class guerrera extends jugadoras{
    public function __construct($nom, $vid,$ataq){
    parent::__construct($nom, $vid,$ataq);
    }

    
    public function ataqueEsp(){
        $this->getAtaque() +8 ;
        $this->setVida($this->getvida()-4);
        
    }


    
}
?>