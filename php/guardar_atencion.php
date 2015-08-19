<?php
session_start();
include("coneccion_bd.php");


$cod_usuario= $_SESSION['codigopersona'];

$codigoequipo 	= $_GET['codigoequipo'];
$fecha	=  date("Y-m-d H:i:s",time()-3600);
$descripcion	=  htmlentities($_POST['pendiente']);



$res=mysqli_query($conexion,"select *
from historial
where codigohistorial='$codigoequipo'
ORDER BY
historial.codigohistorial DESC
LIMIT 1")or die("error: ".mysql_error());
while ($dato=mysqli_fetch_array($res))
{
	$codigohistorial	= $dato['codigohistorial'];
	//$descripcionsolucion 	= $dato['descripcionsolucion'];
}

//****************************************************************************************************************************************//
$guardar= ("UPDATE historial SET fecha_de_atencion='$fecha',cod_usuario='$cod_usuario', estado='2', descripcionsolucion='$descripcion' WHERE codigohistorial='$codigohistorial'");
$rs=mysqli_query($conexion,$guardar);
if($rs)
{
	echo "	<html>
			<head>
				<script>					
					window.opener.document.location='index_325.php'; 
					window.close();
				</script>
			</head>
			</html>";
}
else
{
	die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
}




mysqli_close($conexion);		

?>