<!DOCTYPE html>
<html>
<head>
    <title>Vocal</title>
</head>
<body>
    <h1>Vocal</h1>
    <?php

$letra =  $guess = $_POST["guess"];

if (in_array($letra, ['a','e','i','o','u'])) {

    echo "<br> Es una vocal";
} else {
    echo "<br> No es una vocal";
}
    ?>
<form method="POST" action="">
        <label for="guess">Introduce un número:</label>
        <input type="text" id="guess" name="guess" value="<?php echo $guess; ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>  