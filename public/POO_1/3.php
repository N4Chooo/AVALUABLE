<html>
<head>
    <title>POO 1</title>
</head>
<body>
</body>
</html>
<?php
class Empleado{
    private $nombre;
    private $salario;
    private $horasDia;

    public function getInfo($Sal, $HorasD){
      $this->salario = $Sal;
      $this->horasDia = $HorasD;
    }
    public function AddSal(){ 
        if ($this->salario < 500){
            return $this->salario +10;
        }else{
            return "ES MAYOR DE 500";
        }
    }
    public function AddWork(){
        if ($this->horasDia > 6){
           return $this->salario +5; 
        }else{
            return "NO LLEGA A 6 HORAS";
        }
    }
    }
    
    $emple= new Empleado();
    $emple->getInfo(400, 7);


    echo "El salario con el extra por ser menor de 500 es : " . $emple->AddSal() . "<br>" ;
    echo "El salario con el extra por horas es : " . $emple->AddWork();
?>
