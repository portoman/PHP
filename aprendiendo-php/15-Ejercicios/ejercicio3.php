<?php

/*
 * Comprobar si una variable está vacia y si lo está, rellenarla con texto en minúsculas y mostrarlo en mayúsculas y negrita
 */

$var = "";

if (empty($var)) {
    $var = "texto";

    echo "<strong>" . strtoupper($var) . "</strong>";
} else {
    echo"La variable no está vacia";
}

