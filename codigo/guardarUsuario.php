<?php

	include("../seguridad.php");
	include("../conexion.php"); // esto conecta con la base de datos

	$usuario=$_POST["usu"];
	$cont=$_POST["con"];
	$perfil=$_POST["per"];

$sql ="insert into usuarios value('$usuario','$cont','$perfil')";
//echo $sql;
$result = mysql_query($sql);
?>



<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width">
	    <link rel="stylesheet" href="../css/foundation.css" />
	    <script src="../js/vendor/modernizr.js"></script>
	    <script src="../js/vendor/jquery.js"></script>
		<script src="../js/foundation/foundation.js"></script>
		<script src="../js/foundation/foundation.alert.js"></script>	    
	</head>
	<body>
		<div class="row">
			  <nav class="top-bar" data-topbar>
			    <ul class="title-area">
			      <li class="name">
			        <h1><a href="#">Proyecto</a></h1>
			      </li>
			      <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
			    </ul>
				<section class="top-bar-section">
				    <!-- Right Nav Section -->
				    <ul class="right">				      
				      <li class="active"><a href="cerrarsesion.php">Cerrar Sesión</a></li>
				    </ul>
				<!-- Left Nav Section -->
				    <ul class="left">
				      <li><a href="#"><?php echo $usuario ?></a></li>
				    </ul>
				</section>			    			
			  </nav>
		</div>
		<br>
		<div class="row">
			<div class="large-4 columns panel">
				<label for="">Usuario</label>
				<label for=""><b><?= $usuario ?></b></label>
				<label for="">Perfil</label>
				<label for=""><b><?= $perfil ?></b></label>
			</div>
		</div>		
		<div class="row">
			<?php
				if ($result){
			?>
				<div data-alert class="alert-box success radius">
					Registro Guardado de marea correcta
				  <a href="#" class="close">&times;</a>
				</div>

			<?php
				}else{
			?>
				<div data-alert class="alert-box alert radius">
					Problemas al intentar Guardar
		    	  <a href="#" class="close">&times;</a>
				</div>
			<?php
				}
			?>			
		</div>
		<div class="row">
			
		</div>		
		<footer class="row">
			<div class="large-12 olumns">
				<hr/>
				<div class="row">
					<div class="large-6 columns">
						<p>© Copyright no one at all. Go to town.</p>
					</div>
					<div class="large-6 columns">
						<ul class="inline-list right">
				            <li><a href="#">Opción 1</a></li>
				            <li><a href="#">Opción 2</a></li>
				            <li><a href="#">Opción 3</a></li>
				            <li><a href="#">Opción 4</a></li>
				          </ul>
					</div>
				</div>
			</div>
		</footer>
		<script>
		  $(document).foundation();
		</script>
	</body>
</html>
