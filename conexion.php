<?php

//$server="sql10.bravehost.com";
//$usurio="siuptatiana";
//$contrasena="tati20";
 
/* Conexion Servidor local*/

$server="127.0.0.1";
$usurio="root";
$contrasena="usrio01";

//conecto con la base de datos
	$db=mysql_connect($server,$usurio,$contrasena);
//selecciono la BBDD 
	mysql_select_db("dbbeautisurprise",$db);// Seleccion la base de datos correcta
?>