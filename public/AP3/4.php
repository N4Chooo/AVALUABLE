<!DOCTYPE html>
<html>
<head>
    <title>Precio llamada</title>
</head>
<body>
    <h1>Precio llamada</h1>
    <?php
    $minutos = "7" ;
    $tramo1 = 5;
    $tramo2 = 2.4;
    $tramo3 = 1.4;
    $tramo4 = 0;
    $tramo = 0;
    $Dia = "Lunes" ;
    $diaHabil= "Mañana";
    
    if ($minutos <= 5) {
        $total = $minutos;
    }elseif ($minutos <= 8) {
        $tramo = $minutos - 5;
        $total = $tramo1 + $tramo * 0.8;
    }elseif ($minutos <= 10) {
        $tramo = $minutos - 8;
        $total = $tramo1 + $tramo2 + $tramo * 0.7;
    }else {
        $tramo = $minutos - 10;
        $total = $tramo1 + $tramo2 + $tramo3 + $tramo * 0.5;
    }
   

    if ($Dia == "Domingo") {
        $extra = 0.03 * $total;
    } else {
    if ($diaHabil == "Mañana") {
        $extra = 0.15 * $total;
    } else {
        $extra = 0.10 * $total;
    }
    }
    echo "Debe pagar a la empresa " . $total + $extra . " euros.";
    ?>

</body>
</html>