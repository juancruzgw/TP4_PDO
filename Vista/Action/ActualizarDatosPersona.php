<?php
include "../Estructura/Header.php";
include "../../utils/utils.php";
include '../../Modelo/Persona.php';
include '../../Modelo/Auto.php';
include '../../Control/AbmPersona.php';
include '../../Control/AbmAuto.php';

$abmPersona = new AbmPersona();
$datos = data_submitted();

$datos['accion'] = 'editar';

try {
    if (isset($datos)) {
        if ($abmPersona->abm($datos)) {
            echo "Se ingresaron correctamente los datos";
        } else {
            echo "Se ingresaron incorrectamente";
        }
    } else {
        throw new exception("No llegaron los datos");
    }
} catch (PDOException $ex) {
    echo "Hubo un error en la base de datos: " . $ex->getMessage();
} catch (Exception $ex) {
    echo $e->getMessage();
}


/*
if(isset($datos)){
    if($abmPersona->abm($datos)){
        echo "se ingreso correctamente los datos";
    }else{
        echo "Se ingreso incorrectamente";
    }
}else{
    echo "no llegaron los datos";
}
*/

include "../Estructura/Footer.php";
?>