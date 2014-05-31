<?php
	include("../../seguridad.php");

	include("../../conexion.php"); // esto conecta con la base de datos


$sql ="select * from usuarios";

$result = mysql_query($sql);

?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width">
	    <link rel="stylesheet" href="../../css/foundation.css" />
	    <script src="../../js/vendor/modernizr.js"></script>
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
				      <li class="active"><a href="../../cerrarsesion.php">Cerrar Sesión</a></li>
				    </ul>
				<!-- Left Nav Section -->
				    <ul class="left">
				      <li><a href="#"><?= $_SESSION["nomusuario"] ?></a></li>
				    </ul>
				</section>			    			
			  </nav>
		</div>
		<br>
		<div class="row">
			<div class="large-10 columns">
				<h1>Listado Usuarios</h1>
				<table>
				  <thead>
				    <tr>
				      <th width="200">Usuario</th>
				      <th width="150">Perfil</th>
				      <th colspan="2">Operaciones</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
					  	while ($row = mysql_fetch_row($result)){ 
					?>
					    <tr>
					      <td><?= $row[0] ?></td>
					      <td><?= $row[2] ?></td>					      
					      <td><a href="#">Editar</a></td>					      
					      <td><a href="#">Eliminar</a></td>					      
					    </tr>					
					<?php
						} 
					?>
				  </tbody>
				</table>
				<a href="../../admUsuarios">Regresar</a>
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
