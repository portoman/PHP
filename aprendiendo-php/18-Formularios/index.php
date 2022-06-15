

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label> 
            <input type="text" name="nombre" autofocus="autofocus" minlength="5"/></br>

            <label for="apellido">Apellido:</label> 
            <input type="text" name="apellido" pattern="[A-Z ]+"  required="required"/></br>

            <label for="apellido">Botón:</label> 
            <input type="button" name="boton" value="Click"/></br>

            <label for="sexo">Sexo:</label> 
            <p>
                Hombre: <input type="checkbox" name="sexo" value="Hombre" checked="checked"/>
                Mujer: <input type="checkbox" name="sexo" value="Mujer"/>
            </p>

            <label for="color">Color:</label> 
            <input type="color" name="color"/></br>

            <label for="fecha">Fecha:</label> 
            <input type="date" name="fecha"/></br>

            <label for="correo">Correo:</label> 
            <input type="enail" name="correo"/></br>

            <label for="archivo">Archivo:</label> 
            <input type="file" name="archivo" multiple="multiple"/></br>

            <label for="numero">Numero:</label> 
            <input type="number" name="numero"/></br>

            <label for="pass">Contraseña:</label> 
            <input type="password" name="pass"/></br>

            <label for="continente">Continente:</label> 
            <p>
                America: <input type="radio" name="continente" value="America"/>
                Europa: <input type="radio" name="continente" value="Europa"/>
                Asia: <input type="radio" name="continente" value="Asia"/>
            </p>

            <label for="web">Página web:</label> 
            <input type="url" name="web"/></br>
            
            <textarea>
                
            </textarea></br>
            Peliculas:
            <select name="peliculas">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="Los Vengadores">Los Vengadores</option>
                <option value="Superman">Superman</option>
            </select>
            <input type="submit" value="Enviar"/>
        </form>
    </body>

</html>

