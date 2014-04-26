<?php

	// Valida que tenga una session activa
	session_start(); //Inicia Manipulación de Variables de Session
    if (isset($_SESSION['nomusuario'])){   // Existe la variable 	
	    $usuario=$_SESSION["nomusuario"];
    }else {
		header('Location: index.html');
    }
    // ****************

	$usuario=$_POST["usu"];
	$cont=$_POST["con"];

$db = mysql_connect("127.0.0.1", "root","usrio01");
mysql_select_db("senatga",$db);

$sql ="insert into usuarios value('$usuario','$cont')";

$result = mysql_query($sql);

header('Location: crearusuario.php');

?>