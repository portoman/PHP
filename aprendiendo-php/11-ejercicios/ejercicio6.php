<?php

/*
  Ejercicio 6. Mostrar las tablas de multiplicar del uno al 10 dentro de un html
 */

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo"<h4>$i*$j=(" . $i * $j . ")</h4>";
    }
}

