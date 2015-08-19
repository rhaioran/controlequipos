<?php
session_start();
 if(!isset($_SESSION["ACT"]))
{
	header("Location:../index.html");
} 
else
{
	////////////////////////
	////////////////////////
	if($_SESSION['tipousuario']=='2')
	{
	}
	else
	{
	echo "<script>";
	echo "alert('NO TIENES PERMISO PARA INGRESAR!!!');";
	echo "</script>"; 
	echo "<script type=\"text/javascript\"> 
	window.location=\"../index.html\"				
	</script>";
	}
}  


include("coneccion_bd.php");

$cod = $_SESSION['codigopersona'];

$res=mysqli_query($conexion,"select *
					   from personas
					   where codigopersona='$cod'")or die("error: ".mysql_error());

while ($dato=mysqli_fetch_array($res))
{
	$nombrepersona	= $dato['nombrepersona'];
	$apellidopaterno = $dato['apellidopaterno'];
	$apellidomaterno = $dato['apellidomaterno'];
	$coddir = $dato['codigodireccion'];
}

$res=mysqli_query($conexion,"select *
					   from direcciones
					   where codigodireccion='$coddir'")or die("error: ".mysql_error());

while ($dato1=mysqli_fetch_array($res))
{
	$nombredireccion	= $dato1['nombredireccion'];
  $coduni = $dato1['codigounidad'];
}
$res=mysqli_query($conexion,"select *
             from unidad
             where codigounidad='$coduni'")or die("error: ".mysql_error());
while ($dato2=mysqli_fetch_array($res))
{
  $nombreunidad  = $dato2['nombreunidad'];
  $codigolocacion  = $dato2['codigolocacion'];
}


?>
<!--------------------------script para no retroceder pagina-------------------------------------------parte (1)------>
<script type="text/javascript">
{
if(history.forward(1))
location.replace(history.forward(1))
}
</script>
<!-------------------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html>
<head>

<!-----------------------------------------para no retroceder pagina-----------------------------------parte (2)------>
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<!-------------------------------------------------------------------------------------------------------------------->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>EMI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->


<script type="text/javascript">
function popup(url,ancho,alto) 
{
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "index_300.php",'width='+ancho+',height='+alto+',menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left='+posicion_x+',top='+posicion_y+'');
}
</script>




</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse "> 
	<!-- BEGIN TOP NAVIGATION BAR -->
  	<div class="navbar-inner">
		<div class="header-seperation"> 
			<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
		 		<li class="dropdown"> 
                	<a id="main-menu-toggle" href="#main-menu"  class="" > 
                    	<div class="iconset top-menu-toggle-white"></div> 
                    </a> 
                </li>		 
			</ul>
      		<!-- BEGIN LOGO -->	
      		<a href="#"><img src="assets/img/logo.png" class="logo" alt=""  data-src="assets/img/logo.png" data-src-retina="assets/img/logo.png" width="106" height="21"/>
            </a>
      		<!-- END LOGO --> 
      		<ul class="nav pull-right notifcation-center">	
        		<li class="dropdown" id="header_task_bar"> 
                	<a href="menu_administracion.php" class="dropdown-toggle active" data-toggle=""> 
                    	<div class="iconset top-home"></div> 
                    </a> 
                </li>
				<li class="dropdown" id="portrait-chat-toggler" style="display:none"> 
                	<a href="#sidr" class="chat-menu-toggle"> 
                    	<div class="iconset top-chat-white "></div> 
                    </a>
                </li>        
      		</ul>
      	</div>
      	<!-- END RESPONSIVE MENU TOGGLER --> 
      	<div class="header-quick-nav" > 
      		<!-- BEGIN TOP NAVIGATION MENU -->
	  		<div class="pull-left"> 
        		<ul class="nav quick-section">
          			<li class="quicklinks"> 
                    	<a href="#" class="" id="layout-condensed-toggle" >
            				<div class="iconset top-menu-toggle-dark"></div>
            			</a> 
                    </li>
        		</ul>
        		<ul class="nav quick-section">
          			<li class="quicklinks"> 
                    	<a href="#" class="" >
            				<div class="iconset top-reload"></div>
            			</a> 
                    </li>
          			<li class="quicklinks"> 
                    	<span class="h-seperate"></span>
                    </li>
          			<li class="quicklinks"> 
                   		<a href="#" class="" >
            				<div class="iconset top-tiles"></div>
            			</a> 
                    </li>
					<li class="m-r-10 input-prepend inside search-form no-boarder">
						<span class="add-on"> 
                        	<span class="iconset top-search"></span>
                        </span>
				 		<input name="" type="text"  class="no-boarder " placeholder="Buscar" style="width:250px;">
					</li>
		  		</ul>
	  		</div>
	 		<!-- END TOP NAVIGATION MENU -->
	 		<!-- BEGIN CHAT TOGGLER -->
      		<div class="pull-right"> 
				<div class="chat-toggler">	
					<div class="user-details"> 
						<div class="username">	
							<?php
							echo utf8_encode( ucwords ($nombrepersona ." ".$apellidopaterno." ".$apellidomaterno));  
							?>									
						</div>						
					</div> 
					<div class="iconset "></div>
						<div class="profile-pic"> 
							<img src="assets/img/profiles/avatar_small.jpg"  alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small.jpg" width="35" height="35" /> 
						</div>       			
					</div>
		 			<ul class="nav quick-section ">
						<li class="quicklinks"> 
							<a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">						
								<div class="iconset top-settings-dark "></div> 	
							</a>
							<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  				<li><a href="javascript:popup('index_300.php',800,600)"> Cambiar Contraseña</a>
                  				</li>

                  				<li class="divider"></li>                
                  				<li><a href="../index.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Salir</a></li>
               				</ul>
						</li> 
						<li class="quicklinks"> 
                        	<span class="h-seperate"></span>
                        </li> 

					</ul>
      			</div>
	   		<!-- END CHAT TOGGLER -->
      		</div> 
      	<!-- END TOP NAVIGATION MENU -->  
  		</div>
  	<!-- END TOP NAVIGATION BAR --> 
	</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
  		<!-- BEGIN SIDEBAR -->
  		<div class="page-sidebar" id="main-menu"> 
  			<!-- BEGIN MINI-PROFILE -->
   			<div class="user-info-wrapper">	
				<div class="profile-wrapper">
					<img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar.jpg" width="69" height="69" />
				</div>
    			<div class="user-info">
      				<div class="greeting">Bienvenido
                   	</div>
      				<!--<div class="username">John 
                    	<span class="semi-bold">Smith</span>
                    </div>-->
      				<div class="status">Area:
                    	<a href="#">                        
                    		<?php echo utf8_encode(ucwords (($nombredireccion))); ?>
                        </a>
                    </div>
   				</div>
   			</div>
 			<!-- END MINI-PROFILE -->
   
   			<!-- BEGIN SIDEBAR MENU -->	
			<p class="menu-title">Menú 
            	<span class="pull-right">
                	<a href="javascript:;">
                    	<i class="fa fa-refresh"></i>
                    </a>
                </span>
            </p>
    		<ul>	
      			<li class="start active "> 
                	<a href="menu_administracionu.php"> 
                    	<i class="icon-custom-home"></i> 
                        <span class="title">Página Principal</span> 
                        <span class="selected"></span> 
                        <!--<span class="badge badge-important pull-right">5</span>-->
                    </a> 
                </li>
	  			<!--<li class=""> 
                	<a href="email.html"> 
                    	<i class="fa fa-envelope"></i> 
                        <span class="title">Email</span>  
                        <span class=" badge badge-disable pull-right ">203</span>
                    </a> 
                </li>      
	  			<li class=""> 
                	<a href="../frontend/index.html"> 
                    	<i class="fa fa-flag"></i>  
                      	<span class="title">Frontend</span>
                    </a>
                </li> -->     
      			<li class=""> 
                	<a href="javascript:;"> 
                    	<i class="fa fa-folder-open-o"></i> 
                        <span class="title">Registro</span> 
                        <span class="arrow "></span> 
                    </a>
        			<ul class="sub-menu">
		  				<li > <a href="index_302u.php"> Usuarios</a> </li>
		  				<!--<li > <a href="index_302.php"> Listado de MCV No Vigentes</a> </li>-->

        			</ul>
      			</li>
	  			<li class=""> <a href="javascript:;"> <i class="fa fa-desktop"></i> <span class="title">Equipos</span> <span class="arrow "></span> </a>
        			<ul class="sub-menu">
          				<li><a href="index_311u.php">Tipo de equipos </a></li>

        			</ul>
      			</li>
                <?php 
				$lista=mysqli_query($conexion,"SELECT Count(*) AS Total
				FROM
				historial,
        personas,
        direcciones,
        unidad
				WHERE
        historial.estado = '0' AND
        historial.cod_usuario = personas.codigopersona AND
        personas.codigodireccion = direcciones.codigodireccion AND
        direcciones.codigounidad = unidad.codigounidad AND
        unidad.nombreunidad = '$nombreunidad' AND
        unidad.codigolocacion ='$codigolocacion'");
				while($regi=  mysqli_fetch_array($lista))
				{
					$cantidad= $regi['Total'];
				}
				$lista=mysqli_query($conexion,"SELECT Count(*) AS Total
				FROM
				historial,
        personas,
        direcciones,
        unidad
				WHERE                    
				historial.estado = '2' AND
        historial.cod_usuario = personas.codigopersona AND
        personas.codigodireccion = direcciones.codigodireccion AND
        direcciones.codigounidad = unidad.codigounidad AND
        unidad.nombreunidad = '$nombreunidad' AND
        unidad.codigolocacion ='$codigolocacion'");
				while($regi=  mysqli_fetch_array($lista))
				{
					$cantidadp= $regi['Total'];
				}
				$cantidadi = $cantidad + $cantidadp;
				?>
                <li class=""> <a href="javascript:;"> <i class="fa fa-exclamation-triangle"></i> <span class="title">Insidencias</span> <span class="arrow "></span> <span class="selected"></span> <span class="badge badge-important pull-right"><?php echo $cantidadi ?></span></a>
        			<ul class="sub-menu">
          				<li><a href="index_325u.php">nuevos <span class="badge badge-important pull-right"><?php echo $cantidad ?></a> </li>
                        <li><a href="index_325bu.php">pendientes <span class="badge badge-important pull-right"><?php echo $cantidadp ?></a> </li>
                        <li><a href="index_328u.php">Resueltos</a></li>
          				
        			</ul>
      			</li>

            </ul>
			<a href="#" class="scrollup">Scroll</a>
			<div class="clearfix"></div>
    			<!-- END SIDEBAR MENU --> 
 		</div>
	<!-- END SIDEBAR --> 
  		<!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    		<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    		<div id="portlet-config" class="modal hide">
      			<div class="modal-header">
        			<button data-dismiss="modal" class="close" type="button"></button>
        			<h3></h3>
      			</div>
      			<div class="modal-body"> 
              </div>
    		</div>
    		<div class="clearfix"></div>
    		<div class="content">  
				<div class="page-title">	
					<h3>Página Principal</h3>		
				</div>
    		</div>
            <br>
            <br>
            <br>
         <div align="center">
         <img src="assets/img/logo_sia_pro.png" width="280" height="125"></div>
         
         
         </div>
 </div>
<!-- END CONTAINER --> 
<!-- BEGIN CHAT --> 

<!-- END CHAT --> 
<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 
<!-- BEGIN PAGE LEVEL JS --> 	
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script> 	
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS --> 	

<!-- BEGIN CORE TEMPLATE JS --> 
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS --> 
</body>
</html>