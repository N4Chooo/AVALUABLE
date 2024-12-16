<!DOCTYPE html>
<html>
<head>
    <title>AEV51</title>
   
</head>
<body>
    <h1 align="center">AEV51</h1>
    <?php
$pomodoroHaters  = [
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', 'A', 'A', 'A', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'A', '0', 'A', 'A', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', 'A', 'A', '0', '0', 'A', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '0', 'A', 'A', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~']
];

$impacts = [
    [20, 4],
    [2, 13],
    [13, 12],
    [3, 17],
    [2, 13],
    [5, 19],
    [6, 18],
    [5, 2],
    [20, 13],
    [9, 7],
    [5, 9],
    [15, 16],
    [16, 13],
    [16, 9],
    [16, 0],
    [3, 19],
    [19, 8],
    [1, 16],
    [18, 4],
    [21, 23],
    [7, 17],
    [22, 15],
    [21, 6],
    [14, 8],
    [12, 23],
    [7, 7],
    [22, 4],
    [3, 21],
    [2, 3],
    [8, 11],
    [0, 4],
    [7, 21],
    [11, 4],
    [7, 15],
    [6, 17],
    [5, 19],
    [4, 19],
    [4, 7],
    [23, 21],
    [15, 20],
    [2, 9],
    [21, 2],
    [1, 13],
    [7, 10],
    [21, 5],
    [13, 17],
    [2, 14],
    [11, 14],
    [22, 17],
    [18, 22],
    [2, 23],
    [3, 1],
    [18, 6],
    [17, 12],
    [18, 18],
    [20, 2],
    [3, 14],
    [11, 21],
    [6, 5],
    [6, 2],
    [12, 23],
    [18, 18],
    [21, 6],
    [10, 12],
    [5, 4],
    [16, 19],
    [8, 10],
    [12, 21],
    [15, 1],
    [20, 14],
    [3, 20],
    [6, 19],
    [20, 13],
    [15, 4],
    [10, 2],
    [5, 16],
    [20, 1],
    [12, 13],
    [11, 5],
    [12, 14],
    [8, 3],
    [6, 8],
    [19, 7],
    [16, 9],
    [13, 20],
    [3, 5],
    [1, 0],
    [20, 14],
    [12, 21],
    [12, 16],
    [15, 7],
    [9, 1],
    [1, 18],
    [20, 6],
    [8, 6],
    [22, 1],
    [10, 22],
    [19, 19],
    [7, 16],
    [8, 8]
];

//ESCRIBE AQUÍ TU PROGRAMA PRINCIPAL
//EJ1
mostrarMapas($pomodoroHaters);
echo "<br>";
//EJ2
zonasImpactos($pomodoroHaters, $impacts);
mostrarMapas($pomodoroHaters);
echo "<br>";
//EJ3
litrosColirio($pomodoroHaters);
echo "<br>";
echo "<br>";
//EJ4
impactosTotales($pomodoroHaters,$impacts);
mostrarMapas($pomodoroHaters);
echo "<br>";
//EJ5
dañosTotales($pomodoroHaters,$impacts);
echo "<br>";
echo "<br>";
//EJ6
marTotal($pomodoroHaters,$impacts);
marAfectado($pomodoroHaters,$impacts);
echo "<br>";
echo "<br>";
//EJ7
ventaPescado($pomodoroHaters, $impacts);

//ESCRIBE AQUÍ LA DEFINICIÓN DE LAS FUNCIONES
//EJ1
function mostrarMapas($mapa){
    foreach($mapa as $x) {
        foreach($x as $y){
            echo $y . "";
        }
        echo "<br>";
     } 
}
//EJ2
function zonasImpactos(&$mapa, $impactos){
    foreach($impactos as $impactoss){
        $x = $impactoss[0];
        $y = $impactoss[1];
    if ($mapa[$x][$y]=='A') {
    $mapa[$x][$y] ="C" ;
    }
}
}
//EJ3
function litrosColirio($mapa){
    $habitantes=0;
    foreach ($mapa as $valor){
        foreach ($valor as $valor2)
        if ($valor2=="C"){
            $habitantes+=5000;
        }
        $litrosTotales= 25 * $habitantes;
    }
    echo "AFECTADOS <br>";
    echo "Hay $habitantes en afectados en total <br>";
    echo "<br>";
    echo "LITROS TOTALES <br>";
    echo "Se necesitan un total de $litrosTotales L";
}
//EJ4
function impactosTotales(&$mapa, $impactos){
    foreach($impactos as $impactoss){
        $x = $impactoss[0];
        $y = $impactoss[1];
    if ($mapa[$x][$y]=="A") {
    $mapa[$x][$y] ="C" ;
    };
    if ($mapa[$x][$y]=="~") {
    $mapa[$x][$y] ="S" ;
    };
    if ($mapa[$x][$y]=="0") {
    $mapa[$x][$y] ="X" ;
    }
}
}
//EJ5
function dañosTotales(&$mapa, $impactos){
    $dañosNoUrbanos=0;
    $dañosUrbanos=0;
    foreach ($mapa as $valor){
        foreach ($valor as $valor2){
        if ($valor2=="C"){
            $dañosUrbanos+=200000;
        }
        if ($valor2=="X"){
            $dañosNoUrbanos+=50000;
        }
        $dañosTotales = $dañosUrbanos + $dañosNoUrbanos ;
    }
} 
echo "DAÑOS TOTALES <br>";
echo "Los costes totales de los daños son :$dañosTotales €";
}
//EJ6
function marTotal(&$mapa, $impactos){
    $mar=0;
    $marAfec=0;
    foreach ($mapa as $valor){
        foreach ($valor as $valor2){
        if ($valor2=="~"){
            $mar+=1;
    }elseif($valor2=="S"){
        $marAfec+=1;
    }
}
$marTotal= $mar + $marAfec;
$pescadoPorKm= 2000 / $marTotal;
$pescadoTotal= ($pescadoPorKm * $marAfec);
$resultadoPescado= round($pescadoTotal, 0);
}
echo "PESCADO <br>";
echo "Hay $resultadoPescado toneladas de pescado disponible <br>";
echo "<br>DATOS MAR <br>";
echo "Hay $marTotal Km^2 de mar total y";
}
function marAfectado(&$mapa, $impactos){
    $marAfectado=0;
    foreach ($mapa as $valor){
        foreach ($valor as $valor2){
        if ($valor2=="S"){
            $marAfectado+=1;
    }
}
}echo "  $marAfectado Km^2 de mar afectado";
}
//EJ7
function ventaPescado(&$mapa, $impactos){
    $mar=0;
    $marAfec=0;
    foreach ($mapa as $valor){
        foreach ($valor as $valor2){
        if ($valor2=="~"){
            $mar+=1;
    }elseif($valor2=="S"){
        $marAfec+=1;
    }
}
$marTotal= $mar + $marAfec;
$pescadoPorKm= 2000 / $marTotal;
$pescadoTotal= ($pescadoPorKm * $marAfec);
$ventas= 5 * $pescadoTotal;
$resultadoventas= round($ventas, 0);
}
echo "VENTAS <br>";
echo "Podriamos ganar $resultadoventas € vendiendo pescado" ;
}



?> 
</body>
</html>