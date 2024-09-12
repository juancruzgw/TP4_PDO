<?php include 'Estructura/Header.php';?>

<div class="container contenedor rounded shadow mb-3">
    <form action="Action/accionNuevoAuto.php" method="post">
        <div class="form-group">
            <h1>Ingrese los datos del auto que desea ingresar. </h1>
            <label for="patente">Patente</label>
            <input type="text" class="form-control" id="patente" name="patente">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca">
            <label for="modelo">Modelo</label>
            <input type="number" class="form-control" id="modelo" name="modelo">
            <label for="NroDni">DNI Dueño</label>
            <input type="text" class="form-control" id="NroDni" name="NroDni">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?php include 'Estructura/Footer.php';?>