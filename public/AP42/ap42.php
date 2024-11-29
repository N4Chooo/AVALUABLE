<!DOCTYPE html>
<html>
<head>
    <title>AP42</title>
</head>
<body>
    <h1>AP42</h1>

    <?php
      echo "ACTIVIDAD 1<br>";
      $array1=[2,4,5,2,8,17];
      for ($i=5;$i>-1;$i--){
        echo $array1[$i] . "-";
    }
    
     echo "<br><br>ACTIVIDAD 2 <br>";
    
    
     echo "<br><br>ACTIVIDAD 3 <br>";
     $numeros=[1,2,3,4,5,6,7,8,9];
     $pares=[];
     $impares=[];

     for ($i=0;$i<count($numeros);$i++){
       if(is_int($numeros[$i]/2)){
       $pares[$i] = $numeros[$i];
       }else{
        $impares[$i]= $numeros[$i];
       }
     }
     echo "Pares:";
     var_dump($pares);
     echo "<br>Impares:";
     var_dump($impares);
    
     echo "<br>ACTIVIDAD 4 <br>";



     echo "<br>VICENT LO QUE NO HE FET NO HO ENTENC DEMA EN LES CORRECIONS HO FARE Y ATENDRE";
    

    ?>
</body>
</html>