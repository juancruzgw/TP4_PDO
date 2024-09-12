
<?php include_once "../Estructura/Header.php";?>

<div class="container cont-form">
<?php

include "../../utils/utils.php";
include '../../Modelo/Persona.php';
include '../../Modelo/Auto.php';
include '../../Control/AbmPersona.php';
include '../../Control/AbmAuto.php';

$abmPersona = new AbmPersona();
$abmAuto = new AbmAuto();

$datos = data_submitted();


if($datos['patente'] !== "null" && $datos['NroDni'] !== 'null'){
    
    if(!empty($auto = $abmAuto->buscar($datos)[0]) && !empty($abmPersona->buscar($datos))){
        $datos['accion'] = 'editar';
        $datos['marca'] = $auto->getMarca();
        $datos['modelo'] = $auto->getModelo();

        if($abmAuto->abm($datos)){
            echo "<div class = cambioDatos contenedorItems>Se cambio el dueño del auto</div>";
        }else{
            echo "<div class='NocambioDatos contenedorItems'>No se pudo cambiar el dueño del auto</div>";
        }
    } else {
        echo "<div class=personaNoEncontrada contenedorItems>No se encontro el auto o la persona</div>";
    }
}else{
    echo "<div class=ingresoErroneoDatos contenedorItems>no se ingresaron correctamente los datos</div>";
}


?>
</div>


<?php include_once "../Estructura/Footer.php"?>