<html>
<head>
    <title>POO 1</title>
</head>
<body>
<form method="POST" action="">
        <label for="NumReal1">Numero Real 1:</label>
        <input type="number" id="NumReal1" name="NumReal1" >
        <br>
        <label for="NumReal2">Numero Real 2:</label>
        <input type="number" id="NumReal2" name="NumReal2" >
        <br>
        <label for="NumImag1">Numero Imaginario 1:</label>
        <input type="number" id="NumImag1" name="NumImag1" >
        <br>
        <label for="NumImag2">Numero Imaginario 2:</label>
        <input type="number" id="NumImag2" name="NumImag2" >
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
class Complex{
    private $NumReal1;
    private $NumReal2;
    private $NumImag1;
    private $NumImag2;

    public function setNumeros ($num1, $num2, $num3, $num4){
    $this->NumReal1 = $num1;
    $this->NumReal2 = $num2;
    $this->NumImag1 = $num3;
    $this->NumImag2 = $num4;
    }
    public function getSuma(){
       return ($this->NumReal1 + $this->NumReal2) . "+" . ($this->NumImag1 + $this->NumImag2) . "i";
    }
    public function getDiferencia(){
        return ($this->NumReal1 - $this->NumReal2) + ($this->NumImag1 - $this->NumImag2);
    }
    public function getProducto(){
    return ((($this->NumReal1 * $this->NumReal2)-($this->NumImag1 * $this->NumImag1)) . "+" .(($this->NumReal1 * $this->NumImag2)+($this->NumImag1 * $this->NumReal2))) . "i";
    }
    }
 $Complejo = new Complex();
 $Complejo->setNumeros($_POST["NumReal1"], $_POST["NumReal2"] , $_POST["NumImag1"], $_POST["NumImag2"]);

 echo "La suma es : " . $Complejo->getSuma() ."<br>";
 echo "La Diferencia es : " . $Complejo->getDiferencia()."<br>";
 echo "El producto es : " . $Complejo->getProducto();
?>
