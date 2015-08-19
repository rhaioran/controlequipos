<?php

include("coneccion_bd.php");


$direccion	=  utf8_decode($_POST['direccion']);

//****************************************************************************************************************************************//

$sql="SELECT * FROM direccion_administrativa WHERE (nombre='$direccion')";
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
		
	$insertar = mysqli_query($conexion,"INSERT INTO direccion_administrativa (nombre)
		VALUES ('{$direccion}')");
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
		mysqli_close($conexion);		
	}



	


?>