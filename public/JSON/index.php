<?php
require_once("Book.php");
//EJEMPLO PARA EL MANEJO DE UNA BIBLIOTEA CON ARRAYS Y JSON
//AÑADIR
echo "AÑADIMOS INFORMACIÓN EN EL ARCHIVO JSON<br>";
//Leemos datos y hacemos array de objetos libros
$jsonContent = file_get_contents('datos.json');
var_dump($jsonContent);
$dataArray = json_decode($jsonContent, true);
var_dump($dataArray);
if ($dataArray != null){
    foreach ($dataArray as $array){
        $biblioteca [] = Book::fromArray($array);
    }
}

//Hacemos varios libros y añadimos
$biblioteca = [
    new Book ("El Conde de Montecristo", "Alejandro Dumas", 1328),
    new Book("IT", "Stephen King", 1987),
    new Book("La conjura de los necios", "J. Kenedy Toole", 1888)
];
var_dump($biblioteca);

//convertimos array de objetos a array de arrays
foreach ($biblioteca as $object){
    $arrayBook = $object->toArray();
    $jsonBiblio[] = $arrayBook;
 }
 var_dump($jsonBiblio);

//codificamos en json el array
$jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
//Guardamos
file_put_contents('datos.json', $jsonBiblio);

//LEER
echo "LEEMOS DEL ARCHIVO JSON<br>";
$biblioteca = []; //borro el array
echo "1.-Almacenamos en una variable el contenido del archivo json<br>";
$jsonContent = file_get_contents('datos.json');
var_dump($jsonContent);
echo "2.-Convertimos la variable en un array asociativo<br>";
$dataArray = json_decode($jsonContent, true);
var_dump($dataArray);
echo "3.-Convertimos el array en array de objetos<br>";
foreach ($dataArray as $array){
    $biblioteca [] = Book::fromArray($array);
}
var_dump($biblioteca);

//ELIMINAR
echo "ELIMINAMOS UN LIBRO POR ÍNDICE";
echo "LEEMOS DEL ARCHIVO JSON<br>";
//idem a leer
$biblioteca = []; //borro el array
$jsonContent = file_get_contents('datos.json');
$dataArray = json_decode($jsonContent, true);
foreach ($dataArray as $array){
    $biblioteca [] = Book::fromArray($array);
}
//empieza lo nuevo
$key=0;
unset($biblioteca[$key]);
$biblioteca=array_values($biblioteca);
echo "Array tras la eliminación<br>";
var_dump($biblioteca);

//idem añadir
$jsonBiblio = [];
foreach ($biblioteca as $object){
    $arrayBook = $object->toArray();
    $jsonBiblio[] = $arrayBook;
 }
$jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
file_put_contents('datos.json', $jsonBiblio);
