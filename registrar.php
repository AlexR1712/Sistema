<!DOCTYPE html>
<html>
  <head> 
        <title>Consultar y Registrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://bootswatch.com/cerulean/bootstrap.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/animaciones.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
header('Content-type: text/html; charset=utf-8');
    // Registrar.php
    // Importamos la configuración de MySQL
    require("cfg/conectardb.php");
    // Leemos los valores que nos llegan por el metodo POST y lo almaceno en variables
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $debe = $_POST['debe'];

     // Esta es la instrucción para insertar los valores
    $sql = "INSERT INTO sistema(nombres,apellidos,cedula,debe) VALUES('$nombres', '$apellidos', '$cedula', '$debe')";
    // Ejecutar Instrucciòn

    mysql_query($sql);

?>

<a class="btn btn-primary" href="javascript:history.back();">Volver</a>
<script src="http://code.jquery.com/jquery.js"></script>
  </body>
  <footer></footer>
</html>