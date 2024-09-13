<?php
include_once "../Estructura/Header.php";
include_once "../../utils/utils.php";
include '../../Modelo/Persona.php';
include '../../Modelo/Auto.php';
include '../../Control/AbmPersona.php';
include '../../Control/AbmAuto.php';

$abmPersona = new AbmPersona();
$datos = data_submitted();

$datos['accion'] = 'editar';

echo "<div class='container cont-form'>";

try {
    if (isset($datos)) {
        if ($abmPersona->abm($datos)) {
            echo "<div class ='modalDatosCorrectos'>Se ingresaron correctamente los datos</div>";
        } else {
            echo "<div class ='modalDatosIncorrectos'>Se ingresaron incorrectamente</div>";
        }
    } else {
        throw new exception("<div class ='modalDatosIncorrectos' No llegaron los datos </div>");
    }
} catch (PDOException $ex) {
    echo "<div class ='modalDatosIncorrectos'".$ex->getMessage()."</div>";
} catch (Exception $ex) {
    echo $ex->getMessage();
}

echo "</div>";

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