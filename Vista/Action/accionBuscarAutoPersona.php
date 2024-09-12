<?php 

include_once "../Estructura/Header.php";
include "../../utils/utils.php";
include '../../Modelo/Auto.php';
include '../../Control/AbmAuto.php';


echo "<div class='container cont-form'>";
echo "<div class='respuestaBuscarAuto'>";
    
$abm = new AbmAuto();
$datos = data_submitted();
$autos = $abm->obtenerDatos($datos);

try{
    
    if(isset($autos[0])){
        echo "<h2>Resultado de la busqueda</h2>";
    
        foreach ($autos as $auto) {
            $autoEncontrado = $auto;
            echo "<div class='respuestaBuscarAuto'>
                    <p>Patente:". $autoEncontrado["patente"]. "</p>
                    <p>marca:". $autoEncontrado["marca"]. "</p>
                    <p>modelo:". $autoEncontrado["modelo"]."</p>
                    <p>dni dueño:". $autoEncontrado["DniDuenio"] . "</p>
                 </div>";
        }            
    }else{
        throw new exception("<h2>Auto no encontrado</h2>");
    }

}catch(PDOException $ex){
  echo "Hubo un error en la base de datos: " . $ex->getMessage();
}catch(Exception $ex){
    echo $ex->getMessage();
}



/*
if(isset($autos[0])){
    echo "<h2>Resultado de la busqueda</h2>";

    foreach ($autos as $auto) {
        $autoEncontrado = $auto;
        echo "<div class='respuestaBuscarAuto'>
                <p>Patente: {$autoEncontrado->getPatente()}</p>
                <p>marca: {$autoEncontrado->getMarca()}</p>
                <p>modelo:{$autoEncontrado->getModelo()}</p>
                <p>dni dueño:{$autoEncontrado->getNroDni()}</p>
             </div>";
    }
        
}else{
    echo "<h2>Auto no encontrado</h2>";
}
*/

echo "</div>";
echo "</div>";

include_once "../Estructura/Footer.php"

?>