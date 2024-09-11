<?php include "./Estructura/Header.php";?>

<div class="container contenedor rounded shadow mb-3">

    <form action="Action/accionCambioDuenio.php" method="post">
        <div class="form-group">

            <label for="patente">Ingrese el numero de patente del auto</label>
            <input type="text" class="form-control" id="patente" name="patente">

            <label for="nroDocumento">Ingrese el numero de documento de una persona</label>
            <input type="text" class="form-control" id="nroDocumento" name="nroDocumento">

        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

</div>




<?php include "./Estructura/Footer.php";?>