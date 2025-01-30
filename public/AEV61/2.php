<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEV61_2</title>
</head>
<body>
    <?php
    require_once("./class2/Baloncesto.php");
    require_once("./class2/Futbol.php");
    require_once("./class2/Rugby.php");
    $array=[rand(1,3),rand(1,3),rand(1,3),rand(1,3),rand(1,3)];
     
     
    foreach ($array as $data){
        if ($data == 1){
            $data = new Baloncesto("120 kcal", rand(1, 100) . "min", rand(0,10), rand(0,10));
        }elseif ($data == 2){
            $data= new Futbol("234 kcal", rand(1, 120). "min",rand(0,10) . "-" . rand(0,10) , rand(0,10),rand(0,10));
        }elseif ($data == 3){
            $data = new Rugby("267 kcal",rand(1, 100)."min",rand(0,10),rand(0,10) );
        }
        var_dump($data);
    }

    ?>
</body>
</html>