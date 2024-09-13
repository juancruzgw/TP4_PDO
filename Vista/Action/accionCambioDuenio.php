<?php 
include_once "../Estructura/Header.php";

include_once "../../utils/utils.php";
include '../../Modelo/Persona.php';
include '../../Modelo/Auto.php';
include '../../Control/AbmPersona.php';
include '../../Control/AbmAuto.php';

echo "<div class='container cont-form'>";

$abmPersona = new AbmPersona();
$abmAuto = new AbmAuto();
$datos = data_submitted();

try{

    if($datos['patente'] !== "null" && $datos['NroDni'] !== 'null'){
        if(!empty($auto = $abmAuto->obtenerDatos($datos)) && !empty($abmPersona->buscar($datos))){
            
            $datos['accion'] = 'editar';
            $datos['marca'] = $auto['marca'];
            $datos['modelo'] = $auto["modelo"];

            if($abmAuto->abm($datos)){
                echo "<div class ='modalDatosIncorrectos'>Se cambio el dueño del auto</div>";
            }else{
                echo "<div class=' modalDatosIncorrectos'> No se pudo cambiar el dueño del auto</div>";
            }

        } else {
            throw new exception("<div class =' modalDatosIncorrectos'> No se encontro el auto o la persona </div>");
        }
    }else{
        throw new exception("<div class =' modalDatosIncorrectos'> No se ingresaron correctamente los datos</div>");
    }

}catch(PDOException $ex){
  echo "<div class ='modalDatosIncorrectos'".$ex->getMessage()."</div>";
}catch(Exception $ex){
    echo $ex->getMessage();
}



/*if($datos['patente'] !== "null" && $datos['NroDni'] !== 'null'){
    
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
}*/


echo "</div>";

include_once "../Estructura/Footer.php";


?>