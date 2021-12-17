<?php

/* 
 Recoger 2 números por la url(GET) y hacer todas las operaciones básicas de una calculadora de esos 2 números
 */

var_dump($_GET);

if(isset($_GET['numero1']) &&isset($_GET['numero2'])){
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    
    echo"Suma: ".($numero1+$numero2);
    
}else{
    echo"<h1> Introduce los parámetros por la URL</h1>";
}