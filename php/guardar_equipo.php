<?php
//session_start();
include("coneccion_bd.php");


//$cod_usuario= $_SESSION['codigo'];
$codigoequipo		= htmlentities($_POST['cod_equipo']);
$tipo			= htmlentities($_POST['tipo']);
$descripcion	= htmlentities($_POST['descripcion']);
$cod_usuario	= $_POST['usuario'];


/* echo"$monto_certificado <br>";
echo"$multa <br>";
echo"$liquido <br>";
echo"$fecha <br>";
 */
//****************************************************************************************************************************************//		
$insertar = mysqli_query($conexion,"INSERT INTO equipos (codigoequipo,tipoequipo,descripcionequipo,codigopersona)
	VALUES ('{$codigoequipo}','{$tipo}','{$descripcion}','{$cod_usuario}')");
		if (!$insertar) 
		{
			die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
		}
		else
		{

			/* echo "<script>";
			echo "alert('Datos Guardados correctamente....');";
			echo "</script>"; */ 
			/*echo "	<html>
					<head>
						<script>					
							window.opener.document.location='index_311.php'; 
							window.close();
						</script>
					</head>
					</html>";*/
			echo "	<html>
					<head>
						<meta http-equiv='REFRESH'content='0;url=index_313.php?codigoequipo=$codigoequipo'>
					</head>
					</html>";				
					
 
		 } 
	mysqli_close($conexion);		




	


?>