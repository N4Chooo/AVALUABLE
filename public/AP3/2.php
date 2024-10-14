<!DOCTYPE html>
<html>
<head>
    <title>Kilo de uva</title>
</head>
<body>
    <h1>Kilo de uva</h1>
    <?php
    $tipoA = "V" ;
    $tipoB = "F" ;
    $tamaño1  = "V" ;
    $tamaño2  = "F" ;
   
     if ($tipoA == "V" ) {
        if ($tamaño1 == "V" ) {
            echo "El coste es : 0.20/kg";
        } else {
            echo "El coste es : 0.30/kg";
        }
    } else {
        if ($tipo2 == "V" ){
            if ($tamaño1 == "V" ) {
                echo "El coste es : 0.30/kg";
            } else {
                echo "El coste es : 0.50/kg";
            }
    }
    }
    
    ?>

</body>
</html>