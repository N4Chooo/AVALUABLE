<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
        //INTRODUCE AQUÍ TU CÓDIGO
    

       if ($_SERVER["REQUEST_METHOD"] == "POST" )
        $paquetes = $_POST["paquetes"];
        $ancho = $_POST["ancho"];
        $largo = $_POST["largo"];
        $alto = $_POST["alto"];
        $peso = $_POST["peso"];
        $zonas = $_POST["zona"];
        $tamano = $ancho * $largo * $alto;
        $precio = 0;
        $aumento = 0;
        $aumento2 = 0;
        $preciototal = ($precio + $aumento + $aumento2)*$paquetes;

         if (is_numeric($tamano)) {
            if ($tamano <= 0.5)
               $precio = $tamano * 50;
         }elseif ($tamano <= 1){
            $precio = $tamano * 75;
         } else {
            $precio = $tamano * 100;
         }

         if (is_numeric($peso)) {
            if ($peso <= 5)
               $aumento * 1;
         }elseif ($peso <= 10){
               $aumento = 0.25 * $precio;
         }elseif ($peso <= 15){
               $aumento = 0.50 * $precio;
         }
          if ($zona = "Peninsula"){
             $aumento2 * 1 ;
          }elseif ($zona = "Baleares Maritimo"){
             $aumento2 * 1 ;
          }elseif ($zona = "Baleares Aereo"){
            $aumento2 = 0.10 * $precio;
         }else{
            $aumento2 = 0.10 * $precio;
         }
        

         if ($peso >=15 ){
            echo "No se puede hacer el envio debido a que pesa mas de 15kg";
         }else{
            echo "El precio total es " . $preciototal;
         }

    ?>
    <form method="POST" action="">
        <label for="kilos">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="ancho">ANCHO:</label>
        <input type="number" id="ancho" name="ancho" value="">
        <label for="largo">LARGO:</label>
        <input type="number" id="largo" name="largo" value="">
        <label for="alto">ALTO:</label>
        <input type="number" id="alto" name="alto" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <label for="zona">ZONA:</label>
        <input id="zona" name="zona" value="">
        <input type="submit" value="Calcular">
        <p>ZONAS ENVIO<br>Peninsula<br>Baleares Maritimo<br>Baleares Aereo<br>Canarias</p>
    </form>

</body>
</html>