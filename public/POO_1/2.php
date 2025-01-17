<html>
<head>
    <title>POO 1</title>
</head>
<body>
</body>
</html>
<?php
class Average{
    private $num1;
    private $num2;
    private $num3;

    public function setNums($nume1, $nume2, $nume3){
        $this->num1 = $nume1;
        $this->num2 = $nume2;
        $this->num3 = $nume3;
    }
   
    public function getPromedio(){
        return ($this->num1 + $this->num2 + $this->num3) / 3;
    }
    }
    
    $promedio= new Average();
   

    $promedio->setNums(3, 7, 9);
   

    echo "El promedio es : " . $promedio->getpromedio();
?>
