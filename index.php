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
  <div class="container">
<div class="row">


                <div class="col-md-4">


  <p class="text-center">
<h1>Sistema de Consulta</h1>
<!-- Formulario de Consulta -->
 <form class="form-horizontal center-block" action="consultar.php" method="post" name="consultar" id="cons">
<div class="control-group">
         <label class="control-label" for="numCedula">Número de Cédula</label>
   <div class="controls">
 	     <input title="Por favor escriba su numero de cédula" type="text" name="cedula" required/>
   </div>
</div>
 </br>
<div class="g-recaptcha" data-sitekey="6LdRpAcTAAAAABZJ-fI17QUunKpT7UPDm3e0JXv0"></div>
 	<button type="submit" data-toggle="tooltip" class="btn btn-primary animated flipInY " title="Se consultara cuanto es el monto a cancelar"><i class="fa fa-search"></i> Consultar</button>
 	</form>

<!-- Fin Formulario de Consulta -->
</p>
</div>





 <div class="col-md-4">

<p class="text-center">
<h1>Sistema de Registro</h1>
<!-- Formulario de Registro -->
 	<form class="form-horizontal center-block" action="registrar.php" method="post" name="registrar" id="reg">
 	
<div class="control-group">
         <label class="control-label" for="numCedula">Número de Cédula</label>
   <div class="controls">
 	     <input type="text" name="cedula" required/>
   </div>
</div>
 	</br>  

<div class="control-group">
 	<label class="control-label" for="nombres">Nombres</label>
<div class="controls">
 	<input type="text" name="nombres" required/>
</div>
</div>
 	</br>

<div class="control-group">
 	<label class="control-label" for="apellidos">Apellidos</label>
 	<div class="controls">
 	<input type="text" name="apellidos" required/>
</div>
</div>
 	</br>


<div class="control-group">
 	<label class="control-label" for="debe">Cuanto Debe</label>
 	<div class="controls">
 	<input type="text" name="debe" required/>
</div>
</div>
 	</br>

 	<div class="control-group">
    <div class="controls">
    <button type="submit" class="btn btn-success animated rollIn" onclick="return confirm('¿Deseas Continuar?')"><i class="fa fa-pencil-square-o"></i> Registrar</button>
 	
</div>
  </div>

 	</form>
 	</p>
 	</div>
<!--Fin Formulario de Registro -->


<!-- Formulario de Actualizar monto -->

<div class="col-md-4">
<p class="text-center">
<h1>Sistema de Actualizar Montos</h1>
<form class="form-horizontal center-block" action="actualizar.php" method="post" name="actualizar" id="act">
<div class="control-group">
         <label class="control-label" for="numCedula">Número de Cédula</label>
   <div class="controls">
 	     <input type="text" name="cedula" required/>
   </div>
</div>
<div class="control-group">
         <label class="control-label" for="montoNuevo">Monto nuevo</label>
   <div class="controls">
 	     <input title="Por favor escriba el monto nuevo" type="text" name="debe" required/>
   </div>
</div>
</br>
<div class="control-group">
    <div class="controls">
    <button type="submit" class="btn btn-warning animated zoomIn"><i class="fa fa-cog"></i> Actualizar</button>
 	
</div>
  </div>
       </div>
 	</form>
<!-- Fin Formulario de Consulta -->
</p>
</div>
</body>
</html>