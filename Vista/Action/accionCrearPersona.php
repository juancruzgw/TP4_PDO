<?php include_once "../Estructura/Header.php";?>


<div class="container cont-form">
<?php
include "../../utils/utils.php";
include '../../Modelo/Persona.php';
include '../../Control/AbmPersona.php';

$abm = new AbmPersona();
$datos = data_submitted();
$dni = ["NroDni" => $datos["NroDni"]];
$persona = new Persona();


if(isset($datos)){
   // echo "paso 1";
    if(empty($abm->buscar($dni))){
       // echo "paso 2";
        $abm->alta($datos);
        //echo "paso 3";
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



?>
</div>


<?php include_once "../Estructura/Footer.php"?>