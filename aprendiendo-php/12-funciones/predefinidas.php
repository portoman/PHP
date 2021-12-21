<?php

/*
  Funciones que trae el propio php
 */


//Debuggear
$nombre = "Alfonso";
var_dump($nombre);

//Fechas
echo date('d-m-Y');
echo"<br/>";
echo time();

//Matemáticas
echo"<br/>";
echo "Raiz cuadrada de 10" . sqrt(10);

echo"<br/>";
echo "Número aleatorio entre 10 y 40" . rand(10, 40);

echo"<br/>";
echo "Número pi" . pi();

echo"<br/>";
echo "Redondear: " . round(7.893234, 2);


//Más funciones generales
echo "<br/>";
echo gettype($nombre);

//Saber si es un tipo de dato
echo"<br/>";
if (is_string($nombre)) {
    echo "Esa variable es un string";
}

//Comprobar si existe una variable
echo"<br/>";
if (isset($edad)) {
    echo"La variable existe";
} else {
    echo"La variable no existe";
}

//Trim
echo"<br/>";

$cadena2="      hola      ";
echo trim($cadena2);


//Eliminar variables / indices
echo"<br/>";
$year=2020;
unset($year);

//Comprobar variables vacias

$texto=" ";
if(empty($texto)){
    echo"La variable está vacia";
}else{
    echo"La variable no está vacia";
}

//Contar caracteres de una cadena
echo"<br/>";
$cadena4="12345";

echo strlen($cadena4);

echo"<br/>";

//Econtrar un caracter

$frase="La vida es bella";
echo strpos($frase, "vida");

//Reemplazar contenido de un string
echo"<br/>";

$frase=str_replace("vida", "moto", $frase);


//Convierte a MAYUSCULAS
echo"<br/>";
echo strtoupper($frase);


//Convierte a minúsculas
echo"<br/>";
echo strtolower($frase);
