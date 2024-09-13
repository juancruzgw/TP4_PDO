<?php 

//daba error 
//Warning: Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\TP4_PDO\Vista\Estructura\Header.php:1) in C:\xampp\htdocs\TP4_PDO\configuracion.php on line 3
//header('Content-Type: text/html; charset=utf-8');
//header ("Cache-Control: no-cache, must-revalidate");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

$PROYECTO ='TP4_PDO';

//variable que almacena el directorio del proyecto
$ROOT = $_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";


include_once($ROOT.'utils/utils.php');


// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/vista/login/login.php";

// variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/principal.php";


$_SESSION['ROOT'] = $ROOT;
?>