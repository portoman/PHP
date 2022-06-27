<?php

/*
  Condicionales
 *
 */

/*
 * OPERADORES DE COMPARACIÓN
 * ==igual
 * ===idéntico
 * !=diferente
 * <>diferente
 * !==no idéntico
 * < menor que
 * > mayor que
 * <= menor o igual que
 * >= mayor o igual que
 * 
 * 
 * OPERADORES LÓGICOS
 * 
 * && AND
 * || OR
 * ! NOT
 * 
 * 
 */

$color = "rojo";

if ($color == "rojo") {
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

echo "<br>";

$anho = 2021;

if ($anho == 2021) {
    echo "Estamos en 2021";
} else {
    echo "No estamos en 2021";
}

echo "<br>";

//Elseif


$dia = 4;

if ($dia == 1) {
    echo "Es lunes";
} elseif ($dia == 2) {
    echo "Es martes";
} elseif ($dia == 3) {
    echo "Es miércoles";
} elseif ($dia == 4) {
    echo "Es jueves";
} elseif ($dia == 5) {
    echo "Es viernes";
} elseif ($dia == 6) {
    echo "Es sábado";
} elseif ($dia == 7) {
    echo "Es domingo";
}

echo "<br>";

//SWITCH
$dia = 4;

switch ($dia) {
    case 1:
        echo"Lunes";
        break;
    case 2:
        echo"Martes";
        break;
    case 3:
        echo"Miércoles";
        break;
    case 4:
        echo"Jueves";
        break;
    case 5:
        echo"Vierne";
        break;
    default:
        "Es fin de semana";
}


echo "<br>";

//GOTO: Para saltarse trozos de código

goto marca;

echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";
echo "<h3>Instrucción 5</h3>";

marca:
echo "<h1>Me he saltado 4 echos</h1>";
