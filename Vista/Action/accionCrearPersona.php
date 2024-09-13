<?php 
include_once "../Estructura/Header.php";
include_once "../../configuracion.php";


echo "<div class='container cont-form'>";

$abm = new AbmPersona();
$datos = data_submitted();
$dni = ["NroDni" => $datos["NroDni"]];
$persona = new Persona();

try {
    if(isset($datos)){
        if(empty($abm->buscar($dni))){
            $abm->alta($datos);

            echo "<div class='modalDatosCorrectos'>
                Persona creada con éxito🥳
                </div>";

        }else{
            echo "<div class='modalDatosIncorrectos'>
                    El dni ya esta registrado en la base de datos. 😔
                 </div>";
        }  
    }else{
        throw new exception("<div class='modalDatosIncorrectos'>No llegaron los datos.</div>");  
    }

}catch (PDOException $ex) {
  echo "<div class ='modalDatosIncorrectos'>".$ex->getMessage()."</div>";
} catch (Exception $ex) {
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