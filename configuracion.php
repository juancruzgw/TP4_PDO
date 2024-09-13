<?php 
header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

$PROYECTO ='TP4_PDO';

//variable que almacena el directorio del proyecto
$ROOT = $_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";


function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
        else
            if(!empty($_GET)) {
                $_AAux =$_GET;
            }
        if (count($_AAux)){
            foreach ($_AAux as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null' ;
            }
        }
        return $_AAux;
        
}
function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}


spl_autoload_register(function ($class_name){
    $directorys = array(
        $_SESSION['ROOT'].'Modelo/',
        $_SESSION['ROOT'].'Modelo/Conector/',
        $_SESSION['ROOT'].'Control/',
    );
    $i = 0;
    $LoEncontro = false;
    while($i < count($directorys) && !$LoEncontro){
        if(file_exists($directorys[$i] . $class_name . '.php')){
            require_once($directorys[$i] . $class_name . '.php');
            $LoEncontro = true;
        } else {
            $i++;
        }
    }
    return $LoEncontro;
});


// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/vista/login/login.php";

// variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/principal.php";


$_SESSION['ROOT']=$ROOT;

?>