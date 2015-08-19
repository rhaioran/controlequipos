<?php
//session_start();
include("coneccion_bd.php");


//$cod_usuario= $_SESSION['codigo'];
$cod_equipo		= htmlentities($_POST['cod_equipo']);
$tipo			= htmlentities($_POST['tipo']);
$descripcion	= htmlentities($_POST['descripcion']);
$cod_usuario	= $_POST['usuario'];

$fecha=date("Y-m-d");
/* echo"$monto_certificado <br>";
echo"$multa <br>";
echo"$liquido <br>";
echo"$fecha <br>";
 */
//****************************************************************************************************************************************//		
$insertar = mysqli_query($conexion,"INSERT INTO historialasignacion (codigopersona,codigoequipo,fecha)
	VALUES ('{$cod_usuario}','{$cod_equipo}','{$fecha}')");
		if (!$insertar) 
		{
			die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
		}
		else
		{
		$insertar = mysqli_query($conexion,"INSERT INTO equipos (codigoequipo,tipoequipo,descripcionequipo)
		VALUES ('{$cod_equipo}','{$tipo}','{$descripcion}')");
			if (!$insertar) 
			{
				die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
			}
			else
			{
	
				/* echo "<script>";
				echo "alert('Datos Guardados correctamente....');";
				echo "</script>"; */ 
				echo "	<html>
						<head>
							<script>					
								window.opener.document.location='index_311.php'; 
								window.close();
							</script>
						</head>
						</html>";
	 
			 } 
		}
	mysqli_close($conexion);		




	


?>