<!DOCTYPE html>
<html>
  <head> 
        <title>Consultas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="https://bootswatch.com/cerulean/bootstrap.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>
  <body>
<div class="container">
<div class="row">


                <div class="col-md-12">
<?php 
header('Content-type: text/html; charset=utf-8');
if (isset($_POST['cedula'])) {
    //Si es true hacer lo que sigue Importamos la configuración


if (!empty($_POST['cedula']))
{
//Continuar
}else{
echo "<h1><span class=\"label label-danger\">Ha ocurrido un error!, Por favor Intente de Nuevo</span></h1>";
exit;
}
  require("cfg/conectardb.php");
$cedula = trim(htmlentities(mysql_real_escape_string($_POST['cedula'])));

$registro = mysql_query("SELECT * FROM sistema WHERE cedula = '$cedula'") or die("Problema en consulta: ".mysql_error());
if (mysql_num_rows($registro) == 0){

  echo "<h1><span class=\"label label-danger\">La cédula a consultar no existe en nuestra base de datos!</span></h1>"; }
  else {
while ($reg = mysql_fetch_array($registro)) {

$nom = $reg['nombres'];
$ape = $reg['apellidos'];
$ced = $reg['cedula'];
$deb = str_replace(",",".",$reg['debe']);
$mp_pago = (float)$deb;


echo "<label>Nombres:</label></br><input value=\"".$nom."\" readonly> </br></br>";  
echo "<label>Apellidos:</label></br><input value=\"".$ape."\" readonly></br></br>";  
echo "<label>Cedula:</label></br><input value=\"".$ced."\" readonly></br></br>";  
echo "<label>Debiendo:</label></br><div class=\"input-prepend\"><input class=\"span2\" value=\"".$deb."\" readonly><span class=\"add-on\">Bs.F</span></br></br></div>";  
}  }}

require_once ('lib/mercadopago.php');
$mp = new MP('3152201', '2bFscbNuPOCbKJFWBVu'); /* Client ID y Toekn Secret de Mercado pago */
$preference_data = array(
    "items" => array(
       array(
           "title" => (string)$nom." ".(string)$ape. " - ".$ced,
           "quantity" => 1,
           "currency_id" => "VEF",
           "unit_price" => $mp_pago
       )
    )
);

$preference = $mp->create_preference ($preference_data);
?>


</div>
</div>
<!-- <? //* php echo '<pre>';print_r($preference_data); echo '</pre>'; *//?> -->


<a class="btn btn-primary" href="/sys/">Volver</a>
<? if (isset($preference)) {
   echo '<a class="btn btn-success" href="<?php echo $preference['response']['init_point']; ?>" name="MP-Checkout"><i class="icon-white icon-certificate"></i> Pagar</a>';
}?>

 <script type="text/javascript" src="https://www.mercadopago.com/org-img/jsapi/mptools/buttons/render.js">
<script src="http://code.jquery.com/jquery.js"></script>
  </body>
  <footer></footer>
</html>


