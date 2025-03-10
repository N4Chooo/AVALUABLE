<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP64</title>
    <style>
        body{
            background-color:lightblue;
        }
        
        .libro{
            text-align:center;
            width:200px;
            border:1px black solid;
            padding:10px;
            margin:10px;
            background-color:lightgray;
            position:absolute;
            left:9cm;
            top:2.5cm

        }
        .revista{
            text-align:center;
            width:200px;
            border:1px black solid;
            padding:10px;
            margin:10px;
            background-color:lightgray;
            position:absolute;
            left:1cm;
            top:2.5cm
        }
    
        #revistas{
            display:flex;
            flex-direction:column;
            align-items:center;
            width:200px;
            border:1px black solid;
            padding:10px;
            margin:10px;
            background-color:lightgray;
            position:absolute;
            left:1cm;
            top:4cm
            
        }
        #libros{
            display:flex;
            flex-direction:column;
            align-items:center;
            width:200px;
            border:1px black solid;
            padding:10px;
            margin:10px;
            background-color:lightgray;
            position:absolute;
            left: 9cm;
            top:4cm

        }
        #borrar{
            width:200px;
            border:1px black solid;
            padding:10px;
            margin:10px;
            background-color:lightgray;
            position:absolute;
            left: 5cm;
            top:16cm
        }
        #info{
            position:absolute;
            left: 17cm;
            top:5cm;
            text-align:center;
        }
        #php{
            position:absolute;
            left: 17cm;
            top:7cm
        }
        .php{
            width:400px;
            border:1px black solid;
            padding:10px;
            margin:10px;
            background-color:lightgray;
        }
       


    </style>
</head>
<body>
<h1 >GESTOR DE BIBLIOTECA</h1>
    <br>
    <h2 id="revista" class="revista" >REVISTA</h2>
    <form method="POST" action="" id="revistas" class="revistas">
    <label for="CrearREV">CREAR REVISTA:</label>
    <select id="CrearREV" name="CrearREV" required>
            <option value="2">No</option>
            <option value="1">Si</option> 
        </select><br>
        <label for="nombreREV">Nombre:</label>
        <input type="text" id="nombreREV" name="nombreREV" value="" required><br>
        <label for="tituloREV">Titulo:</label>
        <input type="text" id="tituloREV" name="tituloREV" value="" required><br>
        <label for="AutorREV">Autor:</label>
        <input type="text" id="AutorREV" name="AutorREV" value="" required><br>
        <label for="publiREV">Año publi:</label>
        <input type="number" id="publiREV" name="publiREV" value="" required><br>
        <label for="temaREV">Tematica:</label>
        <input type="text" id="temaREV" name="temaREV" value="" required><br>
        <br>
        <button type="submit">Añadir Revista</button>
        </form>
    <br>
    <h2 class="libro" id="libro">LIBRO</h2>
    <form method="POST" action="" id="libros" class="libros">
    <label for="CrearLIB">CREAR LIBRO:</label>
    <select id="CrearLIB" name="CrearLIB" required>
    <option value="2">No</option>
            <option value="1">Si</option>
        </select><br>
        <label for="nombreLIB">Nombre:</label>
        <input type="text" id="nombreLIB" name="nombreLIB" value="" required><br>
        <label for="tituloLIB">Titulo:</label>
        <input type="text" id="tituloLIB" name="tituloLIB" value="" required><br>
        <label for="AutorLIB">Autor:</label>
        <input type="text" id="AutorLIB" name="AutorLIB" value="" required><br>
        <label for="publiLIB">Año publi:</label>
        <input type="number" id="publiLIB" name="publiLIB" value="" required><br>
        <label for="paginasLIB">Num paginas:</label>
        <input type="number" id="paginasLIB" name="paginasLIB" value="" required><br>
        <br>
        <button type="submit">Añadir Libro</button>
        </form><br><br>
    <h2 id="info" class="php">INFORMACION</h2>
    <div id="php" class="php"><div> 
    <?php 
    require_once("./class/Biblio.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //FORMULARIO LIBROS
    //CREAR
    if (isset($_POST["CrearLIB"])){
        if ($_POST["CrearLIB"] == "1"){
            $Biblioteca = new Biblio();
            $Biblioteca->createLibros($_POST["tituloLIB"],$_POST["AutorLIB"],$_POST["publiLIB"],$_POST["paginasLIB"] );
            $Biblioteca->añadirJson();
            $Biblioteca->formLibros();
            $Biblioteca->formRevista();
        }
    }
    
     //FORMULARIO REVISTAS
     //CREAR
     if (isset($_POST["CrearREV"])){
     if ($_POST["CrearREV"] == "1"){
        $Biblioteca = new Biblio();
        $Biblioteca->createRevista($_POST["tituloREV"],$_POST["AutorREV"],$_POST["publiREV"],$_POST["temaREV"] );
        $Biblioteca->añadirJson();
        $Biblioteca->formLibros();
        $Biblioteca->formRevista();
     }
    }

    $Biblioteca = new Biblio(); 
            if (isset($_POST["Posicion"])) {
                $posi = $_POST["Posicion"];
                if (isset($_POST["accion"])) {
                    if ($_POST["accion"] == "borrarLibro") {
                        $Biblioteca->borrarPublis($posi); 
                    } elseif ($_POST["accion"] == "borrarRevista") {
                        $Biblioteca->borrarPublis($posi);
                    }
                }
            }
            $Biblioteca->formLibros();
            $Biblioteca->formRevista();
    
    //BORRAR
    /*if (isset($_POST["Posicion"])){{
        $Biblioteca = new Biblio();
        $Biblioteca->borrarPublis($_POST["Posicion"]-1);
        $Biblioteca->verLibros();
        $Biblioteca->verRevista();

    }
    }*/
    }
    ?>
    <div>
</body>
</html>