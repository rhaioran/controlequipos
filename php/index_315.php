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
	if($_SESSION['tipousuario']=='1')
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
<meta name="Escuela Militar de Ingenieria" content="Control de Equipos" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->
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
function popup5(url,ancho,alto) 
{
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "index_312.php",'width='+ancho+',height='+alto+',menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left='+posicion_x+',top='+posicion_y+'');
}
</script>

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
<script type="text/javascript">
function popup2(url,ancho,alto) 
{
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "index_316.php",'width='+ancho+',height='+alto+',menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left='+posicion_x+',top='+posicion_y+'');
}
</script>

</script>
<script type="text/javascript">
function popup3(url,ancho,alto) 
{
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "index_317.php",'width='+ancho+',height='+alto+',menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left='+posicion_x+',top='+posicion_y+'');
}
</script>

</script>
<script type="text/javascript">
function popup5(url,ancho,alto) 
{
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "index_319.php",'width='+ancho+',height='+alto+',menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left='+posicion_x+',top='+posicion_y+'');
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
                	<a href="menu_usuario.php" class="dropdown-toggle active" data-toggle=""> 
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
                  				<li><a href="login.php"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Salir</a></li>
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
                <img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
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
                	<a href="menu_usuario.php"> 
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

	  			<li class=""> <a href="javascript:;"> <i class="fa fa-desktop"></i> <span class="title">Equipos</span> <span class="arrow "></span> </a>
        			<ul class="sub-menu">
          				<li><a href="index_315.php">Tipo de equipos </a></li>
                        
          				
        			</ul>
      			</li>
                <li class=""> <a href="javascript:;"> <i class="fa fa-exclamation-triangle"></i> <span class="title">Problemas</span> <span class="arrow "></span> </a>
        			<ul class="sub-menu">
          				<li><a href="index_329.php">Reportar/Verificar Problema </a></li>

          				
        			</ul>
      			</li>
            </ul>
        <a href="#" class="scrollup">Scroll</a>
        <div class="clearfix"></div>
        <!-- END SIDEBAR MENU --> 
	</div>
   	<div class="footer-widget">		
    	<div class="progress transparent progress-small no-radius no-margin">
            <div data-percentage="100%" class="progress-bar animate-progress-bar progress-bar-success " >
            </div>		
        </div>
        <div class="pull-right">
            <div class="details-status">
            	<span data-animation-duration="560" data-value="100" class="animate-number"></span>%
        	</div>	
        	<a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>
   		</div>  
  		<!-- END SIDEBAR --> 
  		<!-- BEGIN PAGE CONTAINER-->
  		<div class="page-content">
        
    	<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    		<div id="portlet-config" class="modal hide">
      			<div class="modal-header">
        			<button data-dismiss="modal" class="close" type="button"></button>
                    
        			<h3>Widget Settings</h3>
      			</div>
      			<div class="modal-body"> Widget settings form goes here </div>
    		</div>
    		<div class="clearfix"></div>
<!----------------------------------------------------------------------------------------------------------->           
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true" id="grid-config">
      	<div class="modal-dialog">
        	<div class="modal-content">
          		<div class="modal-header">
            		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            		<h4 class="modal-title">Ayuda del módulo</h4>
          		</div>
          		<div class="modal-body">
                    <div class="notification-messages success">
                        <!--<div class="user-profile">-->
                        <div>
                            <h5>Icono:  <img src="assets/img/icono_descargas.png"  alt="" data-src="assets/img/icono_descargas.png" data-src-retina="assets/img/icono_descargas.png" width="40" height="40"></h5>
                        </div>
                        <div class="message-wrapper">
                            <div class="heading">
                                Descargar en formato Excel y PDF.
                            </div>
                            <div >
                                Puede seleccionar cualquiera de las opciones para realizar la descarga de información que se muestra en la tabla.
                            </div>
                        </div>
                        <!--<div class="date pull-right">
                        Yesterday
                        </div>-->
                    </div>                            
          		</div>
                <div class="modal-body">
                    <div class="notification-messages success">
                        <!--<div class="user-profile">-->
                        <div>
                            <h5>Icono:  <img src="assets/img/icono_numerales.jpg"  alt="" data-src="assets/img/icono_numerales.jpg" data-src-retina="assets/img/icono_numerales.jpg" width="65" height="40"></h5>
                        </div>
                        <div class="message-wrapper">
                            <div class="heading">
                                Mostrar cantidad de filas.
                            </div>
                            <div >
                                Esta opción te permite visualizar la cantidad de filas en la tabla como ser de 10, 25, 50, 100.
                            </div>
                        </div>
                        <!--<div class="date pull-right">
                        Yesterday
                        </div>-->
                    </div>                            
          		</div>
                <div class="modal-body">
                    <div class="notification-messages success">
                        <!--<div class="user-profile">-->
                        <div>
                            <h5>Icono:  <img src="assets/img/icono_pagina.jpg"  alt="" data-src="assets/img/icono_pagina.jpg" data-src-retina="assets/img/icono_pagina.jpg" width="300" height="35"></h5>
                        </div>
                        <div class="message-wrapper">
                            <div class="heading">
                                Cantidad de paginas:
                            </div>
                            <div >
                                Esta opción te permite ver las cantidad de paginas que contiene este registro, puede hacer clic en las flechas para ver las páginas.
                            </div>
                        </div>
                        <!--<div class="date pull-right">
                        Yesterday
                        </div>-->
                    </div>                            
          		</div>                
                
                
          		<div class="modal-footer">
            		<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            		<!--<button type="button" class="btn btn-primary">Save changes</button>-->
          		</div>
        	</div>
        	<!-- /.modal-content -->
      	</div>
      	<!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->            
            
