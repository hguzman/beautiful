<?php
	include("seguridad.php");
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width">
	    <link rel="stylesheet" href="css/foundation.css" />
	    <script src="js/vendor/modernizr.js"></script>
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
			<div class="large-2 columns panel">
				<ul class="side-nav">
				  <li><a href="#">Guardar</a></li>
				  <li><a href="#">Regresar</a></li>
				</ul>				
			</div>
			<div class="large-10 columns">
				<p>Descripción de las opciones de administración de usuarios</p>
				<form action="codigo/guardarUsuario.php" method="post">
					<div class="row">
					    <div class="large-12 columns">
					      <label>Usuario
					        <input type="text" placeholder="Nombre Usuario" name="usu"/>
					      </label>					      
					    </div>
					</div>
					<div class="row">
					    <div class="large-12 columns">
					      <label>Contraseña
					        <input type="password" placeholder="Contraseña" name="con"/>
					      </label>
					    </div>
					</div>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Perfil de Usuario
				        <select name="per">
				          <option value="1">Administrador</option>
				          <option value="2">General</option>
				        </select>
				      </label>
				    </div>
				  </div>
				  <input type="submit" value="Guardar Usuario" class="button expand">
				</form>
			</div>
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

	</body>
</html>
