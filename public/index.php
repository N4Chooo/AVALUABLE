<html>
<head>
    <title>POO 1</title>
</head>
<body>
</body>
</html>
<?php
class Matrix{
    private $Matrz=[];
    private $NumFilas;
    private $NumColumnas;
    private $Elementos;

    public function setFilas ($filas){
    $this->NumFilas = $filas;
    }
    public function setColumnas ($columnas){
        $this->NumColumnas = $columnas;
    }
    public function setElementos ($El){
        $this->Elementos = $El;
    }
    public function getArra(){
    for ($j = 0; $j == $this->NumFilas ; $j++){
        $Matrz[$j]=rand(0, count($NumFilas));
    for ($i = 0; $i == $this->NumColumnas; $i++){
        $Matrz[$j][$i]=rand(0, count($NumColumnas));
    }
    var_dump($Matrz);
}
}
}
 $matrix = new Matrix();
 $matrix->setFilas(3);
 $matrix->setColumnas(5);
 echo $matrix->getArra();
?>
