<?php include_once "./Estructura/Header.php";?>

    <div class="container cont-form">
   
        <div class="contenedor-form">
        
        <form action="./Action/accionBuscarAutoPersona.php" id="formulario" method="post">
        
              <div class="form-group ">
              <label> <i class="bi bi-car-front"></i> Ingrese el dni de la persona , para buscar el vehiculo. </label>
                <label for="patente"></label>
                <input  type="text" name="dniDuenio" id="dniDuenio" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary btn-block ">Buscar<i class="bi bi-search"></i></button>
       </form>
        </div>
      
    </div>    

<?php include_once "./Estructura/Footer.php";?>
