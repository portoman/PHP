<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validación de formularios PHP</title>
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>

        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'faltan_valores') {
                echo '<strong style="color:red">Introduzva todos los datos en todos los campos del formulario</strong>';
            }
             if ($error == 'nombre') {
                echo '<strong style="color:red">Introduzca bien el nombre</strong>';
            }
             if ($error == 'apellidos') {
                echo '<strong style="color:red">Introduzca bien los apellidos</strong>';
            }
             if ($error == 'edad') {
                echo '<strong style="color:red">Introduzca bien la edad</strong>';
            }
             if ($error == 'email') {
                echo '<strong style="color:red">El correo es erróneo</strong>';
            }
             if ($error == 'pass') {
                echo '<strong style="color:red">Introduzca una contraseña de más de 5 letras</strong>';
            }
        }
        ?>

        <form method="POST" action="procesar_formulario.php">
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br/>

            <label for="apellidos">Apellidos</label><br/>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"><br/>

            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"><br/>

            <label for="email">Email</label><br/>
            <input type="email" name="email" required="required"><br/>

            <label for="pass">Contraseña</label><br/>
            <input type="passwd" name="pass"><br/>

            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
