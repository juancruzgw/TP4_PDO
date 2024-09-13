<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!---CSS--->
    <link rel="stylesheet" href="../../../TP4_PDO/Vista/Assets/styles.css?v=2.2">
    <!---CSS--->
    <!---BOOSTRAP--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <!---BOOSTRAP--->
    <!---jquery--->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"type="module"></script>
    <script src="../Assets/validaciones.js" type="module"></script>
    <!---jquery--->

</head>
<body>
<header>
    <h1 class="my-4 text-center mt-50">TP N° 4 PDO / SQL</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item m-2">
                    <a class="nav-link btn btn-dark mx-1 text-white" href="../../../TP4_PDO/Vista/Index.php">Home</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link btn btn-dark mx-1 text-white" href="../../../TP4_PDO/Vista/VerAutos.php">Ver Autos</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link btn btn-dark mx-1 text-white" href="../../../TP4_PDO/Vista/buscarAuto.php">Buscar Autos</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link btn btn-dark mx-1 text-white" href="../../../TP4_PDO/Vista/listaPersona.php">Listar Personas</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link btn btn-dark mx-1 text-white" href="../../../TP4_PDO/Vista/nuevaPersona.php">Registrar usuario</a>
                </li>
                <li class="nav-item m-2"> 
                    <a class="nav-link btn btn-dark mx-1 text-white" href="../../../TP4_PDO/Vista/NuevoAuto.php">Registrar auto</a>
                </li>
                <li class="nav-item m-2"> 
                    <a class="nav-link btn btn-dark mx-1 text-white" href="../../../TP4_PDO/Vista/cambioDuenio.php">Cambio de dueño del auto</a>
                </li>
                <li class="nav-item m-2"> 
                    <a class="nav-link btn btn-dark mx-1 text-white" href="../../../TP4_PDO/Vista/buscarPersona.html">Modificar usuario</a>
                </li>
            </ul>
        </div>

    </nav>
</header>
