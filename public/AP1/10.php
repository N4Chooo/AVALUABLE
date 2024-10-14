<!DOCTYPE html>
<html>
<head>
    <title>Total de metros cubicos</title>
</head>
<body>
    <h1>Total de metros cubicos</h1>
    <?php
    $L = 8;
    $A = 5;
    $pagoPorMcubico = 2;
    $areaDepo = $L * $A;
    $total = $areaDepo * $pagoPorMcubico;
    echo "Pagara: $total € si llena un deposito de $areaDepo metros cubicos";

    ?>

</body>
</html>