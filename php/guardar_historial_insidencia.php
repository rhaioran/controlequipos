<?php
//session_start();
include("coneccion_bd.php");


//$cod_usuario= $_SESSION['codigo'];

$codigoequipo 	= $_GET['codigoequipo'];
$fecha_a		= $_POST['fecha'];
$fecha	= date("Y-m-d",strtotime($fecha_a));

//$tipo			= $_POST['tipo'];
$descripcion	=  htmlentities($_POST['descripcion']);


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
$guardar= ("UPDATE historial SET descripcionsolucion='$descripcion',estado='1',fecha_de_solucion='$fecha' WHERE codigohistorial='$codigohistorial'");
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