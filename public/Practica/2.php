<!DOCTYPE html>
<html>
<head>
    <title>Citas</title>
</head>
<body>
    <h1>Citas</h1>
    <?php
    $cita = $_GET["cita"];
    $tramo= $_GET["tramo"];
    $tramo1 = 200;
    $tramo2 = 150;
    $tramo3 = 100;
    $tramo4 = 50;
    $precio = 0;

    if ($cita == "tramo1"){
         $precioCitaActu = 200;
    } elseif ($cita == "tramo2"){
        $precioCitaActu = 150;
    } elseif ($cita == "tramo3"){
        $precioCitaActu = 100;
    } elseif ($cita == "tramo4"){
        $precioCitaActu = 50;
    } else {
        $precioCitaActu = 0;
    }

    if ($tramo == "tramo1"){
        $precio = $tramo1;
    } elseif ($tramo == "tramo2"){
        $precio = ($tramo1 + $tramo2);
    } elseif ($tramo == "tramo3"){
        $precio = ($tramo1 + $tramo2 + $tramo3);
    } elseif ($tramo == "tramo4"){
        $precio = ($tramo1 + $tramo2 + $tramo3 + $tramo4);
    } else {
        $precio = ($tramo1 + $tramo2 + $tramo3 + $tramo4 + $tramo5);
    }

     echo "El precio de la cita actual es: $precioCitaActu, y el precio total $precio ";
     
    

    ?>

</body>
</html>  