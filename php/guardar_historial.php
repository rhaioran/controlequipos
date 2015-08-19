<?php
//session_start();
include("coneccion_bd.php");


//$cod_usuario= $_SESSION['codigo'];

$codigoequipo 	= $_GET['codigoequipo'];
$fecha			= $_POST['fecha'];
$tipo			= $_POST['tipo'];
$descripcion	=  htmlentities($_POST['descripcion']);

//****************************************************************************************************************************************//
		
$insertar = mysqli_query($conexion,"INSERT INTO historial (descripcionproblema,descripcionsolucion,fecha,codigoequipo)
VALUES ('{$tipo}','{$descripcion}','{$fecha}','{$codigoequipo}')");
	if (!$insertar) 
	{
		die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
	}
	else
	{

		/* echo "<script>";
		echo "alert('Datos Guardados correctamente....');";
		echo "</script>";  */
	echo "	<html>
				<head>
					<meta http-equiv='REFRESH'content='0;url=index_318.php?codigoequipo=$codigoequipo'>
				</head>
				</html>";
	 } 
mysqli_close($conexion);		

?>