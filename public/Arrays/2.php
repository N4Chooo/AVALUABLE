<!DOCTYPE html>
<html>
<head>
    <title>Arrays2</title>
</head>
<body>
    <h1>Arrays2</h1>
    
    <?php

    $array1 = [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];
    $array2 = [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];

    if (count($array1) == count($array2)) {
        
        for ($i = 0; $i < count($array1); $i++) {
            echo $array1[$i] . " * " . $array2[$i] . " = " . ($array1[$i] * $array2[$i]) . "<br>";
        }
    } else {
        echo "Los arrays no tienen la misma longitud, no se puede realizar el proceso.";
    }

    ?>

</body>
</html>