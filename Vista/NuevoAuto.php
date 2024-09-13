<?php include 'Estructura/Header.php';?>

<div class="container contenedor rounded shadow mb-3">
    <form action="Action/accionNuevoAuto.php" method="post">
        <div class="form-group">
            <h1>Ingrese los datos del auto que desea ingresar. </h1>
            <label for="patente" style="color: #2196F3;font-size: 20px;margin-left:10px" >Patente</label>
            <input type="text" class="form-control" id="patente" name="patente">
            <label for="marca" style="color: #2196F3;font-size: 20px; margin-left:10px">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca">
            <label for="modelo" style="color: #2196F3;font-size: 20px; margin-left:10px">Modelo</label>
            <input type="number" class="form-control" id="modelo" name="modelo">
            <label for="NroDni" style="color: #2196F3;font-size: 20px; margin-left:10px">DNI Dueño</label>
            <input type="text" class="form-control" id="NroDni" name="NroDni">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Guardar</button>
    </form>
</div>

<?php include 'Estructura/Footer.php';?>