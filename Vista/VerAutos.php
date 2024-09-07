<?php
include_once 'Estructura/Header.php';
// Incluir las clases necesarias
include_once '../Control/AbmAuto.php';
include_once '../Control/AbmPersona.php';


// Crear instancias de las clases de control
$abmAuto = new AbmAuto();
$abmPersona = new AbmPersona();


// Obtener todos los autos
$autos = $abmAuto->buscar(null);
/*foreach ($autos as $auto) {
    echo "hola";
    print_r($auto);
}*/
//print_r($autos);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Autos</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container rounded shadow mb-3">
        <h1 class="my-4">Listado de Autos</h1>
        <?php
        if (count($autos) > 0) {
            echo '<table class="  table table-bordered">';
            echo '<thead class="thead-dark ">';
            echo '<tr>';
            echo '<th>Patente</th>';
            echo '<th>Marca</th>';
            echo '<th>Modelo</th>';
            echo '<th>Dueño</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            foreach ($autos as $auto) {
                
                // Obtener los datos del dueño
                $dniDuenio = $auto->getDniDuenio();
                $param = ['nroDni' => $dniDuenio];
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
    <!-- Incluir Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php include_once "./Estructura/Footer.php"?>
</body>
</html>