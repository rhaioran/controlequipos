<?php
session_start();
include("coneccion_bd.php");


//$cod_usuario= $_SESSION['codigo'];
$cod_usuario = $_SESSION['codigopersona'];
//$codigo			= $_SESSION['codigo'];

$login		=$_POST['login'];
$contra1	=$_POST['password_1'];
$contra2	=$_POST['password_2'];






//$sql ="SELECT * FROM usuarios WHERE login='$login'";
$res= mysqli_query($conexion,"SELECT * FROM usuario WHERE nickname='$login'" )or die("error: ".mysql_error());
if(mysqli_num_rows($res))
{
	mysqli_free_result($res);
	if($contra1!=$contra2)
	{
		echo "<script>";
		echo "alert('Las contrasenas NO COINCIDEN....');";
		echo "</script>"; 
		echo "	<html>
					<head>
						<meta http-equiv='REFRESH'content='0;url=index_300.php'>
					</head>
				</html>";
		///echo "Las contrase&ntildeas deben coincidir.<br>";
		///echo "<a href ='$_SERVER[HTTP_REFERER].'>Intentalo de nuevo</a>";
	}
	else
	{
		$contra=($contra2);
		$guardar= ("UPDATE usuario SET password='$contra2' WHERE codigopersona='$cod_usuario'");
		$rs=mysqli_query($conexion,$guardar);
		if($rs)
		{
		
			echo "<script>";
			echo "alert('Los cambios se hicieron correctamente, Ya puede utilizar su nueva contrasena al iniciar el sistema');";
			echo "</script>"; 
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
			echo "alert('Error introduciendo al login!!!');";
			echo "</script>"; 
			echo "	<html>
					<head>
						<script>					
							
							window.close();
						</script>
					</head>
					</html>";
			//echo "Error introduciendo el login";
			//echo "Haz clic <a href='index_6.php'>aqui</a> para volver al formulario";
		}
	}
}
else
{
	echo "<script>";
	echo "alert('Su nombre de login no coincide');";
	echo "</script>"; 
	echo "	<html>
			<head>
				<script>					
					
					window.close();
				</script>
			</head>
			</html>";
	//echo "Su nombre de login no coincide<br>";
	//echo "<a href ='$_SERVER[HTTP_REFERER].'>Intentalo de nuevo</a>";
}
		


?>