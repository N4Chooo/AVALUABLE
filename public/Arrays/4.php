<!DOCTYPE html>
<html>
<head>
    <title>Arrays4</title>
</head>
<body>
    <h1>Arrays4</h1>
    
    <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" );
  $letras=["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
  $dni = $_POST["DNI"];
  $Posicion = $dni / 23;

  for ($i = 0; $i < $Posicion; $i++){
    $posicion= $i;
}
echo "La letra de tu DNI es: " . $letras[$posicion];
    ?>
<form method="POST" action="">
        <label for="DNI">DNI:</label>
        <input type="number" id="DNI" name="DNI" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>