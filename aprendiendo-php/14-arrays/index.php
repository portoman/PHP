<?php

/*
  ARRAYS
 * 
 */

//Dos maneras de declararlos
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantante = ['Bowie', 'Bob Dylan', 'Jagger'];

//Array asociativo: Nombramos los indices como queramos. Así van los GET y POST
$persona = array(
    'nombre' => 'Alfonso',
    'apellido1' => 'Porto',
    'apellido2' => 'Bujía'
);

var_dump($peliculas);

echo $peliculas[1];

echo "<br/>";

echo $cantante[0];

//Recorrer con for

echo "<h1>Listado de películas</h1>";

echo"<ul>";
for ($i = 0; $i < count($peliculas); $i++) {

    echo"<li>" . "$peliculas[$i]" . "</li>";
}

echo"</ul>";

//Recorrer con for each

echo "<h1>Listado de cantantes</h1>";

echo"<ul>";
foreach ($cantante as $cantantes) {
    echo "<li>" . "$cantantes" . "</li>";
}

echo"</ul>";

//Arrays multidimensionales

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'Marcos',
        'email' => 'marcos@marcos.com'
    )
);

var_dump($contactos);

echo $contactos[1]['nombre'] . "<br/>";
echo $contactos[2]['email'];

foreach ($contactos as $key) {
    var_dump($key['nombre']);
}