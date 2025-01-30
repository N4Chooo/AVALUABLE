<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEV61_1</title>
</head>
<body>
    <?php
    require_once("./class1/Refrigerados.php");
    require_once("./class1/Frescos.php");
    require_once("./class1/Cong_agua.php");
    require_once("./class1/Cong_aire.php");
    require_once("./class1/Cong_nitrogeno.php");
    

    $pescado = new Frescos("26/11/2026", "Nº45","12/05/2024", "España");
    var_dump($pescado);

    $lechuga = new Refrigerados("25/04/2026", "Nº34", "Granja", "01/07/2024", "10 ºC", "España" );
    var_dump($lechuga);

    $pizza = new Cong_aire("15/07/2026", "Nº74","08/02/2024", "España", "0 ºC", "10% nitro, 20% oxig, 20% diox carbono, 50% vapor agua");
    var_dump($pizza);

    $hielo = new Cong_agua("29/01/2026", "Nº94","04/09/2024", "España", "0 ºC",rand(1,10). "gr /1 l");
    var_dump($hielo);

    $cerdo = new Cong_nitrogeno("19/07/2026", "Nº14","14/03/2024", "España", "0 ºC", "Nitrogeno", rand(0,60) . "seg");
    var_dump($cerdo);

    ?>
</body>
</html>