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

<?php
header('Content-type: text/html; charset=utf-8');

if (!empty($_POST['cedula']) and !empty($_POST['debe'])) { 
// Convertir a  variables
$cedula = $_POST['cedula'];
$debe = $_POST['debe'];
// Anti inyeccion SQL
$cedula = addslashes($_POST['cedula']);
$debe = addslashes($_POST['debe']);
require("cfg/conectardb.php");
$actualizar = mysql_query("UPDATE sistema SET debe='$debe' WHERE cedula = '$cedula'") or die("Problema en actualización: ".mysql_error());
if ($actualizar == true) {
	echo "<h1>Datos Actualizados! el nuevo monto es: </h1>" ,"<h1>" .($debe). "</h1>";
}
else{
echo "<h1>Ha ocurrido un error!, Por favor llene el formulario de nuevo</h1>";
exit;
}


};


?>

<a class="btn btn-primary" href="javascript:history.back();">Volver</a>
<script src="http://code.jquery.com/jquery.js"></script>
  </body>
  <footer></footer>
</html>