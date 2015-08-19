<?php
session_start();
 if(!isset($_SESSION["ACT"]))
{
	header("Location:../../index.html");
} 
else
{
	////////////////////////
	////////////////////////
	if($_SESSION['tipo']=='CONTADOR')
	{
	}
	else
	{
	echo "<script>";
	echo "alert('NO TIENES PERMISO PARA INGRESAR!!!');";
	echo "</script>"; 
	echo "<script type=\"text/javascript\"> 
	window.location=\"../../index.html\"				
	</script>";
	}
}  


include("coneccion_bd.php");

$nombre 		= utf8_encode($_SESSION['nombre']);
$apellido_pat 	= utf8_encode($_SESSION['apellido_pat']);
$apellido_mat 	= utf8_encode($_SESSION['apellido_mat']);
$departamento 	= $_SESSION['departamento'];



$gestion	= '2015';
$regional	= $departamento;

$enero_1	=''.$gestion.'-'.'01-01'.'';
$enero_2	=''.$gestion.'-'.'01-31'.'';
$febrero_1	=''.$gestion.'-'.'02-01'.'';
$febrero_2	=''.$gestion.'-'.'02-28'.'';
$marzo_1	=''.$gestion.'-'.'03-01'.'';
$marzo_2	=''.$gestion.'-'.'03-31'.'';
$abril_1	=''.$gestion.'-'.'04-01'.'';
$abril_2	=''.$gestion.'-'.'04-30'.'';
$mayo_1		=''.$gestion.'-'.'05-01'.'';
$mayo_2		=''.$gestion.'-'.'05-31'.'';
$junio_1	=''.$gestion.'-'.'06-01'.'';
$junio_2	=''.$gestion.'-'.'06-30'.'';
$julio_1	=''.$gestion.'-'.'07-01'.'';
$julio_2	=''.$gestion.'-'.'07-31'.'';
$agosto_1	=''.$gestion.'-'.'08-01'.'';
$agosto_2	=''.$gestion.'-'.'08-31'.'';
$septiembre_1=''.$gestion.'-'.'09-01'.'';
$septiembre_2=''.$gestion.'-'.'09-30'.'';
$octubre_1	=''.$gestion.'-'.'10-01'.'';
$octubre_2	=''.$gestion.'-'.'10-31'.'';
$noviembre_1=''.$gestion.'-'.'11-01'.'';
$noviembre_2=''.$gestion.'-'.'11-30'.'';
$diciembre_1=''.$gestion.'-'.'12-01'.'';
$diciembre_2=''.$gestion.'-'.'12-31'.'';


?>


<!DOCTYPE html>
<html>
<head>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>EMI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
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
function popup(url,ancho,alto) 
{
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "index_305.php",'width='+ancho+',height='+alto+',menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left='+posicion_x+',top='+posicion_y+'');
}
</script>



