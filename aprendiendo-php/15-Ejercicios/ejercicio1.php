<?php

/*
  Ejercicio 1: Hacer un programa que tenga un array con 8 números que haga:
 * -Recorrerlo y mostrarlo
 * -Ordenarlo y mostrarlo
 * -Mostrar su longitud
 * -Buscar algun elemento
 */

//Funcion

function mostrarArray($array) {

    $resultado = "";

    foreach ($array as $numero) {
        //$resultado=$resultado.$numero."<br/>";
        $resultado .= $numero . "<br/>";
    }
    return $resultado;
}

$numeros = array(11, 43, 3, 4, 2, 5);

echo"<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numeros);

sort($numeros);

echo"<h1>Ordenar y mostrar</h1>";
echo mostrarArray($numeros);

echo"<h1>Mostrar longitud</h1>";
echo count($numeros);

echo"<h1>Buscar algun elemento</h1>";
echo array_search(43, $numeros);
