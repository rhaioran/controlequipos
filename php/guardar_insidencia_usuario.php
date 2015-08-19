<?php
//session_start();
include("coneccion_bd.php");


//$cod_usuario= $_SESSION['codigo'];

$codigoequipo 	= $_GET['codigoequipo'];
$fecha			= date("Y-m-d H:i:s",time()-3600);
$tipo			= $_POST['tipo'];
//$descripcion	=  htmlentities($_POST['descripcion']);
$estado='0';
$resuelto='no se atendio tu problema';
//****************************************************************************************************************************************//
		
$insertar = mysqli_query($conexion,"INSERT INTO historial (descripcionproblema,codigoequipo,estado,fecha,descripcionsolucion)
VALUES ('{$tipo}','{$codigoequipo}','{$estado}','{$fecha}','{$resuelto}')");
	if (!$insertar) 
	{
		die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
	}
	else
	{

		echo "	<html>
				<head>
					<script>					
						window.opener.document.location='index_329.php'; 
						window.close();
					</script>
				</head>
				</html>";
	 } 
mysqli_close($conexion);		

?>