<?php

/* 
 * Añadir valores a un array mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla
 */

$numeros=[1,4,2,5,6,8,4,7,8,3,4,8,3,2,4,2,4];

while(count($numeros)<=120){
    array_push($numeros, array_rand($numeros));
}


foreach($numeros as $numero){
    echo $numero."<br/>";
}




