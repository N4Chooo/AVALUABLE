<?php
class Jugadores{
    private $num;
    private $nombre;
    private $ronda_ganada;
    private $tirada;

    public function __construct($nu, $nom, $rond, $tira){
        $this->num = $nu;
        $this->nombre = $nom;
        $this->ronda_ganada = $rond;
        $this->tirada = $tira;
    }
    public function setNum($nume) {
        $this->num = $nume;
    }
    public function setNombre($nomb) {
        $this->nombre = $nomb;
    }
    public function setRond($ronds) {
        $this->ronda_ganada = $ronds;
    }
    public function setTir($tira) {
        $this->tirada = $tira;
    }
    

    public function getNum() {
        return $this->num;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getRond() {
        return $this->ronda_ganada;
    }
    public function getTir() {
        return $this->tirada ;
    }
    

    public function toArray(): array {
        return [
            'Numero' => $this->num,
            'Nombre' => $this->nombre,
            'Ronda ganada' => $this->ronda_ganada,
            'Ha tirado : ' => $this->tirada
        ];
    }

    public static function fromArray(array $data): Jugadores {
        return new Jugadores($data['Numero'], $data['Nombre'], $data['Ronda ganada'], $data['Ha tirado : ']);
    }

}
?>