<!----------------------------------------------------------------------------------------------------------->            
            <div class="content">
                <!--<ul class="breadcrumb">
                    <li>
                        <p>YOU ARE HERE</p>
                    </li>
                    <li><a href="#" class="active">Tables</a> </li>
                </ul>-->
                <div class="page-title"> <i class="icon-custom-left"></i>
                    <h3>Equipos<span class="semi-bold"></span></h3>
                </div>
                <div class="row-fluid">       		
                    <div class="span12">
                        <div class="grid simple ">
                            <div class="grid-title">
                                <h4>Tipo de Equipos </h4>
                                <div class="tools"> 
                                    <a href="javascript:;" class="collapse"></a> 
                                    <a href="#grid-config" data-toggle="modal" class="config"></a> 
                                    <a href="javascript:;" class="reload"></a> 
                                    <a href="javascript:;" class="remove"></a> 
                                </div>
                            </div>
                            <div class="grid-body ">   
                            
                           <!-- <div><a href="javascript:popup5('index_312.php',700,700)"><img border="0" src="assets/img/lapiz.png"width="45" height="45"> Adicionar una insidencia</a></div>-->
                            <br>
    <!------------------------------------------------------------------------------------------------------------------------>                                
                                <form class="cmxform form-horizontal " id="" method="post" action="guardar_tramo_de_contrato.php">
                                
                               
                                    <table width="103%" class="table table-hover table-condensed table-striped tab-pane" id="example">
                                        <thead>
                                            <tr>
                                            	<th width="10%"><h6 align="center"><b>Usuario</b></h6></th>
                                            	<th width="7%"><h6 align="center"><b>Codigo de Equipo</b></h6></th>
                                                <th width="15%"><h6 align="center"><b>Tipo de Equipo</b></h6></th>
                                                <th width="15%"><h6 align="center"><b>Descripcion del equipo</b></h6></th>
                                                 <th width="3%"><h6 align="center"><b>Piezas</b></h6></th>
                                                  <th width="3%"><h6 align="center"><b>Sistema</b></h6></th>
                                                <th width="3%"><h6 align="center"><b>Historial</b></h6></th>
                                                     
                                               
                                            </tr>                 
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql="SELECT
												equipos.codigoequipo,
												equipos.tipoequipo,
												equipos.descripcionequipo,
												equipos.codigopersona,
												personas.codigopersona,
												personas.nombrepersona,
												personas.apellidopaterno,
												personas.apellidomaterno,
												personas.codigodireccion
												FROM
												equipos ,
												personas
												WHERE
												equipos.codigopersona =  personas.codigopersona AND
												personas.codigopersona = '$cod'
												
                                                ";
                                                    $res=mysqli_query($conexion,$sql);                                    
                                                while ($dato=mysqli_fetch_array($res))
                                                {
                                                ?>
                                                
                                            <tr>
                                            <td><?php echo ''.utf8_encode($dato["apellidopaterno"]).' '.utf8_encode($dato["apellidomaterno"]).' '.utf8_encode($dato["nombrepersona"]).'' ?></td>             
                                              <td><?php echo utf8_encode($dato["codigoequipo"]) ?></td> 
                                              <td><?php echo utf8_encode($dato["tipoequipo"]) ?></td> 
                                              <td><?php echo utf8_encode($dato["descripcionequipo"]) ?></td>
                                                              
                                              
                                              

                                             
                                              
                                              <td><div align="center"><a href="javascript:popup2('index_316.php?codigoequipo=<?php echo $dato["codigoequipo"] ?>',850,700)"><img border="0" src="assets/img/piezas.png"onMouseOver="this.src='assets/img/piezas.png';" onMouseOut="this.src='assets/img/piezas.png';"width="40" height="40" ></a></div></td>  
                
                                               <td><div align="center"><a href="javascript:popup3('index_317.php?codigoequipo=<?php echo $dato["codigoequipo"] ?>',850,700)"><img border="0" src="assets/img/sistema.png"onMouseOver="this.src='assets/img/sistema.png';" onMouseOut="this.src='assets/img/sistema.png';"width="40" height="40" ></a></div></td> 
                                               
                                               <td><div align="center"><a href="javascript:popup5('index_319.php?codigoequipo=<?php echo $dato["codigoequipo"] ?>',850,700)"><img border="0" src="assets/img/folder.png"onMouseOver="this.src='assets/img/folder.png';" onMouseOut="this.src='assets/img/folder.png';"width="40" height="40" ></a></div></td> 
                                                
                                            </tr>
                                              <?php 
                                                } 
                                                ?>
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6" align="center">
                                        <!--<button class="btn btn-primary" type="submit" onclick='miFuncion()'>Guardar</button>
                                        <button class="btn btn-primary" type="submit" onclick='miFuncion()'>Guardar</button>-->
                                        <button class="btn btn-default" type="button"onClick="location='menu_usuario.php'">Salir</button>
                                        </div>
                                    </div>
                                <!--</div>-->
                                </form>                    
    <!------------------------------------------------------------------------------------------------------------------------>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="admin-bar" id="quick-access" style="display:">
                    <div class="admin-bar-inner">
                    <button class="btn btn-primary btn-cons btn-add" type="button">Add Browser</button>
                        <button class="btn btn-white btn-cons btn-cancel" type="button">Cancel</button>
                    </div>
                </div>
      		<div class="addNewRow"></div>
  		</div>
	</div>
</div>
<!-- END PAGE -->
<!-- BEGIN CHAT --> 

<!-- END CHAT --> 
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-datatable/extra/js/TableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/datatables.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->
</body>
</html>