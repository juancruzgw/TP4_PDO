<?php include "./Estructura/Header.php";?>

<div class="container contenedor rounded shadow mb-3">

    <form action="Action/accionCambioDuenio.php" method="post">
        <div class="form-group">

            <label for="patente" style="color: #2196F3;font-size: 20px;" >Ingrese el numero de patente del auto</label>
            <input type="text" class="form-control" id="patente" name="patente" >

            <label for="NroDni" style="color: #2196F3;font-size: 20px;">Ingrese el numero de documento de una persona</label>
            <input type="text" class="form-control" id="NroDni" name="NroDni" >

        </div>
        <button type="submit" class="btn btn-primary mt-4">Guardar</button>
    </form>

</div>




<?php include "./Estructura/Footer.php";?>