<?php
include_once "./Estructura/Header.php";
include './../Modelo/Auto.php';
include './../Control/AbmAuto.php';
?>

    <div class="container cont-form">
   
        <div class="contenedor-form">
        
        <form action="./Action/accionBuscarAuto.php" id="formulario" method="post">
        
              <div class="form-group ">
              <label> <i class="bi bi-car-front"></i> Ingresá la Patente del auto </label>
                <label for="patente"></label>
                <input  type="text" name="patente" id="patente" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary btn-block ">Buscar<i class="bi bi-search"></i></button>
       </form>

        </div>
    </div>

<?php include_once "./Estructura/Footer.php"?>