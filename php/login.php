<?php 

include("coneccion_bd.php");

$dato1=$_POST['username'];
$dato2=$_POST['password'];
$registros=mysqli_query($conexion,"select *
					   from usuario
					   where nickname='$dato1'and password='$dato2'" )or die("error: ".mysql_error());
$nfilas=mysqli_num_rows($registros);
if($nfilas!=0)
{
			$registro=mysqli_fetch_row($registros);
			session_start();			
			$_SESSION['codigousuario']		=$registro[0];
			$_SESSION['nickname']			=$registro[1];
			$_SESSION['password']			=$registro[2];
			$_SESSION['tipousuario']		=$registro[3];
			$_SESSION['codigopersona']		=$registro[4]; 
			
			$_SESSION['ACT']=$dato1;

			switch($_SESSION['tipousuario'])
			{
				
				case '0':
					header("Location:menu_administracion.php");
					break;					
				case '1':
					header("Location:menu_usuario.php");
					break;	
				case '2':
					header("Location:menu_administracionu.php");
					break;

			}
}
else
{
	header("Location:../index.html");
	}

/*else
{
	$registros=mysqli_query($conexion,"select *
					   from usuarios
					   where login='$dato1'and password='$dato2'" )or die("error: ".mysql_error());
	$nfilas=mysqli_num_rows($registros);
	if($nfilas!=0)
	{
		header("Location:blocked.html");
	}
	else
	{		
		header("Location:index.html");
	}
}*/
mysqli_close($conexion);
?>