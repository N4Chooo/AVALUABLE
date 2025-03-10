<?php
class jugadoras {
 
    protected $nombre;
    protected $vida ;
    protected $ataque ;

    public function __construct($nom, $vid,$ataq){
        $this->nombre = $nom;
        $this->vida=$vid;
        $this->ataque =$ataq;    }

    public function setNombre($nomb){
        $this->nombre = $nom;
    }
    public function setVida($vi){
        $this->vida = $vi;
    }
    public function setAtaque($ata){
        $this->ataque = $ata;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getVida(){
        return $this->vida;
    }
    public function getAtaque(){
        return $this->ataque;
    }

    public function doAtaque($objeto){
       if($objeto == "maga"){
         $dañ = $this-> getAtaque();
         echo "Guerrera ataca a maga y hace ". $dañ." de daño<br>";
         $this->recibirDaño($dañ);
       }elseif($objeto=="guerrera"){
        $dañ = $this-> getAtaque();
        echo "Maga ataca a guerrera y hace ". $dañ." de daño<br>";
        $this->recibirDaño($dañ);
       }
    }
    public function recibirDaño($daño){
        $this->setVida($this->getvida() - $daño);
    }
    public function estaViva(){
        if($this->getVida()<=0){
            echo $this->getNombre() ." esta muerta";
        }else{
            echo $this->getNombre() ." esta  viva, le quedan ".$this->getVida()." de vida. ";
        }
    }
    public function ataqueEspMaga(){
        
    }










}



?>