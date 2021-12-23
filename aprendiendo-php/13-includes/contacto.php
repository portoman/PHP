<?php require 'includes/cabecera.php';//Con require, si hay algún error la página no se carga. Con include, se carga la página igual
?>
<!-- Contenido -->
<div>
    <h2>Esta es la página de inicio</h2>
    <p>Texto de prueba de la página de inicio</p>
</div>
<hr/>
<!-- Footer -->
<?php require_once 'includes/footer.php';//require_once solo cargará una vez
?>
</body>
</html>