<?php

/*
  FUNCIONES

 * function nombreDeFuncion($parametro){
 * //BLOQUE //CONJUNTO DE INSTRUCCIONES
 * };
 * 
 *  */

function muestraNombres() {
    echo"Alfonso Porto <br/>";
    echo"Pedro Pérez <br/>";
    echo"Pilar Martinez <br/>";
}

muestraNombres();

function tabla($numero) {
    var_dump($numero);
    echo"<h3> Tabla de multiplicar del número:$numero</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo"$i x $numero=(" . $i * $numero . ")<br/>";
    }
}

if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
} else {
    echo"No hay número introducido";
}

echo"<hr/>";

//Con párametros

function calculadora($numero1, $numero2) {

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 + $numero2;

    echo"Suma: $suma <br/>";
    echo"Resta: $resta <br/>";
    echo"Multiplicación: $multiplicacion <br/>";
    echo"División: $division <br/>";
}

calculadora(5, 4);

calculadora2(5, 4, true);

//Parámetros opcionales

function calculadora2($numero1, $numero2, $negrita = false) {

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 + $numero2;

    if ($negrita) {
        echo"<h1>";
    }
    echo"Suma: $suma <br/>";
    echo"Resta: $resta <br/>";
    echo"Multiplicación: $multiplicacion <br/>";
    echo"División: $division <br/>";
    if ($negrita) {
        echo"</h1>";
    }
}

calculadora2(5, 4, true);
calculadora2(5, 2);

echo"<hr/>";

//Return


function devuelveNombre($nombre) {
    return "El nombre es: $nombre";
}

echo devuelveNombre("Alfonso");

echo"<hr/>";

function calculadora3($numero1, $numero2, $negrita = false) {

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 + $numero2;
    $cadenaTexto = "";

    if ($negrita) {
        $cadenaTexto .= "<h1>";
    }
    $cadenaTexto .= "Suma: $suma <br/>";
    $cadenaTexto .= "Resta: $resta <br/>";
    $cadenaTexto .= "Multiplicación: $multiplicacion <br/>";
    $cadenaTexto .= "División: $division <br/>";
    if ($negrita) {
        $cadenaTexto .= "</h1>";
    }

    return $cadenaTexto;
}

echo calculadora3(8, 7, true);

echo"<hr/>";

//Funciones dentro de otras

function getNombre($nombre){
$texto = "El nombre es: $nombre";
return $texto;
};

function getApellido($apellido){
$texto = "El apellido es: $apellido";
return $texto;
};

function devuelveNombreApellido($nombre, $apellido) {
    $texto = getNombre($nombre). "<br/>" .getApellido($apellido);
    return $texto;
}

echo devuelveNombreApellido("Alfonso", "Porto");