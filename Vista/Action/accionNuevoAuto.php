<?php

include '../Estructura/Header.php';
include '../../utils/utils.php';
include '../../modelo/Persona.php';
include '../../Modelo/Auto.php';
include '../../Control/AbmAuto.php';
include '../../Control/AbmPersona.php';

/**Ejercicio 5 – 
accionNuevoAuto.php que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
antes que la persona duenia del auto ya se encuentre cargada en la base de datos, de no ser asi 
mostrar un link a la pagina que permite carga una nueva persona. 
Se debe mostrar un mensaje que indique si se pudo o no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
control antes generada, no se puede acceder directamente a las clases del ORM. */

$datos = data_submitted();

$abmAuto = new AbmAuto();
$abmPersona = new AbmPersona();
$auto = new Auto();


if(empty($abmPersona->buscar($datos))){
   
    echo "<div class='respPersonaNoCreada'>
            La persona no se encuentra registrada en la base de datos. 
            <a href='NuevoPersona.php'>Cargar nueva persona</a>
         </div>";
} else{
    if(!empty($datos)){
        //print_r($datos);
       // print_r($abmAuto->buscar($patente["patente"]));
        // echo $patente ."<br>";
        if(empty($abmAuto->buscar($datos))){
                $abmAuto->alta($datos);
             echo "<div class='registroAutoExito'> Se registro el auto con exito. </div>";
        }else{
            echo "<div class='respPersonaNoCreada'> La patente ya esta registrada en la base de datos. 😔 </div>";
        }
    }else{
        echo "<div class='respPersonaNoCreada'> No llegaron los datos. </div>";  
    }
}



 /*if (!empty($datos)) {
    echo "<h2>Se han ingresado los siguientes datos:</h2>";
    print_r($datos);
} else{
    echo "No se han ingresado datos";
}*/