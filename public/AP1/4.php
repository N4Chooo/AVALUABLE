<!DOCTYPE html>
<html>
<head>
    <title>Area total terreno</title>
</head>
<body>
    <h1>Area total terreno</h1>
    <?php
    $A = 7;
    $B = 6;
    $C = 3;
    
    $areaR= $C * $B;
    $LadoT= $A - $C;
    $areaT= $LadoT * $B/2;
    $areaTotal= $areaR + $areaT;
    echo "El area total del terreno es: $areaTotal";
    ?>

</body>
</html>