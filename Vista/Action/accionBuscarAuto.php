<?php
include_once "../Estructura/Header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container  cont-form  ">
   
        <div class="respuestaBuscarAuto">
        
        <?php
        include_once "../../utils/utils.php";
        include_once '../../Control/AbmAuto.php';
        $abm = new AbmAuto();

        $datos = data_submitted();
        $patente = ["patente" => $datos["patente"]];

        $auto = $abm->buscar($patente)[0];
        echo "<h2>Resultado de la busqueda</h2>";

        echo "<div class='respuestaBuscarAuto'>
        <p>Patente: {$auto->getPatente()}</p>
        <p>marca: {$auto->getMarca()}</p>
        <p>modelo:{$auto->getModelo()}</p>
        <p>dni dueño:{$auto->getDniDuenio()}</p>
        </div>";
        ?>
        </div>
      
    </div>
    <?php include_once "../Estructura/Footer.php"?>
</body>
</html>