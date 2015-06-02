<?php 
/* Solicitar Configuracion de BD */
require("cfg/conectardb.php");
$actualizar = mysql_query("UPDATE sistema SET debe='0123467' WHERE cedula = '1'") or die("Problema en actualización: ".mysql_error());
?>