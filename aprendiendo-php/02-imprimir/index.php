<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Imprimir por la pantalla</title>
    </head>
    <body>
        <h1>Master en PHP con Alfonso Porto</h1>

        <?php
        //Comentario en una linea
        echo "<h3>Listado de videojuegos:</h3>";
        echo "<ul>"
        . "<li>GTA</li>"
        . "<li>Fifa</li>"
        . "<li>Mario Bros</li>"
        . "</ul>";
        /*
          Comentario en bloque
         */
        echo '<p>Esta es toda' . ' - ' . 'lista de juegos</p>';
        ?>

        <?= "Imprimir de manera abreviada sin poner echo" ?>

    </body>

</html>



