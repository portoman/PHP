<?php

/*
 * Hacer un programa que muestre todos los números entre 2 números que llegan por la URL[$_GET]
 */


if (isset($_GET['numero1']) && isset($_GET['numero2'])) {

    $numero1 = $_GET['numero1'];

    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {

        for ($i = $numero1; $i <= $numero2; $i++) {

            echo "<h4>$i</h4>";
        }
    } else {

        echo "El numero 1 debe ser menor al numero 2";
    }
} else {

    echo "<h1> Introduce los números por URL: </h1>";
}