<style>
/*table {
    width: 716px; 
    border-spacing: 0;
}

tbody, thead tr { display: block; }

tbody {
    height: 700px;
    overflow-y: auto;
    overflow-x: auto;
}

tbody td, thead th {
    width: 140px;
}

thead th:last-child {
    width: 156px; 
}*/
</style>



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
      		<a href="#"><img src="assets/img/logo.png" class="logo" alt=""  data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21"/>
            </a>
      		<!-- END LOGO --> 
      		<ul class="nav pull-right notifcation-center">	
        		<li class="dropdown" id="header_task_bar"> 
                	<a href="menu_administracion_financiera.php" class="dropdown-toggle active" data-toggle=""> 
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
							<?php echo $nombre ?> <span class="bold"><?php echo ''.$apellido_pat.' '.$apellido_mat.'' ?></span>									
						</div>						
					</div> 
					<div class="iconset "></div>
						<div class="profile-pic"> 
							<img src="assets/img/profiles/avatar_small.jpg"  alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> 
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
                <div class="status">Regional:
                    <a href="#">
                        <div class="status-icon"></div><?php echo $departamento ?>
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
                <a href="index.html"> 
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
                    <span class="title">Microempresas</span> 
                    <span class="arrow "></span> 
                </a>
                <ul class="sub-menu">
                    <li > <a href="index_301.php"> Listado de MCV Vigentes</a> </li>
                    <!--<li > <a href="index_302.php"> Listado de MCV No Vigentes</a> </li>-->

                </ul>
            </li>
            <li class=""> <a href="javascript:;"> <i class="fa fa-money"></i> <span class="title">Pagos a Microempresas</span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
          				<li><a href="index_304.php">Registrar Pago a Microempresa </a></li>
                        <li><a href="index_306.php">Visualizar Montos por Mes</a></li>
          				
                </ul>
            </li>
            <li class=""> <a href="javascript:;"> <i class="fa fa-download"></i> <span class="title">Descargas</span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li><a href="index_307.php">Descargar Archivos</a></li>
                    
                    
                </ul>
            </li>            
        </ul>
        <a href="#" class="scrollup">Scroll</a>
        <div class="clearfix"></div>
        <!-- END SIDEBAR MENU --> 
	</div>
   	<div class="footer-widget">		
    	<div class="progress transparent progress-small no-radius no-margin">
            <div data-percentage="79%" class="progress-bar animate-progress-bar progress-bar-success " >
            </div>		
        </div>
        <div class="pull-right">
            <div class="details-status">
            	<span data-animation-duration="560" data-value="86" class="animate-number"></span>%
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
                            <h5>Icono:  <img src="assets/img/ninguno.png"  alt="" data-src="assets/img/ninguno.png" data-src-retina="assets/img/ninguno.png" width="40" height="40"></h5>
                        </div>
                        <div class="message-wrapper">
                            <div class="heading">
                                No se genero certificado de pago.
                            </div>
                            <div >
                                El icono representa que no se generó ningun certificado de pago en el mes.
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
                            <h5>Icono:  <img src="assets/img/generado.png"  alt="" data-src="assets/img/generado.png" data-src-retina="assets/img/generado.png" width="40" height="40"></h5>
                        </div>
                        <div class="message-wrapper">
                            <div class="heading">
                                Certificado generado.
                            </div>
                            <div >
                                El icono representa que se ha generado el certificado por parte de la Supervisión y aprobado por el IRT del tramo, se esta en espera la cancelación del monto.<br>
                                Puede hacer un clic encima del icono correspondiente al mes, le aperecera una ventana flotante donde podrá registrar el monto de pago.<br>
                                Una vez que termine Guarde, puede presionar la tecla F5 para que se actualice la tabla.<br>
                                Se recomienda que no presione la tecla F5 hasta que termine de registrar los pagos de las microempresas para evaitar el cargado de pagina. 
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
                            <h5>Icono:  <img src="assets/img/pagado.png"  alt="" data-src="assets/img/pagado.png" data-src-retina="assets/img/pagado.png" width="40" height="40"></h5>
                        </div>
                        <div class="message-wrapper">
                            <div class="heading">
                                Pagado por la Regional:
                            </div>
                            <div >
                                El icono representa que la Gerencia Regional procedio a la cancelación del certificado de pago.
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
                    <h3>Microempresas <span class="semi-bold">Pagos</span></h3>
                </div>
                <div class="row-fluid">       		
                    <div class="span12">
                        <div class="grid simple ">
                            <div class="grid-title">
                                <h4><span class="semi-bold">PAGOS REGISTRADOS POR EL CONTADOR</span></h4>
                                <div class="tools"> 
                                    <a href="javascript:;" class="collapse"></a> 
                                    <a href="#grid-config" data-toggle="modal" class="config"></a> 
                                    <a href="javascript:;" class="reload"></a> 
                                    <a href="javascript:;" class="remove"></a> 
                                </div>
                            </div>
                            <div class="grid-body ">   
    <!------------------------------------------------------------------------------------------------------------------------>  
    <div id="scrollbar" style="height:900px; overflow:scroll;" align="left">                              
                                
                                <!--<div  style="height:730px; width:600; overflow:scroll;"">
                                <div style="height:700px;overflow:scroll;">-->
                                    <table width="103%" class="table table-hover table-condensed table-striped tab-pane " id="example" >
                                        <thead>
                                            <tr>
                                                <th width="5%"><h6 align="center" style="color:#666"><b>Tipo de equipo</b></h6></th>
                                                <th width="25%"><h6 align="center" style="color:#666"><b>Descripcion de equipo</b></h6></th>
                                                <th width="17%"><h6 align="center" style="color:#666"><b>Nombre</b></h6></th>
                                                

                                            </tr>                 
                                        </thead>
                                        <tbody >
                                            <?php
                                                $sql="SELECT *
                                                FROM
                                                equipos
												
                                                ";
                                                    $res=mysqli_query($conexion,$sql);                                    
                                                while ($dato=mysqli_fetch_array($res))
                                                {
                                                ?>
                                                
                                            <tr>
                                              <td><h6><?php echo $dato["tipoequipo"] ?></h6></td>
                                              
                                              <td><h6><?php echo $dato["descripcionequipo"] ?></h6></td>
                                              
                                              <td><h6><?php echo $dato["codigopersona"] ?></h6></td>                             
                                              
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
                                        <button class="btn btn-default" type="button"onClick="location='menu_administracion_financiera.php'">Salir</button>
                                        </div>
                                    </div>
                                    

                                    
                                    
                                    
                                    
                                <!--</div>-->
                                 
</div>                                                 
<!------------------------------------------------------------------------------------------------------------------------>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="admin-bar" id="quick-access" style="display:">
                    <div class="admin-bar-inner">
                        <div class="form-horizontal">
                            <select id="val1" class="select2-wrapper">
                                <option value="Gecko">Gecko</option>
                                <option value="Webkit">Webkit</option>
                                <option value="KHTML">KHTML</option>
                                <option value="Tasman">Tasman</option>
                            </select>
                            <select id="val2" class="select2-wrapper">
                                <option value="Internet Explorer 10">Internet Explorer 10</option>
                                <option value="Firefox 4.0">Firefox 4.0</option>
                                <option value="Chrome">Chrome</option>
                            </select>
                        </div>
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

<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script> <!---------carga pagina---------------------->
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