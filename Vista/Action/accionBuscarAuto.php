<?php 

include "../Estructura/Header.php";
include "../../utils/utils.php";
include '../../Modelo/Auto.php';
include '../../Control/AbmAuto.php';

$abm = new AbmAuto();
$datos = data_submitted();

echo "<div class='container cont-form'>";
echo "<div class='respuestaBuscarAuto'>";

try{
    if($datos['patente'] == 'null'){
        throw new Exception("<h2>Debe ingresar una patente</h2>");
    }
    if($auto = $abm->obtenerDatos($datos)){
        echo "<h2>Resultado de la busqueda</h2>";
        echo "<div class='respuestaBuscarAuto' > ".
        "<p>Patente: ".$auto['patente']." </p>".
        "<p>Marca: ".$auto['marca']." </p>".
        "<p>Modelo: ".$auto['modelo']." </p>".
        "<p>Dni dueño: ".$auto['DniDuenio']." </p>".
        "</div>";
    }else{
        throw new Exception("<div class='modalDatosIncorrectos'>El auto no fue encontrado</div>");
    }
}catch(PDOException $ex){
    echo "<div class='modalDatosIncorrectos'>Hubo un error en la base de datos: " . $ex->getMessage()."</div>";
}catch(Exception $ex){
    echo "<div class='modalDatosIncorrectos'>".$ex->getMessage()."</div>";
}

echo "</div>";
echo "</div>";

include_once "../Estructura/Footer.php"

?>
