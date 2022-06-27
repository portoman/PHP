<?php

/* 
 *Para mostrar el valor de las cookies, tengo que usar la $_COOKIE, una variable superglobal, es un array asociativo
 */

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "No existe la cookie";
}

if(isset($_COOKIE['ayear'])){
    echo "<h1>".$_COOKIE['ayear']."</h1>";
}else {
    echo "No existe la cookie";
}

?>
<a href="crear_cookies.php">Crear cookies</a>
<a href="borrar_cookies.php">Borrar cookies</a>