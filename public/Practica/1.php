<!DOCTYPE html>
<html>
<head>
    <title>Coste hamburguesa</title>
</head>
<body>
    <h1>Coste hamburguesa</h1>
    <?php
   $tipo = $_GET["tipo"];
   $cantidad = 2;
   $cargo = 0;
   $coste = 0;
   $precio= 0;
   $total = 0;

    if ($tipo =="simple"){
        $precio = 20;
        } elseif ($tipo == "doble")
        $precio = 25;
        else {
            $precio = 28;
        }    
        $coste = $precio * $cantidad;
        $cargo = $coste * 0.05;
        $total = $coste + $cargo;
    
    echo "El coste de la hamburguesa es:" . $total;
    

    ?>

</body>
</html>