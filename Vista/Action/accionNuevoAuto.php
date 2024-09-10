<?php

include '../Estructura/Header.php';
include '../../utils/utils.php';
include '../../modelo/Persona.php';
include '../../Modelo/Auto.php';
include '../../Control/AbmAuto.php';
include '../../Control/AbmPersona.php';



$datos = data_submitted();

$abmAuto = new AbmAuto();
$abmPersona = new AbmPersona();

if ((isset($datos))){
    echo "<h2>Se han ingresado los siguientes datos:</h2>";
} else{
    echo "No se han ingresado datos";
}