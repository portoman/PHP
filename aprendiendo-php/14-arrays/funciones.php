<?php

$cantantes = ['Bowie', 'Bob Dylan', 'Jagger', 'Alfonso'];
$numeros = [1, 0, 2, 3, 4];

//Ordenar alfabéticamente
asort($cantantes);
var_dump($cantantes);

//Ordenar alfabéticamente del revés
arsort($cantantes);
var_dump($cantantes);

//Ordenar numéricamente

sort($numeros);
var_dump($numeros);

//Añadir elementos a un array

$cantantes[] = "Pedro";
$cantantes[] = "Emilio";
var_dump($cantantes);

array_push($cantantes, 'Neno');
var_dump($cantantes);

//Eliminar último elemento de un array
array_pop($cantantes);

//Eliminar un elemento en concreto de un array

unset($cantantes[3]);
var_dump($cantantes);

//Mostrar elemento aleatorio

echo array_rand($numeros);

$numeroAleatorio = array_rand($numeros);
echo "$cantantes[$numeroAleatorio]";

//Reverse

var_dump(array_reverse($numeros));

//Buscar dentro de un array

$resultado = array_search('Pedro', $cantantes);
var_dump($cantantes);
var_dump($resultado);

//Contar/Length

echo count($cantantes);
echo sizeof($cantantes);
