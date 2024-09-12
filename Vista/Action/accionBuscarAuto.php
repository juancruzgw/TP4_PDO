<?php 

include "../Estructura/Header.php";
include "../../utils/utils.php";
include '../../Modelo/Auto.php';
include '../../Control/AbmAuto.php';


echo "<div class='container cont-form'>";
echo "<div class='respuestaBuscarAuto'>";
        
$abm = new AbmAuto();
$datos = data_submitted();

try{
    if($datos['patente'] == 'null'){
        throw new Exception("<h2>Debe ingresar una patente</h2>");
    }
    if($auto = $abm->obtenerDatos($datos["patente"])){
        echo "<h2>Resultado de la busqueda</h2>";
        echo "<div class='respuestaBuscarAuto' > ".
        "<p>Patente: ".$auto['patente']." </p>".
        "<p>Marca: ".$auto['marca']." </p>".
        "<p>Modelo: ".$auto['modelo']." </p>".
        "<p>Dni dueño: ".$auto['DniDuenio']." </p>".
        "</div>";
    }else{
        throw new Exception("<h2>El auto no fue encontrado</h2>");
    }
}catch(PDOException $ex){
    echo "Hubo un error en la base de datos: " . $ex->getMessage();
}catch(Exception $ex){
    echo "<h2>".$ex->getMessage()."</h2>";
}


        
// if(isset($auto[0])){
//     echo "<h2>Resultado de la busqueda</h2>";
//     $autoEncontrado = $auto[0];
//     echo "<div class='respuestaBuscarAuto'>
//     <p>Patente: {$autoEncontrado->getPatente()}</p>
//     <p>marca: {$autoEncontrado->getMarca()}</p>
//     <p>modelo:{$autoEncontrado->getModelo()}</p>
//     <p>dni dueño:{$autoEncontrado->getNroDni()}</p>
//     </div>";
// }else{
//     echo "<h2>Auto no encontrado</h2>";
// }
    


echo "</div>";
echo "</div>";

include_once "../Estructura/Footer.php"

?>
