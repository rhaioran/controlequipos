<?php 
//Conexi�n a la base de datos.
/* $con = mysql_connect("localhost","root","") or die ("Error en la conexion"); 
mysql_select_db("mantis",$con) or die ("Error al seleccionar la base de datos");
 */
 
$conexion = mysqli_connect("localhost","root","",'inventarioemi');
if (!$conexion) 
{
	die("Fallo la conexi�n a la Base de Datos: " . mysqli_error());
}
//2. Seleccionar la Base de Datos a utilizar
$seleccionar_bd = mysqli_select_db( $conexion,"inventarioemi");
if (!$seleccionar_bd) 
{
	die("Fallo la selecci�n de la Base de Datos: " . mysqli_error());
}

?>