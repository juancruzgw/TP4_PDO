<?php
include_once "./Estructura/Header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js" type="module"></script>
    <script src="../Vista/Assets/validaciones.js" type="module" ></script>
    

</head>
<body>
    <div class="container cont-form">
   
        <div class="contenedor-form">
        
        <form action="./Action/accionBuscarAutoPersona.php" id="formulario" method="post">
        
              <div class="form-group ">
              <label> <i class="bi bi-car-front"></i> Ingrese el dni de la persona , para buscar el vehiculo. </label>
                <label for="patente"></label>
                <input  type="text" name="dni" id="dni" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary btn-block ">Buscar<i class="bi bi-search"></i></button>
       </form>

        </div>
      
    </div>    
    <?php include_once "./Estructura/Footer.php"?>
</body>

    

</html>