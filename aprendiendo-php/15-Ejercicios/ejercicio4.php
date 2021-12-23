<?php

/* 
Crear un array con el contenido de la tabla:
 * 
 * ACCION      Aventura       Deportes
 * Gta          Assasins        Fifa
 * Cod          Mario           NBA
 * PUGB         Crash           Moto GP
 * 
 */


$videojuegos=array(
    'accion' =>array('GTA', 'COD', 'PUGB'),
    'aventura' =>array('Assasins', 'Mario', 'Crash'),
    'deportes' =>array('FIFA', 'NBA', 'MOTO GP')
);

var_dump($videojuegos);