<?php
session_start();
include("coneccion_bd.php");


$cod_usuario= $_SESSION['codigopersona'];

$codigopieza = $_GET['codigopieza'];
$fecha	=  date("Y-m-d H:i:s",time()-3600);
$descripcion	=  htmlentities($_POST['descripcion']);



//***********************************************************************************************************************************//

$sql="SELECT
												piezas.codigopiesa,
												piezas.tipopiesa,
												piezas.descripcionpiesa,
												equipos.codigoequipo,
												equipos.tipoequipo,
												equipos.descripcionequipo,
												equipos.codigopersona,
												personas.codigopersona,
												personas.nombrepersona,
												personas.apellidopaterno,
												personas.apellidomaterno,
												direcciones.codigodireccion,
												unidad.nombreunidad,
												locacion.nombrelocacion,
												locacion.codigolocacion,
												unidad.codigounidad
												FROM
												piezas,
												equipos ,
												personas ,
												direcciones,
												unidad,
												locacion
												WHERE
												piezas.codigopiesa = '$codigopieza' AND
												piezas.codigoequipo =  equipos.codigoequipo AND
												equipos.codigopersona = personas.codigopersona AND
												personas.codigodireccion = direcciones.codigodireccion AND
												unidad.codigounidad = direcciones.codigounidad AND
												locacion.codigolocacion = unidad.codigolocacion												
                                                ";
                                                $res=mysqli_query($conexion,$sql);
                                               //echo 'dara????';
                                                while ($dato=mysqli_fetch_array($res))
												{
													$codigopersona = $dato['codigopersona'];
													$nombrepersona	= $dato['nombrepersona'];
													$apellidopaterno = $dato['apellidopaterno'];
													$apellidomaterno = $dato['apellidomaterno'];
													$tipoequipo = $dato['tipoequipo'];
													$descripcionequipo = $dato['descripcionequipo'];
													$nombreunidad = $dato['nombreunidad'];
													$nombrelocacion = $dato['nombrelocacion'];
													$codigolocacion = $dato['codigolocacion'];
													$codigounidad = $dato['codigounidad'];
													$codigodireccion = $dato['codigodireccion'];
													$tipopieza = $dato['tipopiesa'];
													$descripcionpieza = $dato['descripcionpiesa'];
												} 
//echo $codigopieza;//

//****************************************************************************************************************************************//
$ci = "b".$codigounidad.$codigolocacion;
$cu = $codigounidad;
$nombre = 'baja';
$paterno = $nombreunidad;
$materno = $nombrelocacion;
$direccion = $codigodireccion;
$nomdir = 'baja';
$comentario = "La pieza ".$tipopieza." ".$descripcionpieza." perteneciente al equipo ".$tipoequipo." ".$descripcionequipo."del funcionario ".$nombrepersona." ".$apellidopaterno." ".$apellidomaterno." con carnet de identidad ".
$codigopersona.", se dio de baja por: ".$descripcion;
							
$sql2="SELECT * FROM personas, direcciones, unidad, locacion WHERE (personas.nombrepersona = 'baja' AND direcciones.codigodireccion = personas.codigodireccion
	AND direcciones.codigounidad = '$codigounidad' AND unidad.codigolocacion = locacion.codigolocacion AND unidad.nombreunidad = '$nombreunidad' AND 
	locacion.nombrelocacion = '$nombrelocacion')";
	$res2=mysqli_query($conexion,$sql2);
if(mysqli_num_rows($res2))
	{
		$insertar = mysqli_query($conexion,"INSERT INTO historial (descripcionproblema,descripcionsolucion,fecha,codigoequipo,estado)
		VALUES ('Fallo permanente','{$comentario}','{$fecha}','{$ci}','1')");
		if (!$insertar) 
		{
			die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
		}
		else
		{
			$guardar= ("UPDATE piezas SET codigopiesa='$codigopieza',tipopiesa='$tipopieza', descripcionpiesa='$descripcionpieza', codigoequipo='$ci' WHERE codigopiesa='$codigopieza'");
			$rs=mysqli_query($conexion,$guardar);
			if($rs)
			{

				echo "	<html>
					<head>
						<script>					
							 
							window.close();
						</script>
					</head>
				</html>";
			}
			else
			{
				die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
			}		
		}
	}
	else
	{
	$insertar = mysqli_query($conexion,"INSERT INTO direcciones (nombredireccion,codigounidad)
		VALUES ('{$nomdir}','{$cu}')");	
	
			if (!$insertar) 
			{
				die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
			}
			else
			{
				$dir = "SELECT codigodireccion FROM direcciones WHERE (nombredireccion = '$nomdir')";
				$resd=mysqli_query($conexion,$dir);

				while ($dato=mysqli_fetch_array($resd))
												{
													$direccion = $dato['codigodireccion'];
												} 



			$insertar = mysqli_query($conexion,"INSERT INTO personas (codigopersona,nombrepersona,apellidopaterno,apellidomaterno,codigodireccion)
				VALUES ('{$ci}','{$nombre}','{$paterno}','{$materno}','{$direccion}')");
					if (!$insertar) 
					{
						die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
					}
					else
					{
						
						$insertar = mysqli_query($conexion,"INSERT INTO equipos (codigoequipo,tipoequipo,descripcionequipo,codigopersona)
						VALUES ('{$ci}','equipobaja','aqui se almacenan las piesas y perifericos dados de baja','{$ci}')");
						if (!$insertar) 
						{
							die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
						}
						else
						{
							$insertar = mysqli_query($conexion,"INSERT INTO historial (descripcionproblema,descripcionsolucion,fecha,codigoequipo,estado)
							VALUES ('Fallo permanente','{$comentario}','{$fecha}','{$ci}','1')");
							if (!$insertar) 
							{
								die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
							}
							else
							{
								$guardar= ("UPDATE piezas SET codigopiesa='$codigopieza',tipopiesa='$tipopieza', descripcionpieza='$descripcionpieza', codigoequipo='$ci' WHERE codigopiesa='$codigopieza'");
								$rs=mysqli_query($conexion,$guardar);
								if($rs)
								{

									echo "	<html>
										<head>
											<script>					
												
												window.close();
											</script>
										</head>
									</html>";
								}
								else
								{
									die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
								}
							}
								
						}		
								
					 } 
			 } 
		mysqli_close($conexion);		
	}

		

?>