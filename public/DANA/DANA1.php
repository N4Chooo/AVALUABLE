<!DOCTYPE html>
<html>
<head>
    <title>DANA1</title>
</head>
<body>
    <h1>DANA1</h1>

    <?php
      echo "ACTIVIDAD 1<br>";
   $horas=24;
   $precipitaciones=[];
      for ($i = 0; $i < $horas; $i++) {
          $precipitaciones[$i] = rand(0, 100);
        }
      $suma= 0;
      for ($i=0 ;$i< 24;$i++){
        $suma += $precipitaciones[$i];
        if ($precipitaciones[$i]>=50)
          echo "Alerta por mas de 50mm de precipitaciones en la hora : $i";
        echo "<br>";

      } 
      echo"<br>";
      echo "El total de precipitaciones del dia ha sido de : $suma <br><br>";

      echo "ACTIVIDAD 2<br>";
      $estaciones = 5;
      $horas = 24;
      $precipitaciones2 = [];

      for ($i = 0; $i < $estaciones; $i++) {
      for ($j = 0; $j < $horas; $j++) {
        $precipitaciones2[$i][$j] = rand(0, 100);
       }
      }
      $suma= [0,0,0,0,0];
      $mayor=0;
      $estacionMax=0;
      for ($i = 0; $i < count($precipitaciones2);$i++){
        for ($j = 0;$j < count($precipitaciones2[$i]);$j++){
          $suma[$i] += $precipitaciones2[$i][$j];
        }
         if($suma[$i]>$mayor){
          $mayor = $suma[$i];
          $estacionMax= $i;
         }

        echo "En la estacion $i hubieron $suma[$i] de precipitaciones totales" ;
        echo "<br>";
      }
      echo "La estacion con mas precipitaciones es la $estacionMax <br><br>";

      echo "ACTIVIDAD 3<br>";
      $valores= 10;
      $precipitaciones3 = [] ;
      for ($i=0; $i < $valores; $i++){
        $precipitaciones3[$i] = rand(0,100);
      }
      
      for ($i=0;$i <count($precipitaciones3);$i++){
        $riesgo= 0;
        if($precipitaciones3[$i]<=20){
         $riesgo="Bajo";
        }elseif($precipitaciones3[$i]<=50){
          $riesgo="Medio ";
        }elseif($precipitaciones3[$i]>50){
          $riesgo="Alto";
        }
       echo "La zona $i tiene un riesgo $riesgo<br> ";
      }
    

      echo "<br>ACTIVIDAD 4<br>";
      $registros=50;
      $calles=[];
      $estadoCalles=[];
      for($i=0;$i<$registros;$i++){
        $calles[$i]= "Calle$i";
        $estadoCalles[$i]=rand(0,2);
      }
      $callesintran=0;
      for($i=0;$i<50;$i++){
        $estado=0;
        if($estadoCalles[$i]<1){
          $estado="sin daño";
        }elseif($estadoCalles[$i] <2){
          $estado="dañado";
        }else{
          $estado="intransitable";
          $callesintran++;
        }
        echo "$calles[$i] esta en estado $estado <br>";
      }
      if($callesintran>9){
        echo "Alerta por mas de 10 calles intransitables";
      }
      echo " (hay $callesintran calles intransitables)";
      
       
    ?>
</body>
</html>