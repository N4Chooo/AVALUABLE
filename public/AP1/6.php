<!DOCTYPE html>
<html>
<head>
    <title>Paga de un dia</title>
</head>
<body>
    <h1>Paga de un dia</h1>
    <?php
    define("gal", 3.7854);
   $produce = 100;
   $galones = $produce / gal;
   $paga = 2 * $galones;
   echo "En un dia produce: $galones galones";
   echo ", la paga de un dia es: $paga €";
    

    ?>

</body>
</html>