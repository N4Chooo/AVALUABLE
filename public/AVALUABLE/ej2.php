<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
        //INTRODUCE AQUÍ TU CÓDIGO
        if ($_SERVER["REQUEST_METHOD"] == "POST" )
        $numero = $_POST["num"];
        
        if (is_int($numero % 2) == 0){
            do{
                echo "el numero es $numero";
                $numero / 2 ;
             } while ($numero > 1);
        }else{
            echo "el numero es $numero";
            $numero *3 +1 ;
         } while ($numero > 1);
    

    ?>
    
    <form method="POST" action="">
        <label for="num">NÚMERO:</label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>