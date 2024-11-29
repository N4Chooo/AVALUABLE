<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP51</title>
</head>
<body>
<?php
echo "<br>Exercici 1<br>";


echo "<br>Exercici 2<br>";
 $numero = random_int(1,10);
 echo "Teniendo el numero" . $numero . "en numero romano es:" . numRomano($numero) . "<br>";
 function numRomano ($num) {
    $romanos =[
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
        6 => 'VI',
        7 => 'VII',
        8 => 'VIII',
        9 => 'IX',
        10 => 'X',
    ];
    return $romanos[$num];
 }

 echo "<br>Exercici 3<br>";
 $combiNumeros =[];
 $i=0;

while ($i<6){
    $num = $dameNumero();
     if(!in_array($num, $combiNumeros)){
        $combiNumeros[$i] = dameNumero();
        $i++;
     }
 }
 function dameNumero(){
    $numPremiado = rand(1,49);
    return $numPremiado;
 }
echo "El numero premiado es: " . implode(",",$combiNumeros);

echo "<br>Exercici 4<br>";
$empleados = [
    'Juan'=> [
    'horas' =>40,
    'tarifa' =>15
    ],
    'Perico'=> [
    'horas' =>20,
    'tarifa' =>25
    ],
    'Andres'=> [
    'horas' =>45
    ],
];
function calculaSalario ($horas, $tarifa=10){
    if ($horas>40){
        $tarifa*=1.25;
    }
    return $horas * $tarifa;
}
foreach ($empleados as $nombre => $datos){
    $numHoras= $datos["horas"];
    $tipotarifa = $datos['tarifa'] ?? 10;
    $salario= calculaSalario($numHoras, $tipotarifa);
    echo "$salario <br>";
}

echo "<br>Exercici 5<br>";




?>
</body>
</html>