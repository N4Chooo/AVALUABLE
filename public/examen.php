<?php
error_reporting(E_ERROR | E_PARSE);

// Escriu ací el teu nom: 
//Nacho Fayos Martinez

// Exercici 1: 
// Sabem que un nombre és divisible per altre quan el residu de la seua divisió entre eixe altre nombre és 0.
// Per què no funciona? Fes ús del debugger per a averiguar-ho i corregeix el codi.
/* RESPOSTA: [Escriu ací per què no funciona]
No funciona degut al ! 
*/
function esDivisibleEntre2 ($nombre){
echo("<BR/><b>Exercici 1 </b><BR/>");
  if($nombre%2 /*!*/==0){
    echo ("El nombre ".$nombre." és divisible entre 2");
    return true;
  }else{
    echo ("El nombre ".$nombre." NO és divisible entre 2");
    return false;
  }
}

//Exercici 2:
//2.1 - Indiqueu què fa aquesta funció
//2.2 - Utilitza l'inspector de variables per a analitzar el valor 
//      de la variable $comptador i de la variable $i en la 3a iteració del bucle for. 
//      Fes alguna captura de pantalla que demostre l'ús de l'inspector de variables.
/* RESPOSTA: [Escriu ací què fa aquesta funció i els valors demanats]
Aquesta funcio guarda en la $i el numero de $valorEnterPositiu i se li va restant el 
   ultim digit i guarda en comptador cuants digits te.
*/
function queFaAquestaFuncio($valorEnterPositiu){
    echo("<BR/><b>Exercici 2 </b><BR/>");
    $comptador = 0;
    for($i=$valorEnterPositiu;$i>0;$i=intdiv($i,10)){
        $comptador++;
    }
    echo "comptador val: ".$comptador;
    return $comptador;
}

//Exercici 3:
//Què és el que fa?
//Quantes iteracions es realitzen en total (els dos bucles)?
//Mostra l'estat de l'array $numeros en la iteració 11 (Fes-ho amb l'inspector de variables)
/* RESPOSTA: [Escriu ací què fa la funció i els valors demanats]
Aquesta funcio recorre el array $numeros i mira el element actual en $elementActual i el mostra, 
despres mira el element seguent i es guarda en $elementSeguent i comproba si $elementActual es major
que $elementSeguent, si es menor continua, i si es major $elementActual pasa del seguent element i
segueix el bucle. 
En l'iteracio 11 $numeros=23
*/
function hola (){
    echo("<BR/><b>Exercici 3 </b><BR/>");
    $numeros = array(1, 9, 23, 4, 55, 100, 1, 1, 23);
    $tamany = count($numeros);
    for ($x=0;$x < $tamany; $x++){
        for($y=0; $y < $tamany-1; $y++){
            $elementActual = $numeros[$y];
            $elementSeguent = $numeros[$y+1];
            if($elementActual>$elementSeguent){
                $numeros[$y]=$elementSeguent;
                $numeros[$y+1]=$elementActual;
            }
        }
    }
    print_r($numeros);
    return $numeros;
}

//Exercici 4: Arregleu el codi per a que funcione correctament.

//Es tracta d'endevinar una combinació secreta de 4 dígits per obrir una caixa forta.
//Si els valor introduïts per l'usuari són correctes mostrarà Accéss Permés, sino
//mostrarà Accés Denegat.
//El problema és que sempre mostra accés permés

function imprimeixFormulari($intents){
   echo ("<h3>Introdueix la combinació d'accés a la caixa forta</h3>");
   // Imprimir Formulari
   echo '<form action="examen.php" method="POST">';
   echo '<input type="text" name="digit1" size="1" maxlength = "1" placeholder="-">';
   echo '<input type="text" name="digit2" size="1" maxlength = "1" placeholder="-">';
   echo '<input type="text" name="digit3" size="1" maxlength = "1" placeholder="-">';
   echo '<input type="text" name="digit4" size="1" maxlength = "1" placeholder="-">';
   
   // Hidden que conté els intents que li queden a l'usuari
   echo '<input type="hidden" name="intents" value="', $intents , '">';
   
   
}

function footerFormulari (){
    // Botó submit
   echo '<br><input type="submit" name="submit">';
   echo '</form>';
}


