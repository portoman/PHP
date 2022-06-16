<?php
/*
//Abrir archivo (Permiso a+=para todo)
$archivo = fopen("fichero_text.txt", "a+");

//Leer contenido
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido . "<br/>";
}

//Escribir
fwrite($archivo, "Soy un texto metido desde php");

//Cerror archivo
fclose($archivo);

*/

//Copiar archivo
copy("fichero_text.txt","fichero_copiado.txt") or die("Error al copiar");

//Renombrar archivo
rename("fichero_copiado.txt","hola.txt");

//Eliminar
unlink("hola.txt");

if(file_exists("fichero_text.txt")){
    echo "El archivo existe";
}else{
    echo "El archivo no existe";
}