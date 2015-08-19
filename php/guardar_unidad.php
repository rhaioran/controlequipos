<?php

include("coneccion_bd.php");


$unidad	=  utf8_decode($_POST['unidad']);

//****************************************************************************************************************************************//

$sql="SELECT * FROM unidad_administrativa WHERE (unidad='$unidad')";
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
		
	$insertar = mysqli_query($conexion,"INSERT INTO unidad_administrativa (unidad)
		VALUES ('{$unidad}')");
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