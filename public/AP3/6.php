<!DOCTYPE html>
<html>
<head>
    <title>Ahorro</title>
</head>
<body>
    <h1>Ahorro</h1>
    <?php
    $total = 0;

     for ($i = 1; $i <= 12; $i++) {
           $cantidad = rand(0, 250);
           $total += $cantidad;
              echo "Este mes has ahorrado $cantidad euros y llevas ahorrados $total euros<br>";
        }

    ?>

</body>
</html>