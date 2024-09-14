<?php 
include_once "../../configuracion.php";
include_once "../Estructura/Header.php";


$abm = new AbmAuto();
$datos = data_submitted();

echo "<div class='container cont-form'>";

try{
    if($datos['patente'] == 'null'){
        throw new Exception("<h2>Debe ingresar una patente</h2>");
    }
    if($auto = $abm->obtenerDatos($datos)[0]){
        echo "<div class='respuestaBuscarAuto' > ".
        "<h2>Resultado de la busqueda</h2>".
        "<p>Patente: ".$auto['patente']." </p>".
        "<p>Marca: ".$auto['marca']." </p>".
        "<p>Modelo: ".$auto['modelo']." </p>".
        "<p>Dni dueño: ".$auto['DniDuenio']." </p>".
        "</div>";
    }else{
        throw new Exception("<div class='modalDatosIncorrectos' style='font-weight: bold;'>El auto no fue encontrado</div>");
    }
}catch(PDOException $ex){
    echo "<div class='modalDatosIncorrectos' style='font-weight: bold;'>Hubo un error en la base de datos:" . $ex->getMessage()."</div>";
}catch(Exception $ex){
    echo "<div class='modalDatosIncorrectos' style='font-weight: bold;'>".$ex->getMessage()."</div>";
}

echo "</div>";

include_once "../Estructura/Footer.php"

?>
