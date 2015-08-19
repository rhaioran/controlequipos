<?php

include("coneccion_bd.php");

$codigo		= $_POST['codigo'];
$locacion	=  utf8_decode($_POST['locacion']);

//****************************************************************************************************************************************//

$sql="SELECT * FROM locacion_administrativa WHERE (locacion='$locacion' AND codloc='$codigo')";
	$res=mysqli_query($conexion,$sql);
	if(mysqli_num_rows($res))
	{
		echo "<script>";
		echo "alert('Ya existe esa dirección');";
		echo "</script>"; 
		echo "	<html>
				<head>
					<script>
						history.back();
					</script>
				</head>
				</html>";			
	}
	else
	{		
	$insertar = mysqli_query($conexion,"INSERT INTO locacion_administrativa (codloc,locacion)
		VALUES ('{$codigo}','{$locacion}')");
			if (!$insertar) 
			{
				die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
			}
			else
			{

				 $insertar = mysqli_query($conexion,"INSERT INTO locacion (codigolocacion,nombrelocacion)
				VALUES ('{$codigo}','{$locacion}')");
					if (!$insertar) 
					{
						die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
					}
					else
					{

						echo "	<html>
								<head>
									<script>					
										window.opener.document.location='index_320.php'; 
										window.close();
									</script>
								</head>
								</html>";
					}
			} 
		mysqli_close($conexion);		
	}



	


?>