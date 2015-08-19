<?php
//session_start();
include("coneccion_bd.php");


//$cod_usuario= $_SESSION['codigo'];

$monto_certificado	= $_POST['monto_certificado'];
$multa				= $_POST['multa'];
$liquido			= $_POST['liquido'];
$c31				= $_POST['c31'];
$fecha				= $_POST['fecha'];

$mes_desde			= $_GET['mes_desde'];
$cod_microempresa	= $_GET['cod_microempresa'];
$gestion			= $_GET['gestion'];
$fecha_contador		= date("Y-m-d H:i:s",time()-3600);

/* echo"$monto_certificado <br>";
echo"$multa <br>";
echo"$liquido <br>";
echo"$fecha <br>";
 */
//****************************************************************************************************************************************//
$guardar= ("UPDATE micro_pagos_neos SET monto_certificado_pago_regional='$monto_certificado',multa_o_deduccion_regional='$multa',liquido_pagable_regional='$liquido',c_31_regional='$c31',fecha_efectivo_pago_regional='$fecha',pagado_regional='SI',fecha_registrado_contador='$fecha_contador	' WHERE id='$cod_microempresa' AND gestion='$gestion' AND periodo='$mes_desde'");
$rs=mysql_query($guardar,$conexion);
if($rs)
{
		/*echo "	<html>
				<head>
					<script>					
						window.opener.document.location='index_58.php?proyId=$proyId'; 
						window.close();
					</script>
				</head>
				</html>";*/	
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
		echo "<script>";
		echo "alert('error en guardardo!!');";
		echo "</script>"; 
		echo "	<html>
				<head>
					<script>
						window.close();
					</script>
				</head>
				</html>";	
}
	
	


?>