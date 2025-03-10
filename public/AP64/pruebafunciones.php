<?php
public function leerLibroJson() {
            $jsonContent = file_get_contents('datos.json');
            $dataArray = json_decode($jsonContent, true);
            if ($dataArray != null){
            foreach ($dataArray as $array) {
                if (isset($array['Num paginas'])) { 
                    $this->libros[] = Libro::fromArray($array);
            }
        }
        }
    }

public function leerRevistasJson(){
    $jsonContent = file_get_contents('datos.json');
    $dataArray = json_decode($jsonContent, true);
    if ($dataArray != null){
    foreach ($dataArray as $array){
        if (isset($array['Tematica'])) { 
        $this->revistas [] = Revista::fromArray($array);
        }
    }
    }
}

public function borrarLibro($posi){
        if (empty($this->libros)) {
            $this->leerJson(); 
        }
    if (isset($this->libros[$posi])) {
        unset($this->libros[$posi]); 
        $this->libros = array_values($this->libros); 
        $jsonBiblio = [];
       foreach ($this->libros as $object){
        $arrayBook = $object->toArray();
        $jsonBiblio[] = $arrayBook;
    }
    $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
    file_put_contents('datos.json', $jsonBiblio); 
        echo "<br>Libro borrado<br>";
    }else{
        echo "<br>Posicion vacia<br>";
     }
    
    }

    public function borrarRevista($posi){
        if (empty($this->revistas)) {
            $this->leerJson(); 
        }
    if (isset($this->revistas[$posi])) {
        unset($this->revistas[$posi]);  
        $this->revistas = array_values($this->revistas); 
        $jsonBiblio = [];
       foreach ($this->revistas as $object){
        $arrayBook = $object->toArray();
        $jsonBiblio[] = $arrayBook;
    }
    $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
    file_put_contents('datos.json', $jsonBiblio);
        echo "<br>Revista borrada<br>";
    }else{
        echo "<br>Posicion vacia<br>";
     }
    }

    //VER
    <label for="contenidoREV">Ver:</label>
        <select id="contenidoREV" name="contenidoREV" required>
            <option value="1">Si</option>
            <option value="2">No</option>
        </select>
    if (isset($_POST["CrearREV"])){
        if ($_POST["CrearREV"] == "1" && $_POST["contenidoREV"] == "1"){
            $Biblioteca->verRevista();
            if (!empty($Biblioteca->verLibros())){
                $Biblioteca->verLibros();
                }
        }
        }

        <label for="contenidoLIB">Ver:</label>
        <select id="contenidoLIB" name="contenidoLIB" required>
            <option value="1">Si</option>
            <option value="2">No</option>
        </select>

        if (isset($_POST["CrearLIB"])){
            if ($_POST["CrearLIB"] == "1" && $_POST["contenidoLIB"] == "1"){
               $Biblioteca->verLibros();
               if (!empty($Biblioteca->verRevista())){
                   $Biblioteca->verRevista();
                   }
           }
       }
    ?>

<h2>Lista:</h2>
        <p>Libros:</p>
        <?php  
        require_once("./class/Biblio.php");
        $Biblioteca = new Biblio();
        if(!empty($Biblioteca->leerJson())):?>
           <p>Registro vacio.</p>
        <?php else: ?>
          <ul>
            <li>
            <?php echo $Biblioteca->verLibros()?>
        <form method="POST" action="" id="borrar">
        <input type="hidden" name="Posicion" value="delete">
        <input type="hidden" name="indice" value="">
        <button type="submit">Borrar</button>
    </form>
        </li>
        </ul>
        <?php endif; ?>
        <p>Revistas:</p>
        <?php  
        require_once("./class/Biblio.php");
        $Biblioteca = new Biblio();
        if(!empty($Biblioteca->leerJson())):?>
           <p>Registro vacio.</p>
        <?php else: ?>
          <ul>
            <li>
            <?php echo $Biblioteca->verRevista() ?>
        <form method="POST" action="" id="borrar">
        <input type="hidden" name="Posicion" value="delete">
        <input type="hidden" name="indice" value="">
        <button type="submit">Borrar</button>
    </form>
        </li>
        </ul>
        <?php endif; ?>




        //BORRAR 
        <form method="POST" action="" id="borrar">
        <label for="Posicion">Borrar posicion :</label>
        <input type="number" id="Posicion" name="Posicion" value="" required><br>
        <button type="submit">BORRAR</button>
        </form><br><br>
        //BORRAR
    /*if (isset($_POST["Posicion"])){{
        $Biblioteca = new Biblio();
        $Biblioteca->borrarPublis($_POST["Posicion"]-1);
        $Biblioteca->verLibros();
        $Biblioteca->verRevista();

    }
    }*/