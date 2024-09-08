<?php
include 'Estructura/Header.php';

include '../Modelo/Auto.php';
include '../Control/AbmAuto.php';
include '../Control/AbmPersona.php';



$abmAuto = new AbmAuto();
$abmPersona = new AbmPersona();


// Obtener todos los autos
$autos = $abmAuto->buscar(null);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Autos</title>
  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" type="module"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" type="module"></script>
</head>
<body>
    <div class="container contenedor rounded shadow mb-3">
        <h1 class="my-4">Listado de Autos</h1>
        <?php
        if (count($autos) > 0) {
            echo "<table class='  table table-bordered'>
                  <thead class='thead-dark'>
                  <tr>
                  <th>Patente</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Dueño</th>
                  </tr>
                  </thead>
                  <tbody>";         

            foreach ($autos as $auto) {
                
                // Obtener los datos del dueño
                $dniDuenio = $auto->getDniDuenio();
                $param = ['NroDni' => $dniDuenio];
                $duenio = $abmPersona->buscar($param);

                if (isset($duenio[0])) {
                    $nombreDuenio = $duenio[0]->getNombre() . ' ' . $duenio[0]->getApellido();
                } else {
                    $nombreDuenio = 'Dueño no encontrado';
                }

                echo '<tr>';
                echo '<td>' . $auto->getPatente() . '</td>';
                echo '<td>' . $auto->getMarca() . '</td>';
                echo '<td>' . $auto->getModelo() . '</td>';
                echo '<td>' . $nombreDuenio . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<div class="alert alert-danger m-3 w-50" role="alert" >No hay autos cargados en la base de datos.</div>';
        }
        
        ?>
    </div>
    
    
    <?php include_once "./Estructura/Footer.php"?>