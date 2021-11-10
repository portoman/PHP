<?php


/*
 * PHP es debilmente tipado

 TIPOS DE DATOS:
    Enteros (int/ integer)=4
    Coma flotante/decimales (float/double)=3.14
    Cadenas (string)="Hola"
    Boolean (bool) =true
    null
    Array
    Objetos
  */


$numero=100;
echo gettype($numero);
echo'<br>';

$decimal=4.9;
echo gettype($decimal);
echo'<br>';

$texto=" Hola $numero";
echo gettype($texto);
echo $texto;
echo'<br>';
$texto=' Hola '.$numero;
echo gettype($texto);
echo $texto;
echo'<br>';

$verdadero=false;
echo gettype($verdadero);
echo'<br>';

$null=null;
echo gettype($null);
echo'<br>';

//Debugear
$mi_nombre="Alfonso Porto";
var_dump($mi_nombre);


?>

