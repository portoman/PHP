<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>
            Formulario en PHP
        </h1>
        <form method="GET" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellido">Apellidos</label>
                <input for="text" name="apellido">
            </p>
            <input type="submit" value="Enviar datos">
        </form>
        
        
         <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellido">Apellidos</label>
                <input for="text" name="apellido">
            </p>
            <input type="submit" value="Enviar datos">
        </form>
    </body>
</html>


