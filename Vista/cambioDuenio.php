<?php include "./Estructura/Header.php";?>

<div class="container contenedor rounded shadow mb-3">

    <form action="Action/accionCambioDuenio.php" method="post">
        <div class="form-group">
            <h2 class="mb-4">Cambio de dueño del auto</h2>
            <label for="patente" style="color: #2196F3;font-size: 20px;" >Ingrese el numero de patente del auto</label>
            <input type="text" class="form-control" id="patente" name="patente" >

            <label for="NroDni" style="color: #2196F3;font-size: 20px;">Ingrese el numero de documento de una persona</label>
            <input type="text" class="form-control" id="NroDni" name="NroDni" >

        </div>
        <button type="submit" class="btn btn-primary mt-4">Guardar <i class="bi bi-save"></i></button>
    </form>
    <script>
        alert("Para cambiar el dueño de un auto, ingrese el numero de patente del auto y el numero de documento de la persona a la que se le quiere cambiar el dueño");
    </script>
</div>




<?php include "./Estructura/Footer.php";?>