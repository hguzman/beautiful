<?php


$a=$_GET["id"];

include("../../seguridad.php");
include("../../conexion.php"); // esto conecta con la base de datos


$sql="delete from usuarios where usuario='$a'";
//echo $sql;
$resul=mysql_query($sql);

if ($resul) {
	header("Location: listarUsuarios.php");
//	echo "Eliminado";    
}else{
	echo "Problemas";       
}


?>