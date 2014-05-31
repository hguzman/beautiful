<?php


$a=$_GET["id"];

include("../../seguridad.php");
include("../../conexion.php"); // esto conecta con la base de datos


$sql="delete from personas where cedula=$a";
//echo $sql;
$resul=mysql_query($sql);

if ($resul) {
	header("Location: listarPersonas.php");
//	echo "Eliminado";    
}else{
	echo "Problemas";       
}


?>