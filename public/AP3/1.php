<!DOCTYPE html>
<html>
<head>
    <title>crustaceo crujiente</title>
</head>
<body>
    <h1>crustaceo crujiente</h1>
    <?php
    $personas = 500;
    $costeplato = 95;

     if ($personas > 300) {
        $costeplato = 75;
    } else {
        if ($personas > 200) {
            $costeplato = 85;
        } else {
            $costeplato = 95;
        }
    }
       echo "El coste del plato es :" . $costeplato;
    
    ?>

</body>
</html>