function noFunciona(){
 echo("<BR/><b>Exercici 4 </b><BR/>");
  // combinació a endevinar per l'usuari
  $combinacioDigit1 = 1; 
  $combinacioDigit2 = 2;
  $combinacioDigit3 = 3;
  $combinacioDigit4 = 4;
  
  // intents la primera vegada que entrem a la pàgina        
  if (!isset($_POST['submit'])) {
      $intents = 5;
      imprimeixFormulari($intents);
      footerFormulari();
  }

  /////////////
  // Obtenció dels valors introduits per l'usuari
  ////////////
  $digit1 = (isset($_POST['digit1']))? $_POST['digito1']:"";
  $digit2 = (isset($_POST['digit2']))? $_POST['digito2']:"";
  $digit3 = (isset($_POST['digit3']))? $_POST['digito3']:"";
  $digit4 = (isset($_POST['digit4']))? $_POST['digito4']:"";
  $correcte = 0;
  $intents = 5 ;
  
  
  // Comparació per a determinar si el numero introduït és correcte
  if ($digit1 === $combinacionDigito1 && $digit2 === $combinacionDigito2 && $digit3 === $combinacionDigito3 && $digit4 === $combinacionDigito4) {
      $correcte =1;
  } else {
      $correcte=0;
  }
  
  // Si ja hem enviat alguna combinació (hem polsat el botó submit) 
  if (isset($_POST['submit'])) {
      
      // Si ens queden intents i la combinació no és correcta
      if ($intents > 1 && $correcte === 0) {
      
          // Imprimeix altra vegada el Formulari
          imprimeixFormulari($intents);
          //Afegin si el camp correcte
          // Comprobem si el nombre introduit és el de la combinacio
          if ($digito1 === $combinacionDigito1 && $digito2 === $combinacionDigito2 && $digito3 === $combinacionDigito3 && $digito4 === $combinacionDigito4) {
              // Si ho és, guardem correcte=1 en un hidden
              echo '<input type="hidden" name="correcte" value="1">';
          } else {
              // Si no ho és guardem correcte=0 en un hidden
              echo '<input type="hidden" name="correcte" value="0">'; 
          }

          // Restem 1 intent
          $intents--;

          // Hidden amb el numero d' restants
          echo '<input type="hidden" value="', $intents, '" name="intents">';

          footerFormulari();
           //Informem dels intents que li queden a l'usuari
           echo '<h3>Queden ', $intents,' intents.</h3>';

      } else if ($intents === 1 && $correcte === 0) {
          // Si s'acaben els intents i no s'ha introduït la combinació correcta
          echo '<h4>Accés Denegat</h4>';
      } else if ($correcte === 1) {
          // En cas que el numero siga correcte
          echo '<h4>Accés Permés</h4>';
      }else {
        echo '<h4>Nombre d\'intents esgotats. La policia ja està en camí</h4>';
      }
  }
}
//Exercici 5.- Completa el codi per a que quan li passem una lletra a la funció exercici5, ens torne un
//llistat dels mesos que comencen per eixa lletra.
//Si cap més comença per eixa lletra, que ens ho indique.
//ATENCIÓ, la lletra que li passem pot estar en majúscules o minúscules, i el resultat ha de ser el mateix.
// exemple:   exercici5('a') -> tornarà: ['Abril', 'Agost']
exercici5('a');
function exercici5($lletra){
    
   $mesos = ['Gener','Febrer','Març','Abril','Maig','Juny','Juliol','Agost','Setembre','Octubre','Novembre','Desembre'];
   $dies_mesos = [31,28,31,30,31,30,31,31,30,31,30,31];
   // continueu vosaltres ací.

   mostrarMes($mesos, $lletra);

function mostrarMes($mes, $letr){
    if(substr($mes, 1) == $letr){
      echo $mes;
    }else{
        echo "Cap mes comença per eixa lletra";
    }

  }
}

//-----------------------
//Exercici 1. Podeu canviar el valor passat per paràmetre per fer les proves/traces que vulgueu.
esDivisibleEntre2(6);
//Exercici 2
queFaAquestaFuncio(1220380);
//Exercici 3
hola();
//Exercici 4
noFunciona();
?>