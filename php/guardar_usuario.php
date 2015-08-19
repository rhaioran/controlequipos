<?php
//session_start();
include("coneccion_bd.php");


//$cod_usuario= $_SESSION['codigo'];

$ci			= $_POST['ci'];
$nombre		=  htmlentities($_POST['nombre']);
$paterno	=  htmlentities($_POST['paterno']);
$materno	=  htmlentities($_POST['materno']);
$tipousuario= $_POST['tipousuario'];
$direccion	=  htmlentities($_POST['direccion']);

$login		= $_POST['login'];
$password	= 'qwerty';



/* echo"$monto_certificado <br>";
echo"$multa <br>";
echo"$liquido <br>";
echo"$fecha <br>";
 */
//****************************************************************************************************************************************//

$sql="SELECT * FROM usuario WHERE (codigopersona='$ci')";
	$res=mysqli_query($conexion,$sql);
	if(mysqli_num_rows($res))
	{
		echo "<script>";
		echo "alert('Ya existe ese login.');";
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
		
	$insertar = mysqli_query($conexion,"INSERT INTO personas (codigopersona,nombrepersona,apellidopaterno,apellidomaterno,codigodireccion)
		VALUES ('{$ci}','{$nombre}','{$paterno}','{$materno}','{$direccion}')");
			if (!$insertar) 
			{
				die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
			}
			else
			{
			$insertar = mysqli_query($conexion,"INSERT INTO usuario (nickname,password,tipousuario,codigopersona)
				VALUES ('{$login}','{$password}','{$tipousuario}','{$ci}')");
					if (!$insertar) 
					{
						die("Fallo en la insercion de registro en la Base de Datos: " . mysqli_error());
					}
					else
					{
							$destino = "red_dragon0001@hotmail.com";
			
						//$destino = $login.'@adm.emi.edu.bo';
						$asunto ="Sistema de Control de Inventaros";
						$comentario = "
						
						Sr(a)".$nombre." ".$paterno.":
						Su usuario y contraseña para el Sistema de Control de equipos son:
						
						Usuario: ".$login."
						
						Password: ".$password./*"
						-".$destino2.*/"
						Se le solicita que cambie su contraseña una vez ingresado al sistema, no nos hacemos responsables de su informacion si usted no cambio su contraseña.
						";
						$headers = 'From: '.'german.saba@gmail.com'."\r\n".
						'Reply-To:'.$destino."\r\n".
						'X-Mailer: PHP/'.phpversion();					
						mail($destino,$asunto,$comentario,$headers);
						/* echo "<script>";
						echo "alert('Datos Guardados correctamente....');";
						echo "</script>";  */
						echo "	<html>
								<head>
									<script>					
										window.opener.document.location='index_302.php'; 
										window.close();
									</script>
								</head>
								</html>";
								
								
								
								
					 } 
			 } 
		mysqli_close($conexion);		
	}


/* $guardar= ("UPDATE micro_pagos_neos SET monto_certificado_pago_regional='$monto_certificado',multa_o_deduccion_regional='$multa',liquido_pagable_regional='$liquido',c_31_regional='$c31',fecha_efectivo_pago_regional='$fecha',pagado_regional='SI',fecha_registrado_contador='$fecha_contador	' WHERE id='$cod_microempresa' AND gestion='$gestion' AND periodo='$mes_desde'");
$rs=mysqli_query($guardar,$conexion);
if($rs)
{ */
		/*echo "	<html>
				<head>
					<script>					
						window.opener.document.location='index_58.php?proyId=$proyId'; 
						window.close();
					</script>
				</head>
				</html>";*/	
		/* echo "	<html>
				<head>
					<script>					
						
						window.close();
					</script>
				</head>
				</html>";	 */

/* }
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
	 */
	


?>