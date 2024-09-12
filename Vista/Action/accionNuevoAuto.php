<?php

include_once "../Estructura/Header.php";

include_once "../../utils/utils.php";
include_once "../../modelo/Persona.php";
include_once '../../Modelo/Auto.php';
include_once '../../Control/AbmAuto.php';
include_once '../../Control/AbmPersona.php';

$datos = data_submitted();
$abmAuto = new AbmAuto();
$abmPersona = new AbmPersona();


try {
    if (!empty($abmPersona->buscar($datos))) {
        
        if ($datos['patente'] !== "null" && $datos['marca'] !== "null" && $datos['modelo'] !== "null" && $datos['NroDni'] !== "null") {
            $datos['dniDuenio'] = $datos['NroDni'];
            echo "<div class='datosAuto'> Datos del auto: </div>";

            if (empty($abmAuto->buscar($datos))) {
                $abmAuto->alta($datos);
                echo "<div class='registroAutoExito'> Se registró el auto con éxito. </div>";
            } else {
                throw new Exception("La patente ya está registrada en la base de datos.");
            }
            
        } else {
            throw new Exception("No llegaron los datos.");
        }
        
    } else {
        echo "<div class='respPersonaNoCreada'> La persona no se encuentra registrada en la base de datos.  
                <a href='NuevoPersona.php'>Cargar nueva persona</a>
            </div>";
    }
    
} catch (PDOException $ex) {
    echo "Error en la base de datos: " . $ex->getMessage();
} catch (Exception $ex) {
    echo "Ocurrió un error: " . $ex->getMessage();
}



/*
- Codigo Funcional
if(empty($abmPersona->buscar($datos))){
   
    echo "<div class='respPersonaNoCreada'>
            La persona no se encuentra registrada en la base de datos. 
            <a href='NuevoPersona.php'>Cargar nueva persona</a>
         </div>";

} else{
    if($datos['patente'] !== "null" && $datos['marca'] !== "null" && $datos['modelo'] !== "null" && $datos['NroDni'] !== "null"){
        
        $datos['dniDuenio'] = $datos['NroDni'];
        echo "<div class='datosAuto'> Datos del auto: </div>";
        if(empty($abmAuto->buscar($datos))){
                $abmAuto->alta($datos);
             echo "<div class='registroAutoExito'> Se registro el auto con exito. </div>";
        }else{
            echo "<div class='respPersonaNoCreada'> La patente ya esta registrada en la base de datos. 😔 </div>";
        }
    }else{
        echo "<div class='respPersonaNoCreada'> No llegaron los datos. </div>";  
    }
}
*/

include "../Estructura/Footer.php";
?>
