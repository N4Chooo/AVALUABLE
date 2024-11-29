<!DOCTYPE html>
<html>
<head>
    <title>Array5</title>
</head>
<body>
    <h1>Array5</h1>
    <?php
        $tiradas = 10;
        $rondas = [];
        $gana1 = 0;
        $gana2 = 0;
        $empatan = 0;


        //genero el array de ganadoras
        for ($i=0;$i<$tiradas;$i++){
            $j1 = rand(2,12);
            $j2 = rand(2,12);


            if ($j1>$j2){
                $rondas[$i] = 1;
            }elseif ($j1 < $j2){
                $rondas[$i] = 2;
            }else{
                $rondas[$i] = "X";
            }
        }


        //recorro el array
        for ($i=0;$i<count($rondas);$i++){
            if ($rondas[$i] == 1){
                $gana1++;
            }elseif($rondas[$i] == 2){
                $gana2++;
            }else{
                $empatan++;
            }
        }
       
        echo "El 1 gana un " . $gana1/$tiradas*100 . " % de las veces<br>";
        echo "El 2 gana un " . $gana2/$tiradas*100 . " % de las veces<br>";
        echo "Empatan un " . $empatan/$tiradas*100 . " % de las veces<br>";
   
    ?>


</body>
</html>