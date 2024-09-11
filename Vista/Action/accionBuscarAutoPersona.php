<?php include_once "../Estructura/Header.php";?>

<div class="container cont-form">

    <div class="respuestaBuscarAuto">
    
    <?php
    include "../../utils/utils.php";
    include '../../Modelo/Auto.php';
    include '../../Control/AbmAuto.php';

    $abm = new AbmAuto();

    $datos = data_submitted();
    $autos = $abm->buscar($datos);
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
    }?>

    
    </div>
</div>
<?php include_once "../Estructura/Footer.php"?>