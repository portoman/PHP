<?php

/*
 * Variables locales
 * 
 * Variables globales
 */


$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo() {
    global $frase; //Para usar una variable local en una función hay que poner esta sentencia
    echo "<h1>$frase</h1>";

    $year = 2021; //Variable local, no se puede usar fuera de la función

    echo "<h1>$year</h1>";
}

holaMundo();

//Funciones variables

function buenasDias() {
    return "Buenos dias!!!";
}

function buenasTardes() {
    return "Buenas tardes!!!";
}

function buenasNoches() {
    return "Buenas noches!!!";
}

$horario = "Tardes";

$miFuncion = "buenas" . $horario; //Concatenando funciones

echo $miFuncion();
