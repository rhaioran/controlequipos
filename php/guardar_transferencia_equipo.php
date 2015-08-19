<?php
session_start();
include("coneccion_bd.php");


$cod_usuario= $_SESSION['codigopersona'];
$cod_usu	= htmlentities($_POST['usuario']);
$codigoequipo 	= $_GET['codigoequipo'];
$fecha	=  date("Y-m-d H:i:s",time()-3600);
$descripcion	=  htmlentities($_POST['descripcion']);



//***********************************************************************************************************************************//

$sql="SELECT
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
												equipos ,
												personas ,
												direcciones,
												unidad,
												locacion
												WHERE
												equipos.codigoequipo =  '$codigoequipo' AND
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
												} 

$res2=mysqli_query($conexion,"select *
					   from personas
					   where codigopersona='$cod_usu'")or die("error: ".mysql_error());

while ($dato2=mysqli_fetch_array($res2))
{
	$codigopersona2 = $dato2['codigopersona'];
													$nombrepersona2	= $dato2['nombrepersona'];
													$apellidopaterno2 = $dato2['apellidopaterno'];
													$apellidomaterno2 = $dato2['apellidomaterno'];
}
//echo "asd".$codigopersona2;//

//****************************************************************************************************************************************//
$comentario = "El equipo ".$tipoequipo." ".$descripcionequipo."	perteneciente a ".$nombrepersona." ".$apellidopaterno." ".$apellidomaterno." con carnet de identidad ".
$codigopersona.", se transfirio a: ".$nombrepersona2." ".$apellidopaterno2." ".$apellidomaterno2." con carnet de identidad ".
$codigopersona2."por motivos: ". $descripcion;
		$insertar = mysqli_query($conexion,"INSERT INTO historial (descripcionproblema,descripcionsolucion,fecha,codigoequipo,estado)
		VALUES ('Transferencia','{$comentario}','{$fecha}','{$codigoequipo}','1')");
		if (!$insertar) 
		{
			die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
		}
		else
		{				
			$guardar= ("UPDATE equipos SET codigoequipo='$codigoequipo',tipoequipo='$tipoequipo', descripcionequipo='$descripcionequipo', codigopersona='$codigopersona2' WHERE codigoequipo='$codigoequipo'");
			$rs=mysqli_query($conexion,$guardar);
			if($rs)
			{

				echo "	<html>
					<head>
						<script>					
							window.opener.document.location='index_311.php'; 
							window.close();
						</script>
					</head>
				</html>";
			 } 
		mysqli_close($conexion);
		}		
	

		

?>