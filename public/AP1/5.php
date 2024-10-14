<!DOCTYPE html>
<html>
<head>
    <title>Area figura</title>
</head>
<body>
    <h1>Area figura</h1>
    <?php
    define("PI", 3.14);

    $R = 3;
    $H = 7;
    
    $BaseT = $R + $R;
    $AreaT = $BaseT * $H / 2;
    $AreaC = PI * $R * $R;
    $AreaTotal = $AreaT + $AreaC;
    echo "El area total de la figura es: $AreaTotal";

    ?>

</body>
</html>