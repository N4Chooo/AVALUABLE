<!DOCTYPE html>
<html>
<head>
    <title>Cantidades</title>
</head>
<body>
    <h1>Cantidades</h1>
    <?php
    $cantidades = $_GET["cant"];
    $negativos = 0;
    $positivos = 0;
    $ceros = 0;

    for ($i=1;$i<=$cantidades;$i++) {
       $num = rand(-100,100);
       if ($num < 0) {
         $negativos++;
       } elseif ($num > 0) {
         $positivos++;
         }else {
           $ceros++;
         }
    }

            echo "Has introducido $negativos números negativos, $positivos números positivos y $ceros ceros";
    ?>

</body>
</html>