<!DOCTYPE html>
<html>
<head>
    <title>Precio autobus</title>
</head>
<body>
    <h1>Precio autobus</h1>
    <?php
    $tipo = "B" ;
    $km = "100";
    $personas = "30";

    if ($tipo == "A") {
        $pago = 2.0 * $km;
    } else
    if ($tipo == "B") {
        $pago = 2.5 * $km;
    } else {
        $pago = 3.0 * $km;
    }
    if ($personas < 20) {
        $pagoP = $pago / 20;
    } else {
        $pagoP = $pago / $personas;
    }
    echo "El pago por persona es: $pagoP y el pago total es: $pago";
    ?>

</body>
</html>