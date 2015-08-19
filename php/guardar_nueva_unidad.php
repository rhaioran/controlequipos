<?php
//session_start();
include("coneccion_bd.php");


//$cod_usuario= $_SESSION['codigo'];

//$codigoequipo 	= $_GET['codigoequipo'];
/* $cod_locacion	= htmlentities($_POST['locacion']);
$cod_unidad		= htmlentities($_POST['unidad']);
$cod_direccion		= htmlentities($_POST['direccion']); */

$cod_locacion	= $_POST['locacion'];
$cod_unidad		= $_POST['unidad'];
$cod_direccion	= $_POST['direccion'];



$res=mysqli_query($conexion,"select * from locacion_administrativa where codloc='$cod_locacion'")or die("error: ".mysql_error());
while ($dato=mysqli_fetch_array($res))
{
	$locacion = ($dato['locacion']);
}
$res=mysqli_query($conexion,"select * from unidad_administrativa where codunid='$cod_unidad'")or die("error: ".mysql_error());
while ($dato=mysqli_fetch_array($res))
{
	$unidad	= ($dato['unidad']);
}

$res=mysqli_query($conexion,"select * from direccion_administrativa where coddirec='$cod_direccion'")or die("error: ".mysql_error());
while ($dato=mysqli_fetch_array($res))
{
	$nombre	= ($dato['nombre']);
}
/* echo"$cod_locacion <br>";
echo"$locacion <br>";
echo"$cod_unidad <br>";
echo"$unidad <br>";
echo"$cod_direccion <br>";
echo"$nombre <br>";  */

//****************************************************************************************************************************************//

$res=mysqli_query($conexion,"select * from unidad where codigolocacion='$cod_locacion' and nombreunidad='$unidad'")or die("error: ".mysql_error());
while ($dato=mysqli_fetch_array($res))
{
	$codigounidad	= $dato['codigounidad'];
}


$sql="SELECT DISTINCT
direcciones.codigodireccion,
direcciones.nombredireccion,
unidad.nombreunidad,
locacion.nombrelocacion
FROM
direcciones ,
unidad ,
locacion
WHERE
direcciones.nombredireccion =  '$nombre' AND
unidad.nombreunidad =  '$unidad'  AND
locacion.nombrelocacion = '$locacion'";
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

				$sql="SELECT DISTINCT
				nombreunidad				
				FROM
				unidad,
				locacion
				WHERE
				unidad.nombreunidad =  '$unidad'  AND
				locacion.nombrelocacion = '$locacion'";
				if(mysqli_num_rows($res))
				{
					$res=mysqli_query($conexion,"select * from unidad where codigolocacion='$cod_locacion' and nombreunidad='$unidad'")or die("error: ".mysql_error());
					while ($dato=mysqli_fetch_array($res))
					{
							$codigounidad	= $dato['codigounidad'];
					}
					$insertar = mysqli_query($conexion,"INSERT INTO direcciones (nombredireccion,codigounidad)
					VALUES ('{$nombre}','{$codigounidad}')");
					if (!$insertar) 
					{
						die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
					}
					else
					{
			
						echo "	<html>
								<head>
									<script>					
										window.opener.document.location='index_310.php'; 
										window.close();
									</script>
								</head>
								</html>";
					}
				}
				else
				{
					$res=mysqli_query($conexion,$sql);
					$insertar = mysqli_query($conexion,"INSERT INTO unidad (nombreunidad,codigolocacion)
					VALUES ('{$unidad}','{$cod_locacion}')");
					if (!$insertar) 
					{
						die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
					}
					else
					{	
						$res=mysqli_query($conexion,"select * from unidad where codigolocacion='$cod_locacion' and nombreunidad='$unidad'")or die("error: ".mysql_error());
						while ($dato=mysqli_fetch_array($res))
						{
							$codigounidad	= $dato['codigounidad'];
						}
						$insertar = mysqli_query($conexion,"INSERT INTO direcciones (nombredireccion,codigounidad)
						VALUES ('{$nombre}','{$codigounidad}')");
						if (!$insertar) 
						{
							die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
						}
						else
						{
			
							echo "	<html>
									<head>
										<script>					
											window.opener.document.location='index_310.php'; 
											window.close();
										</script>
									</head>
									</html>";
								
						}
					} 
				}	
				
			  
		mysqli_close($conexion); 

		
	}
	
	
	
	 

?>