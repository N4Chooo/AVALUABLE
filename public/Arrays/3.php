<!DOCTYPE html>
<html>
<head>
    <title>Arrays3</title>
</head>
<body>
    <h1>Arrays3</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" );
  $arr = [];
  for ($i = 0; $i < $_POST["Long_Array"]; $i++){
        $arr[] = $i +1;
  }
var_dump($arr);
    ?>
<form method="POST" action="">
        <label for="Long_Array">Longitud Array:</label>
        <input type="number" id="Long_Array" name="Long_Array" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>