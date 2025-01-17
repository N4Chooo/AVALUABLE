<?php
    session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>
    <!--formulario para recoger las filas y columnas de inicio y fin-->
    <form method="POST" action="">
        <label for="FilaInicio">Fila Inicio:</label>
        <input type="number" id="FilaInicio" name="FilaInicio" >
        <br>
        <label for="ColumnaInicio">Columna Inicio:</label>
        <input type="number" id="ColumnaInicio" name="ColumnaInicio" >
        <br>
        <label for="FilaFin">Fila Fin:</label>
        <input type="number" id="FilaFin" name="FilaFin" >
        <br>
        <label for="ColumnaFin">Columna Fin:</label>
        <input type="number" id="ColumnaFin" name="ColumnaFin" >
        <br>
        <input type="submit" value="Prueba">
    </form>
</body>
</html>
    
<?php
    $numeros = [1,2,3,4,5,6];
    $colores = ['RED','YEL','GRE','BLU','BLA','WHI'];
    /*usa esto si no los generas tú*/
    /*
    $combinaciones=[[1,'RED'],[1,'YEL'],[1,'GRE'],[1,'BLU'],[1,'BLA'],[1,'WHI'],[2,'RED'],[2,'YEL'],[2,'GRE'],[2,'BLU'],[2,'BLA'],[2,'WHI'],[3,'RED'],[3,'YEL'],[3,'GRE'],[3,'BLU'],[3,'BLA'],[3,'WHI'],[4,'RED'],[4,'YEL'],[4,'GRE'],[4,'BLU'],[4,'BLA'],[4,'WHI'],[5,'RED'],[5,'YEL'],[5,'GRE'],[5,'BLU'],[5,'BLA'],[5,'WHI'],[6,'RED'],[6,'YEL'],[6,'GRE'],[6,'BLU'],[6,'BLA'],[6,'WHI']];
    $tablero = [[17,8,33,0,26,28],[16,9,1,18,3,34],[19,21,2,10,27,32],[20,35,4,30,11,31],[22,7,6,13,25,12],[23,24,15,14,29,5]];
    */
    $combinaciones= generarCombinaciones($numeros , $colores);
    $tablero= generarTablero();
    dibujarTablero($combinaciones , $tablero);
    tiradaPermitida($combinaciones , $tablero);
    

    $combinaciones=array();
    $_SESSION['tablero'] = $tablero;
   
    
    
    
   
    
    //FUNCIONES

  
    function generarCombinaciones(&$num , $color){
        foreach($num as $n){
        foreach($color as $colr){
            $combi[]=[$n, $colr];
        }
        }

    return $combi;
    }
    
    function dibujarTablero(&$combi , $tabla){
    for ($j = 0; $j < 6; $j++){
     for ($i = 0; $i < 6; $i++){
     echo $combi[$tabla[$j][$i]][0] . "-" ;
     echo $combi[$tabla[$j][$i]][1] . "  ";
    }
    echo "<br>";
    }
}
    function tiradaValida(&$combi, $tabla){
        if ($_SERVER["REQUEST_METHOD"] == "POST" );
       if ($combi[$tabla[$_POST["FilaInicio"]][$_POST["ColumnaInicio"]]][0] == $combi[$tabla[$_POST["FilaFin"]][$_POST["ColumnaFin"]]][0] 
        || $combi[$tabla[$_POST["FilaInicio"]][$_POST["ColumnaInicio"]]][1] == $combi[$tabla[$_POST["FilaFin"]][$_POST["ColumnaFin"]]][1]){
            echo "Tirada valida";
        }else {
            echo "Tirada NO valida";
        } 
    }

    function tiradaPermitida(&$combi, $tabla){
        if ($_SERVER["REQUEST_METHOD"] == "POST" );
        if ([$_POST["FilaInicio"]] == [$_POST["FilaFin"]] || [$_POST["ColumnaInicio"]] == [$_POST["ColumnaFin"]]){
             echo "TIRADA PERMITIDA <br>";
             tiradaValida($combi, $tabla);
         }else {
             echo "TIRADA NO PERMITIDA";
         } 
        }
        
    
        
    function generarTablero(){
    $numeros = range(0, 35);
    shuffle($numeros);
    $tabla = [];
    for ($i = 0; $i < 6; $i++) {
        $tabla[$i] = array_slice($numeros, $i * 6, 6);
    }
    return $tabla;
}    
    
?>
