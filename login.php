<?php
	include("conexion.php"); // esto conecta con la base de datos

	$usuario=$_POST['usu'];
	$contrasena=$_POST['con'];

//	echo $usuario;
//	echo $contrasena;

	
	$sql = "select * from usuarios where usuario='$usuario' and contrasena='$contrasena'";

//	echo $sql;

	$rs = mysql_query($sql,$db); // Aqui hace la consulta y el resultado lo coloca en la variable

	if (mysql_num_rows($rs)==0){
		header('Location: index.html'); // Regresa al index
	}else{
		session_start(); //inicia sesion

		$fila = mysql_fetch_assoc($rs);
		$_SESSION["autentificado"] ="SI"; //guarda la variable de sesion
	}

?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width">
	    <link rel="stylesheet" href="css/foundation.css" />
	    <script src="js/vendor/modernizr.js"></script>
	    <script src="js/vendor/jquery.js"></script>
	    <script src="js/misjs/menu.js"></script>
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
				  <li><a href="administracion.php">Administración</a></li>
				  <li><a href="#" id="admin">Administración2</a></li>
				<?php
					if ($perfil==1){
				?>
					<li><a href="#">PQR</a></li>				  
					<li><a href="#">Vigilancia</a></li>
					<li><a href="#">Calificación</a></li>
					<li><a href="#">Metas</a></li>
					<li><a href="#">Formas de Pago</a></li>
					<li><a href="#">Ayuda</a></li>
					<li><a href="#">Lector de Codigo</a></li>

				 <?php
					}
				 ?> 

				</ul>				
			</div>
			<div class="large-10 columns">
				Descripción de las opciones del proyecto
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, unde, eligendi odit harum mollitia quibusdam aut asperiores dolorem error sed obcaecati atque laudantium vero provident vitae quam repudiandae voluptatem optio.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, eveniet, iusto, doloribus molestiae vero illum magni unde enim ut blanditiis similique voluptatum ducimus voluptates totam officiis quasi quos esse ab!
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
