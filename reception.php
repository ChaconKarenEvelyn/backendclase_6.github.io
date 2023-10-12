<?php
echo $_GET["nombreusuario"];
echo"<br>";
echo $_GET["notausuario"];
echo"<br>";

switch($_GET["notausuario"]){
     case 0 : echo "Muy deficiente . <br>";
     break;
     case 1 : echo "Muy deficiente . <br>";
     break;
     case 2 : echo "Muy deficiente . <br>";
     break;
     case 3 : echo "Insuficiente . <br>";
     break;
     case 4 : echo "Insuficiente . <br>";
     break;
     case 5 : echo "Insuficiente . <br>";
     break;
     case 6 : echo "Bien . <br>";
     break;
     case 7 : echo "Bien . <br>";
     break;
     case 8 :echo "Notable . <br>";
     break;
     case 9 :echo "Notable . <br>";
     break;
     case 10 :echo "Sobresaliente . <br>";
}


$nombre = $_GET["nombreusuario"];
if (empty($nombre)) {
  echo "Alumno ingresado.<br>";
}
else{
     echo "Alumno no ingresado.<br>";
}

if (empty($_GET["notausuario"])) {
     echo "Nota ingresada.<br>";
   }
   else{
        echo "Nota no ingresada.<br>";
   }
   



$_GET["notausuario"] >= "0" && $_GET["notausuario"] <= "10" ;
if(isset ($_GET["notausuario"])){
     echo "Nota ingresada correctamente al sistema . <br>";
}
else{
     echo "Nota no ingresada correctamente . <br>";
}



if (is_numeric($_GET["notausuario"])) {
     echo var_export($_GET["notausuario"], true) . " Es numérico . <br>";
 } else {
     echo var_export($_GET["notausuario"], true) . " No es numérico . <br>";
     }
 

?>