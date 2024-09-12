<?php 

include_once "../Estructura/Header.php";

include "../../utils/utils.php";
include '../../Modelo/Persona.php';
include '../../Control/AbmPersona.php';

echo "<div class='container cont-form'>";

$abm = new AbmPersona();
$datos = data_submitted();
$dni = ["NroDni" => $datos["NroDni"]];
$persona = new Persona();

try {
    if(isset($datos)){
        if(empty($abm->buscar($dni))){
            $abm->alta($datos);
            echo "<div class='respPersonaCreada'>
                Persona creada con éxito🥳
                </div>";
        }else{
            echo "<div class='respPersonaNoCreada'>
                    El dni ya esta registrado en la base de datos. 😔
                 </div>";
        }  
    }else{
        throw new exception("<div class='respPersonaNoCreada'>No llegaron los datos.</div>");  
    }

}catch (PDOexception $ex) {
    echo "Hubo un error en la base de datos";
} catch (exception $ex) {
    echo $ex->getMessage();
}


/*
if(isset($datos)){

    if(empty($abm->buscar($dni))){
        $abm->alta($datos);
        echo "<div class='respPersonaCreada'>
            Persona creada con éxito🥳
            </div>";
    }else{
        echo "<div class='respPersonaNoCreada'>
                El dni ya esta registrado en la base de datos. 😔
             </div>";
    }
    
}else{
    echo "<div class='respPersonaNoCreada'>
    No llegaron los datos.
    print_r($datos)
    </div>";  
}
*/

echo "</div>";

include_once "../Estructura/Footer.php";

?>