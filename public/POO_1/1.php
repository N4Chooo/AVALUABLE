<html>
<head>
    <title>POO 1</title>
</head>
<body>
</body>
</html>
<?php
class Triangle{
    private $lado1;
    private $lado2;
    private $lado3;

    public function setLados ($medida1, $medida2, $medida3){
    $this->lado1 = $medida1;
    $this->lado2 = $medida2;
    $this->lado3 = $medida3;
    }
    public function getPerimetro(){
       return $this->lado1 + $this->lado2 + $this->lado3;
    }
    public function getArea(){
    $semi = $this->getPerimetro() / 2;
    return sqrt($semi * ($semi - $this->lado1) * ($semi - $this->lado2) * ($semi - $this->lado3));
    }
    }
 $triangle = new Triangle();
 $triangle->setLados(3, 6, 6);

 echo "Perimetro :" . $triangle->getPerimetro() . "<br>";
 echo "Area :" . $triangle->getarea();
?>
