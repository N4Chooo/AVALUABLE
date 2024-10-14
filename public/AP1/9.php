<!DOCTYPE html>
<html>
<head>
    <title>Cambio a pulgadas</title>
</head>
<body>
    <h1>Cambio a pulgadas</h1>
    <?php
    define("pulgada", 0.0254);
    $metros = 20;
    $pulgadas = $metros / pulgada;
    echo "Si quiere 20 metros pedira: $pulgadas pulgadas";


    ?>

</body>
</html>