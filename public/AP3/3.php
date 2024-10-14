<!DOCTYPE html>
<html>
<head>
    <title>Precio viaje</title>
</head>
<body>
    <h1>Precio viaje</h1>
    <?php
    $Alumnos = "70" ;
    
     if ($Alumnos >= 100) {
        $precio = 65;
    } else {
    if ($Alumnos >= 50) {
        $precio = 70;
    } else {
    if ($Alumnos >= 30) {
        $precio = 95;
    } else {
        $precio = 4000 / $Alumnos;
    }
    }
    }
  echo "El precio por alumno es de $precio euros, y debe pagar a la empresa " . $Alumnos * $precio . " euros.";
    
    ?>

</body>
</html>