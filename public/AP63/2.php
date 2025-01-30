<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO3</title>
</head>
<body>
    <?php
    class Personal {
        protected $nombre;
        protected $direccion;
        public function __construct($name = "descaonocido", $direction = "desconocido") {
            $this -> nombre = $name;
            $this -> direccion = $direction;
        }
    }
    class Estudiante extends Personal {
        private $nif;
        private $fechaAlta;
        private $edad;
        public function __construct($nameEstudiante, $directionEstudiante, $nifEstudiante = "desconocido", $date = "desconocida", $age = 0) {
            parent::__construct($nameEstudiante, $directionEstudiante);
            $this -> nif = $nifEstudiante;
            $this -> fechaAlta = $date;
            $this -> edad = $age;
        }
        public function displayEstudiante() {
            echo "Alumno con el nombre de " . $this -> nombre . ", con direccion " . $this -> direccion . ", con nif " . $this -> nif . ", con una fecha de alta de el " . $this -> fechaAlta . " y con una edad de " . $this -> edad . ".<br>";
        }
    }
    class EstudianteIntercambio extends Personal {
        private $nif;
        private $fechaAlta;
        private $edad;
        private $paisOrigen;
        public function __construct($nameEstudianteInter, $directionEstudianteInter, $nifEstudianteInter = "desconocido", $dateInter = "desconocida", $ageInter = 0, $countryOrigin = "Desconocido") {
            parent::__construct($nameEstudianteInter, $directionEstudianteInter);
            $this -> nif = $nifEstudianteInter;
            $this -> fechaAlta = $dateInter;
            $this -> edad = $ageInter;
            $this -> paisOrigen = $countryOrigin;
        }
        public function displayEstudianteIntercambio() {
            echo "Alumno con el nombre de " . $this -> nombre . ", con direccion " . $this -> direccion . ", con nif " . $this -> nif . ", con una fecha de alta de el " . $this -> fechaAlta . " y con una edad de " . $this -> edad . " y al ser un estudiante de intercambio su pais de origen es " . $this -> paisOrigen . ".<br>";
        }
    }
    class Profesor extends Personal {
        private $numSS;
        private $titulacion;
        private $especialidad;
        public function __construct($nameTeacher, $directionTeacher, $numSSTeacher = "desconocido", $titulacionTeacher = "desconocida", $especialidadTeacher = "desconocida") {
            parent::__construct($nameTeacher, $directionTeacher);
            $this -> numSS = $numSSTeacher;
            $this -> titulacion = $titulacionTeacher;
            $this -> especialidad = $especialidadTeacher;
        }
        public function displayProfesor() {
            echo "Profesor con el nombre de " . $this -> nombre . ", con direccion " . $this -> direccion . ", con numSS " . $this -> numSS . ", con una titulacion de " . $this -> titulacion . " y con una especialidad de " . $this -> especialidad . ".<br>";
        }
    }
    class PersonalGestion extends Personal {
        private $numSS;
        private $posicion;
        public function __construct($namePersonal, $directionPersonal, $numSSPersonal = "desconocido", $posicionPersonal = "desconocida") {
            parent::__construct($namePersonal, $directionPersonal);
            $this -> numSS = $numSSPersonal;
            $this -> posicion = $posicionPersonal;
        }
        public function displayPersonalGestion() {
            echo "Personal de gestion con el nombre de " . $this -> nombre . ", con direccion " . $this -> direccion . ", con numSS " . $this -> numSS . ", con la posicion de " . $this -> posicion . ".<br>";
        }
    }
    
    $alumno1 = new Estudiante("Pepe", "Bajo un puente", "12345678A", "26/01/2025", 20);
    $alumno1 -> displayEstudiante();
    $alumno2 = new EstudianteIntercambio("Pepe", "Bajo un puente", "12345678B", "26/01/2025", 20, "Suiza");
    $alumno2 -> displayEstudianteIntercambio();
    $profe1 = new Profesor("Pepe", "Bajo un puente", "123456789", "Demonologia", "Demonologia superior");
    $profe1 -> displayProfesor();
    $personal1 = new PersonalGestion("Pepe", "Bajo un puente", "987654321", "conserge");
    $personal1 -> displayPersonalGestion();
    ?>
</body>
</html>