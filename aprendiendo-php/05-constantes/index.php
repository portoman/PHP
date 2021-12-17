<?php

//Constantes

define('nombre', 'Alfonso Porto');
define('web', 'portoman@github.com');


echo '<h1>' . nombre . '</h1>';
echo '<h2>' . web . '</h2>';

//Variables

$web = "portoman@github.com";
$web = "portoman4@github.com";

echo '<h1>'.$web.'</h1>';

//Constantes predefinidas

echo PHP_VERSION_ID;

echo __LINE__;
echo __FILE__;
?>