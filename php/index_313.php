<?php
session_start();

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

$res=mysqli_query($conexion,"select *
					   from usuario
					   where codigopersona='$cod'")or die("error: ".mysql_error());

while ($dato=mysqli_fetch_array($res))
{
	$nickname	= $dato['nickname'];
	$password 	= $dato['password'];
}




$codigoequipo = $_GET['codigoequipo'];





?>
<?php
include("coneccion_bd.php");
  $sql="SELECT * FROM tipopiezas ORDER BY tipopieza ASC";
  $result=mysqli_query($conexion,$sql);  
  $options2="";
  
  while ($row=mysqli_fetch_array($result)) 
  {  
  	$id		= $row["idpieza"];
  	$name	= $row["tipopieza"];
  	$options2.='<option value='.$name.'>'.$name.'</option>';
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
  <link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>  
    <!-- BEGIN CSS TEMPLATE -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
    
<script type="text/javascript">
function popup(url,ancho,alto) 
{
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "index_333.php",'width='+ancho+',height='+alto+',menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left='+posicion_x+',top='+posicion_y+'');
}
</script>    
    
 <script type="text/javascript">
function popup2(url,ancho,alto) 
{
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "index_334.php",'width='+ancho+',height='+alto+',menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left='+posicion_x+',top='+posicion_y+'');
}
</script>   
    
    
    <!-- END CSS TEMPLATE -->
	<style type="text/css">
    <!--
    body {
        background-color: #e5e9ec;
    }
    -->
    </style></head>
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
							<?php
							echo utf8_encode( ucwords ($nombrepersona ." ".$apellidopaterno." ".$apellidomaterno));  
							?>						
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
                        
                    </div>
                    <div class="message-wrapper">
                        <div class="heading">
                            Cambio de contraseña:
                        </div>
                        <div >
                            Puede cambiar la contraseña cada cierto tiempo, una vez que guarde la nueva contraseña cuando ingrese nuevamente al sistema puede utilizar la nueva contraseña.
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
            </ul>-->
 
            <div class="row">
                <div class="">
                    <div class="grid simple">
                        <div class="grid-title no-border">
                            <h4> Registrar Piezas
                                <!--<span class="semi-bold">MODIFICAR CONTRASEÑA</span>-->
                            </h4>
                            <div class="tools"> 
                                <a href="javascript:;" class="collapse"></a> 
                                <a href="#grid-config" data-toggle="modal" class="config"></a> 
                                <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> 
                            </div>
                        </div>
                        <div class="grid-body no-border">
                            <form action="guardar_pieza.php?codigoequipo=<?php echo $codigoequipo ?>" method="post" id="form_traditional_validation">
                              
                                 <div class="form-group">
                                    <label class="form-label">Tipo de Equipo:</label>
                                    <span class="help"></span>
                                    <div class="input-with-icon  right">                                       
                                        <i class=""></i>
											<select name="tipo" id="tipo" required="" class="form-control">
                                    			<option value="">Seleccione <?php echo $options2?>
                                  			</select>
                                                                 
                                    </div>
                                </div> 
                                
                                <div class="form-group">
                                    <label class="form-label">Descripción de Pieza:</label>
                                    <span class="help"></span>
                                    <div class="input-with-icon  right">                                       
                                        <i class=""></i>
                                       <label>
                                          <textarea name="descripcion" id="descripcion" cols="45" rows="2" class="form-control" required=""></textarea>
                                    </label>
                                                                 
                                    </div>
                                </div>



                                <div class="form-actions">  
                                    <div class="pull-right">
                                         <button type="submit" class="btn btn-success btn-cons"><i class="icon-ok"></i>Guardar</button>
                                        <button type="button" class="btn btn-success btn-cons" onClick="location='index_314.php?codigoequipo=<?php echo $codigoequipo ?>'"><i class="icon-ok"></i>Siguiente</button>
                                        <button type="button" class="btn btn-white btn-cons"onClick="window.close()">Salir</button>
                                    </div>
                                </div>
                            </form>
<!------------------------------------------------------------------------------------------------------------------------------->                            
                            <br>
                            <br>
    <!------------------------------------------------------------------------------------------------------------------------>                                
                                <form class="cmxform form-horizontal " id="" method="post" action="guardar_tramo_de_contrato.php">
                                
                               
                                   <!-- <table width="103%" class="table table-hover table-condensed table-striped tab-pane" id="example">-->
                                   <table class="table no-more-tables">
                                        <thead>
                                            <tr>
                                            	<th width="10%"><h6 align="center"><b>Tipode de Pieza</b></h6></th>
                                            	<th width="10%"><h6 align="center"><b>Descripción de Pieza</b></h6></th>
                                                <th width="3%"><h6 align="center"><b>Dar de Baja</b></h6></th>
                                                <?php /*<th width="3%"><h6 align="center"><b>Transferir</b></h6></th> */?>
                                                
                                               
                                                
                                                     
                                               
                                            </tr>                 
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql="SELECT *
												FROM
												piezas
												
												WHERE
												codigoequipo =  '$codigoequipo'
												
                                                ";
                                                    $res=mysqli_query($conexion,$sql);                                    
                                                while ($dato=mysqli_fetch_array($res))
                                                {
                                                ?>
                                                
                                            <tr>
                                            	<td><?php echo utf8_encode($dato["tipopiesa"]) ?></td> 
                                            	<td><?php echo utf8_encode($dato["descripcionpiesa"]) ?></td> 
                                                
                                             	<td><div align="center"><a href="javascript:popup('index_333.php?codigopiesa=<?php echo $dato["codigopiesa"] ?>',700,400)"><img border="0" src="assets/img/baja.png"onMouseOver="this.src='assets/img/baja.png';" onMouseOut="this.src='assets/img/baja.png';"width="40" height="40" ></a></div></td> 
                                               <?php /* <td><div align="center"><a href="javascript:popup2('index_334.php?codigoequipo=<?php echo $dato["codigoequipo"] ?>',800,500)"><img border="0" src="assets/img/asignar.png"onMouseOver="this.src='assets/img/asignar.png';" onMouseOut="this.src='assets/img/asignar.png';"width="40" height="40" ></a></div></td> */ ?> 
                                             
                                             
                                            </tr>
                                              <?php 
                                                } 
                                                ?>
                                        </tbody>
                                    </table>

                                <!--</div>-->
                                </form>                    
    <!------------------------------------------------------------------------------------------------------------------------>  
                            
                            
                            
<!------------------------------------------------------------------------------------------------------------------------------->                            
                            
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
 
 
<script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-datatable/extra/js/TableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/datatables.js" type="text/javascript"></script> 
    
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