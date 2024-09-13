<?php
include 'Estructura/Header.php';
include '../configuracion.php';

$abmAuto = new AbmAuto();
$abmPersona = new AbmPersona();

// Obtener todos los autos

?>
    <div class="container contenedor rounded shadow mb-3">
        <h1 class="my-4">Listado de Autos</h1>
        <?php

        $autos = $abmAuto->obtenerDatos(null);
        
        if (count($autos) > 0){
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
            echo "<pre>";
            foreach($autos as $auto){
                $datos['NroDni'] = $auto['DniDuenio'];

                $duenio = $abmPersona->obtenerDatos($datos);
                echo "<h1> Auto </h1>";
                if(isset($duenio[0])){
                    echo "<h1> Dueño </h1>";
                    echo "<pre>";
                    print_r($duenio[0]);
                    echo "</pre>";
                } else {
                    echo "<h1> Dueño no encontrado </h1>";
                }
            }
            echo "</pre>";
        } else {
            echo '<div class="alert alert-danger m-3 w-50" role="alert" >No hay autos cargados en la base de datos.</div>';
        }


















        // if (count($autos) > 0) {
        //     echo "<table class='  table table-bordered'>
        //           <thead class='thead-dark'>
        //           <tr>
        //           <th>Patente</th>
        //           <th>Marca</th>
        //           <th>Modelo</th>
        //           <th>Dueño</th>
        //           </tr>
        //           </thead>
        //           <tbody>";         

        //     foreach ($autos as $auto) {
                
        //         // Obtener los datos del dueño
        //         $dniDuenio = $auto->getNroDni();
        //         $param = ['NroDni' => $dniDuenio];
        //         $duenio = $abmPersona->buscar($param);

        //         if (isset($duenio[0])) {
        //             $nombreDuenio = $duenio[0]->getNombre() . ' ' . $duenio[0]->getApellido();
        //         } else {
        //             $nombreDuenio = 'Dueño no encontrado';
        //         }

        //         echo '<tr>';
        //         echo '<td>' . $auto->getPatente() . '</td>';
        //         echo '<td>' . $auto->getMarca() . '</td>';
        //         echo '<td>' . $auto->getModelo() . '</td>';
        //         echo '<td>' . $nombreDuenio . '</td>';
        //         echo '</tr>';
        //     }

        //     echo '</tbody>';
        //     echo '</table>';
        // } else {
        //     echo '<div class="alert alert-danger m-3 w-50" role="alert" >No hay autos cargados en la base de datos.</div>';
        // }
        
        ?>
    </div>
    
    
<?php include_once "./Estructura/Footer.php";?>