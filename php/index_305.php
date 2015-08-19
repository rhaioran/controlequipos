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

$cod_microempresa 	= $_GET['cod_microempresa'];
$mes_desde			= $_GET['mes_desde'];
$mes	= date("m",strtotime($mes_desde));
$mes_hasta			= $_GET['mes_hasta'];
$gestion			= $_GET['gestion'];


//******************************************************************************************************************//

$lista=mysql_query("SELECT *
FROM
micro_pagos_neos
WHERE
micro_pagos_neos.id = '$cod_microempresa' AND   
micro_pagos_neos.gestion='$gestion' AND                 
micro_pagos_neos.periodo='$mes_desde';
",$conexion);
while($dato=  mysql_fetch_array($lista))
{
	$monto_cancelado					= $dato['monto_cancelado'];
	$descuento							= $dato['descuento'];
	
	$numero_certificado 				= $dato['n_certificado'];
	$monto_certificado_pago_regional	= $dato['monto_certificado_pago_regional'];
	$multa_o_deduccion_regional			= $dato['multa_o_deduccion_regional'];
	$liquido_pagable_regional			= $dato['liquido_pagable_regional'];
	$c_31_regional						= $dato['c_31_regional'];
	$fecha_ejectivo_pago_regional		= $dato['fecha_efectivo_pago_regional'];	
}

$monto_total=$monto_cancelado+$descuento;

$liquido_pagable=round(($monto_total-$descuento),2);	

$lista=mysql_query("SELECT *
FROM
microempresa
WHERE                    
cod_microempresa = '$cod_microempresa'
;
",$conexion);
while($regi=  mysql_fetch_array($lista))
{
	$nombre_microempresa= $regi['nombre_microempresa'];
}

switch($mes)
{
	case '1':
		$mes_de_pago='ENERO';
		break;
	case '2':
		$mes_de_pago='FEBRERO';
		break;									
	case '3':
		$mes_de_pago='MARZO';
		break;
	case '4':
		$mes_de_pago='ABRIL';
		break;					
	case '5':
		$mes_de_pago='MAYO';
		break;					
	case '6':
		$mes_de_pago='JUNIO';
		break;					
	case '7':
		$mes_de_pago='JULIO';
		break;					
	case '8':
		$mes_de_pago='AGOSTO';
		break;					
	case '9':
		$mes_de_pago='SEPTIEMBRE';
		break;					
	case '10':
		$mes_de_pago='OCTUBRE';
		break;
	case '11':
		$mes_de_pago='NOVIEMBRE';
		break;							
	case '12':
		$mes_de_pago='DICIEMBRE';
		break;					


}





?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
<title>EMI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
    
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <!-- END CORE CSS FRAMEWORK -->
   
    <!-----------------------calendario----------------------->
    
    <!-------------------------------------------------------->
    <!-- BEGIN CSS TEMPLATE -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
    <!-- END CSS TEMPLATE -->
	<style type="text/css">
    <!--
    body {
        background-color: #e5e9ec;
    }
    -->
    </style>
    


    
    
    
</head>
    <!-- END HEAD -->
    
    <!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse"> 
  <!-- BEGIN TOP NAVIGATION BAR -->
	<div class="navbar-inner">
		<div class="header-seperation" > 

      		<!-- BEGIN LOGO -->	
      		<a href="#"><img src="assets/img/logo.png" class="logo" alt=""  data-src="assets/img/logo.png" data-src-retina="assets/img/logo.png" width="106" height="21"/>
            </a>
      		<!-- END LOGO --> 

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
					<div class="iconset"></div>	
						<div id="notification-list" style="display:none">
							<div style="width:300px">												
							</div>				
						</div>
						<div class="profile-pic"> 
							<img src="assets/img/profiles/avatar_small.jpg"  alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small.jpg" width="35" height="35" /> 
						</div>       			
					</div>
		 			<ul class="nav quick-section ">
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
<!---------------------------------------------------------------------------------------------------------------------------------------->
<div class="page-content condensed_a">
  <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
  <div class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true" id="grid-config">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Ayuda</h4>
        </div>
            <div class="modal-body">
                <div class="notification-messages success">
                    <!--<div class="user-profile">-->
                    <div>
                        <h5><img src="assets/img/barra.png"  alt="" data-src="assets/img/barra.png" data-src-retina="assets/img/barra.png" width="200" height="40"></h5>
                    </div>
                    <div class="message-wrapper">
                        <div class="heading">
                            Barra de color Rojo.
                        </div>
                        <div >
                            Representa que se ha cancelado el monto del certificado a la microempresa.
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
  <div class="content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!--<ul class="breadcrumb">
                <li>
                    <p>YOU ARE HERE</p>
                </li>
                <li><a href="#" class="active">Form layouts & Validations</a> </li>
            </ul>
            <div class="page-title"> 
                <i class="icon-custom-left"></i>
                <h3>Formulario - <span class="semi-bold">Modificar Contraseña</span></h3>
            </div> -->
    <div class="row">
      <div class="">
        <div class="grid simple">
          <div class="grid-title no-border">
            <?php 
						if($liquido_pagable_regional=='0')
						{
							?>
            <?php
						}
						else
						{
							?>
            <button class="btn btn-block btn-danger btn-success" type="button">PAGO REGISTRADO</button>
            <?php							
						}

						?>
            <h4> <span class="semi-bold">PAGO MES: <?php echo $mes_de_pago ?></span> </h4>
            <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
          </div>
          <div class="grid-body no-border">
            <form id="form_traditional_validation"  method="post" action="guardar_pago_regional.php?gestion=<?php echo $gestion ?>&cod_microempresa=<?php echo $cod_microempresa ?>&mes_desde=<?php echo $mes_desde ?>">
              <div class="form-group">
                <label class="form-label">Nombre de la Microempresa:</label>
                <span class="help"></span>
                <div class="input-with-icon  right"> <i class=""></i>
                  <input type="text" name="form1Amount" id="form1Amount" class="form-control" value="<?php echo $nombre_microempresa ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Numero de Certificado de Pago:</label>
                <span class="help"></span>
                <div class="input-with-icon  right"> <i class=""></i>
                  <input type="text" name="form1CardHolderName" id="form1CardHolderName" class="form-control" value="<?php echo $numero_certificado ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Monto certificado de Pago Bs.:</label>
                <span class="help"></span>
                <div class="input-with-icon  right"> <i class=""></i>
                  <input type="text" name="monto_certificado" id="monto_certificado" class="form-control" value="<?php echo $monto_total ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Multa o deducciones Bs.:</label>
                <span class="help"></span>
                <div class="input-with-icon  right"> <i class=""></i>
                  <input type="text" name="multa" id="multa" class="form-control" value="<?php echo $descuento ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Liquido Pagable Bs.:</label>
                <span class="help"></span>
                <div class="input-with-icon  right"> <i class=""></i>
                  <input type="text" name="liquido" id="liquido" class="form-control" value="<?php echo $liquido_pagable ?>" style="font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label"><b>C-31:</b></label>
                <span class="help"></span>
                <div class="input-with-icon  right"> <i class=""></i>
                  <input type="text" name="c31" id="c31" class="form-control" value="<?php echo $c_31_regional ?>">
                </div>
              </div>              
              <div class="form-group">
                <label class="form-label"><b>Fecha Efectivo de Pago:</b></label>
                <span class="help">registrar como: año-mes-dia ejemplo, 2015-01-25</span>
                <div class="input-with-icon  right"> <i class=""></i>
                  <input type="text" name="fecha" id="fecha" class="form-control" value="<?php echo $fecha_ejectivo_pago_regional ?>">
                </div>
              </div>
              
              
              
              <div class="form-actions">
                <div class="pull-right">
                  <button type="submit" class="btn btn-success btn-cons"><i class="icon-ok"></i>Guardar</button>
                  <button type="button" class="btn btn-white btn-cons"onClick="window.close()">Salir</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------------------------------------------------------------------------------------------------------->
	<!--<div class="page-container row"> -->
<div> 
  		<!-- BEGIN SIDEBAR -->
  		<!--<div class="page-sidebar mini" id="main-menu">-->
        <div>
  		<!-- BEGIN MINI-PROFILE -->
  		<!-- END MINI-PROFILE -->  
  		<!-- BEGIN MINI-WIGETS -->
   		<!-- END MINI-WIGETS -->   
   		<!-- BEGIN SIDEBAR MENU -->	
    	<!-- END SIDEBAR MENU --> 
  		</div>
  		<!-- END SIDEBAR --> 
  		<!-- BEGIN PAGE CONTAINER-->
        
        
  		<!--<div class="page-content condensed">-->
        <div >
    	<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    		<div id="portlet-config" class="modal hide">
      			<div class="modal-header">
        			<button data-dismiss="modal" class="close" type="button"></button>
        			<h3>Widget Settings</h3>
      			</div>
      			<div class="modal-body"> Widget settings form goes here 
                </div>
   		 	</div>
    		<div class="clearfix"></div>
    		<div class="content">  
				<div class="row"></div>
			</div>
  		</div>
	<!-- END CONTAINER --> 
    
    
    
    
	</div>
<!-- BEGIN CHAT --> 

<!-- END CHAT --> 
<!-- END CONTAINER --> 


<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<!--<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>-->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>-->
  <!-- END CORE JS FRAMEWORK -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script> 

<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script> 
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script> 	
    
<!-- BEGIN PAGE LEVEL JS -->
<!--<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>-->
  <!-- END PAGE LEVEL PLUGINS -->
  <!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS --> 
</body>
</html>