<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1 align="Center">CRUD</h1>
    <h2 >REVISTA</h2>
    <form method="POST" action="" id="revistas">
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
        <label for="contenidoREV">Ver:</label>
        <select id="contenidoREV" name="contenidoREV" required>
            <option value="1">Si</option>
            <option value="2">No</option>
        </select><br>
        <button type="submit">Añadir Revista</button>
        </form><br><br>
        <form method="POST" action="" id="borrarRE">
        <label for="borrarREV">Borrar:</label>
        <select id="borrarREV" name="borrarREV" required>
            <option value="1">Si</option>
            <option value="2">No</option>
        </select><input type="number" id="posicionREV" name="posicionREV" value="" required><br>
        <button type="submit">Borrar</button>
        </form>
    <br>
    <h2 >LIBRO</h2>
    <form method="POST" action="" id="libro">
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
        <label for="contenidoLIB">Ver:</label>
        <select id="contenidoLIB" name="contenidoLIB" required>
            <option value="1">Si</option>
            <option value="2">No</option>
        </select><br>
        <button type="submit">Añadir Libro</button>
        </form><br><br>
        <form method="POST" action="" id="borrarLI">
        <label for="borrarLIB">Borrar:</label>
        <select id="borrarLIB" name="borrarLIB" required>
            <option value="1">Si</option>
            <option value="2">No</option>
            </select><input type="number" id="posicionLIB" name="posicionLIB" value="" required><br>
        <button type="submit">Borrar</button>
        </form><br><br><br>

    <br><br>
    <h2>INFORMACION</h2>
    
    <?php 

    require_once("./class/Biblio.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //FORMULARIO LIBROS
    //CREAR
    if (isset($_POST["CrearLIB"])){
        if ($_POST["CrearLIB"] == "1"){
            $Biblioteca = new Biblio();
            $Biblioteca->createLibros($_POST["tituloLIB"],$_POST["AutorLIB"],$_POST["publiLIB"],$_POST["paginasLIB"] );
        }
    }

    //VER
    if (isset($_POST["CrearLIB"])){
        if ($_POST["CrearLIB"] == "1" && $_POST["contenidoLIB"] == "1"){
           $Biblioteca->verLibros();
       }
   }

   //BORRAR
   if (isset($_POST["borrarLIB"]) && isset($_POST["PosicionLIB"])){
    if ($_POST["borrarLIB"] == "1"){
        $Biblioteca = new Biblio();
        $Biblioteca->borrarLibros($_POST["PosicionLIB"]);
    }
    }



     //FORMULARIO REVISTAS
     //CREAR
     if (isset($_POST["CrearREV"])){
     if ($_POST["CrearREV"] == "1"){
        $Biblioteca = new Biblio();
        $Biblioteca->createRevista($_POST["tituloREV"],$_POST["AutorREV"],$_POST["publiREV"],$_POST["temaREV"] );
     }
    }

    //VER
    if (isset($_POST["CrearREV"])){
        if ($_POST["CrearREV"] == "1" && $_POST["contenidoREV"] == "1"){
            $Biblioteca->verRevista();
        }
        }

    //BORRAR
    if (isset($_POST["borrarREV"]) && isset($_POST["PosicionREV"])){
    if ($_POST["borrarREV"] == "1"){
        $Biblioteca = new Biblio();
        $Biblioteca->borrarRevistas($_POST["PosicionREV"]);
    }
    }

    }
    ?>
    
</body>
</html>