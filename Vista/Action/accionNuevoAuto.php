<?php

include_once "../Estructura/Header.php";
include_once "../../configuracion.php";


$datos = data_submitted();
$abmAuto = new AbmAuto();
$abmPersona = new AbmPersona();

echo "<div class='container cont-form'>";
try {
    if (!empty($abmPersona->buscar($datos))) {
        
        if ($datos['patente'] !== "null" && $datos['marca'] !== "null" && $datos['modelo'] !== "null" && $datos['NroDni'] !== "null") {
            $datos['dniDuenio'] = $datos['NroDni'];
            echo "Datos del auto:";

            if (empty($abmAuto->buscar($datos))) {
                $abmAuto->alta($datos);
                echo "<div class='modalDatosCorrectos'> Se registró el auto con éxito. </div>";
            } else {
                throw new Exception("<div class='modalDatosIncorrectos'>La patente ya está registrada en la base de datos.</div>");
            }
            
        } else {
            throw new Exception("<div class='modalDatosIncorrectos'>No llegaron los datos.</div>");
        }
        
    } else {
        echo "<div class='modalDatosIncorrectos'> La persona no se encuentra registrada en la base de datos. 
                <a href='../nuevaPersona.php' class='link'>Cargar nueva persona</a>
            </div>";
    }
    
} catch (PDOException $ex) {
    echo "<div class ='modalDatosIncorrectos'".$ex->getMessage()."</div>";
} catch (Exception $ex) {
    echo $ex->getMessage();
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

echo "</div>";

include "../Estructura/Footer.php";
?>
