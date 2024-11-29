<?php
declare(strict_types=1);


// A continuació es mostren diversos blocs de codi, llegiu-los, comprengueu-los i intenteu trobar el que està malament.
// Una vegada finalitzat aquest exercici, repassarem el codi tots junts i podrem compartir com hem depurat els problemes següents.
// Intenta arreglar un codi cada vegada i sort! (Escriviu com heu trobat la resposta i com heu depurat el problema)
// =============================================================================================================================

// === Exercici 1 ===
// Estem definint una funció, però no funciona quan l'executem.
// Mireu l'error que obteniu, llegiu-lo i us hauria d'indicar el problema...,
// De vegades, fins i tot el vostre IDE us pot dir què passa
echo "<b>Exercici 1:</b>";

function nou_Exercici($x) {
    $bloc = "<br/><hr/><br/><br/><b>Exercici $x:</b><br/>";
    echo $bloc;
}

nou_Exercici(2);

// === Exercici 2 ===
// A continuació creem una matriu setmanal amb tots els dies de la setmana.
// Aleshores intentem imprimir el primer dia, que és dilluns, executem el codi i veiem què passa.
$setmana = ["dilluns", "dimarts", "dimecres", "dijous", "divendres", "disabte", "diumenge"];
$dilluns = $setmana[1];

echo $dilluns;


nou_Exercici(3);
// === Exercici 3 ===
// Això hauria de mostrar "Depurat !" , arregleu-ho de manera que aquest sigui el text literal
$str = "Depurat ! ";
echo substr($str, 0, 10);

nou_Exercici(4);
// === Exercici 4 ===
// De vegades per a depurar codi, cal consultar la documentació per entedre que s'està fent...
// El print_r($setmana) hauria de donar: Array ( [0] => lluns [1] => marts [2] => mecres [3] => jous [4] => vendres [5] => ssabte [6] => umenge )
// Busqueu què passa amb aquest codi i, a continuació, solucioneu-lo amb UN CARÀCTER!
foreach($setmana as &$dia) {
    $dia = substr($dia, 2);

}

print_r($setmana);




nou_Exercici(5);
// === Exercici 5 ===
// La matriu hauria d'imprimir totes les lletres de l'alfabet (a-z), però en canvi fa +aa-yz
// Arregla el codi de manera que el bucle for només pose de la a-z a la matriu
$arr = [];
for ($lletra = ord('a'); $lletra <= ord('z'); $lletra++) {
    array_push($arr, chr( $lletra));
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z array de l'alfabet

/*
nou_Exercici(6);
// === Final Exercici ===
// El següent codi hauria de mostrar el següent al final:
// Aquest és el nom: $nom - $nom2
// Les variables $nom es combinen aleatòriament com es veu al codi, corregeix tots els errors mantenint la funcionalitat!
// Exemples: capità estrany, vídua formiga, home de ferro, ...
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as $param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    echo implode($params, " - ");
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes))][rand(0, 10)];

    echo $randname;
}

echo "El nom és: " . combineNames();
*//*
nou_Exercici(7);
function copyright(int $any) {
    return "&copy;" . $any . "Entorns de Desenvolupament";
}
//imprimeix el copyright
echo copyright(date('Y'));

///
///
///
nou_Exercici(8);
function login(string $email, string $password) {
    if($email == 'mviel@exemple.com' || $password == 'florida') {
        return 'Hola Manel';
        return ' Viel';
    }
    return 'Accés denegat';
}
/* No canvieu el codi de les línies següents: */
/*
//hauria de saludar l'usuari amb el seu nom complet (Manel Viel)
echo login('mviel@exemple.com', 'florida');
//hauria de dir: Accés denegat
echo login('mviel@exemple.com', 'dfgidfgdfg');
//hauria de dir: Accés denegat
echo login('vicent@exemple', 'erroni');*/

/* A partir d'ací, ja podeu modificar el codi*/

nou_Exercici(9);
function isLinkValid(string $link) {
    $inacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($inacceptables as $inacceptable) {
        if (strpos($link, $inacceptable) !==    false) {
            return 'Trobat un inacceptable<br />';
        }
    }
    return 'Acceptable<br />';
}
//link invàlid
echo isLinkValid('http://www.google.com/hack.pdf');
//link invàlid
echo isLinkValid('https://google.com');
//link VÀLID
echo isLinkValid('http://google.com');
//link VALID
echo isLinkValid('http://google.com/test.txt');


nou_Exercici(10);

//Filtra la matriu $possiblesFruites perquè només contingua fruites vàlides
//ATENCIÓ: no canvieu les matrius en si
$possiblesFruites = ['poma', 'llibre', 'carn de vedella', 'plàtan', 'cirera', 'tomaca', 'cotxe'];
$fruitesValides = ['poma', 'pera', 'plàtan', 'cirera', 'tomaca'];
//canvieu el codi del bucle
$numElements=count($possiblesFruites);
for($i=0; $i < $numElements; $i++) {
    if(!in_array($possiblesFruites[$i], $fruitesValides)) {
        unset($possiblesFruites[$i]);
    }
}
var_dump($possiblesFruites);//No modifiqueu aquesta línia