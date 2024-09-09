<?php include_once "./Estructura/Header.php";?>

<div class="container cont-form">
    <form id="formularioCrearPersona" method="post" action="../Vista/Action/accionCrearPersona.php">
           
            <div class="form-group">
                <label for="Nombre">Ingrese un nombre</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="Apellido">Ingrese un apellido</label>
                <input type="text" name="Apellido" id="Apellido" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="NroDni">Ingrese un DNI</label>
                <input type="number" name="NroDni" id="NroDni" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="fechaNac">Ingrese una fecha de nacimiento</label>
                <input type="date" name="fechaNac" id="fechaNac" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="Telefono">Ingrese un teléfono</label>
                <input type="number" name="Telefono" id="Telefono" class="form-control">
            </div>

            <div class="form-group">
                <label for="Domicilio">Ingrese un domicilio</label>
                <input type="text" name="Domicilio" id="Domicilio" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Crear <i class="bi bi-pencil"></i>
            </button>
            
        </form>
</div>

<?php include_once "./Estructura/Footer.php";?>