<?php include_once "../Estructura/Header.php";?>


<div class="container cont-form">
<?php
/* 
-Crear   una   página   “CambioDuenio.php”   que   contenga   un   formulario   en   donde   se   solicite :
-numero de patente de un auto
-un numero de documento de una persona 
- “accionCambioDuenio.php”   
-se   realice   cambio   del   dueño   del   auto   de   la   patente ingresada en el formulario.
-hay que cambiar de dueño con el numero de patente del auto y su numero de documento 

-Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
antes generada, no se puede acceder directamente a las clases del ORM
*/

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
            echo "Se cambio el dueño del auto";
        }else{
            echo "No se pudo cambiar el dueño del auto";
        }
    } else {
        echo "No se encontro el auto o la persona";
    }
}else{
    echo "no se ingresaron correctamente los datos";
}


?>
</div>


<?php include_once "../Estructura/Footer.php"?>