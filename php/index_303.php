<!DOCTYPE html>
<html>
<head>
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
							John <span class="bold">Smith</span>									
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
      				<div class="status">Regional
                    	<a href="#">
                    		<div class="status-icon"></div>La Paz
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
          				<li><a href="#">Registrar Pago a Microempresa </a></li>
                        <li><a href="#">Registrar Pago por Tramo </a></li>
          				<li><a href="#">Pagos Faltantes</a></li>
        			</ul>
      			</li>
      			<li class=""> <a href="javascript:;"> <i class="icon-custom-portlets"></i> <span class="title">Grids</span> <span class="arrow "></span> </a>
        			<ul class="sub-menu">
          				<li > <a href="grids_simple.html">Simple Grids</a> </li>
          				<li > <a href="grids_draggable.html">Draggable Grids </a> </li>
        			</ul>
     			</li>
      			<li class=""> <a href="javascript:;"> <i class="icon-custom-thumb"></i> <span class="title">Tables</span> <span class="arrow "></span> </a>
        			<ul class="sub-menu">
          				<li > <a href="tables.html"> Basic Tables </a> </li>
          				<li > <a href="datatables.html"> Data Tables </a> </li>
        			</ul>
      			</li>
      			<li class=""> <a href="javascript:;"> <i class="icon-custom-map"></i> <span class="title">Maps</span> <span class="arrow "></span> </a>
        			<ul class="sub-menu">
          				<li > <a href="google_map.html"> Google Maps </a> </li>
          				<li > <a href="vector_map.html"> Vector Maps </a> </li>
       				 </ul>
      			</li>
      			<li class=""> 
                	<a href="charts.html"> 
                    	<i class="icon-custom-chart"></i> 
                        <span class="title">Charts</span> 
                    </a> 
                </li>    
                <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Extra</span> <span class="arrow "></span> </a>
                    <ul class="sub-menu">
                        <li > <a href="user-profile.html"> User Profile </a> </li>
                        <li > <a href="time_line.html"> Time line </a> </li>
                        <li > <a href="support_ticket.html"> Support Ticket </a> </li>
                        <li > <a href="gallery.html"> Gallery</a> </li>
                        <li class=""><a href="calender.html"> Calendar</a> </li>
                        <li > <a href="search_results.html"> Search Results </a> </li>
                        <li > <a href="invoice.html"> Invoice </a> </li>
                        <li > <a href="404.html"> 404 Page </a> </li>
                        <li > <a href="500.html"> 500 Page </a> </li>
                        <li > <a href="blank_template.html"> Blank Page </a> </li>
                        <li > <a href="login.html"> Login </a> </li>
                        <li > <a href="login_v2.html">Login v2</a> </li>
                        <li > <a href="lockscreen.html"> Lockscreen </a> </li>
                    </ul>
                </li>
                <li class=""> 
                    <a href="javascript:;"> 
                        <i class="fa fa-folder-open"></i> 
                        <span class="title">Menu Levels</span> 
                        <span class="arrow "></span> 
                    </a>
                    <ul class="sub-menu">
                        <li > <a href="javascript:;"> Level 1 </a></li>
                        <li > <a href="javascript:;">  <span class="title">Level 2</span> <span class="arrow "></span> </a>
                            <ul class="sub-menu">
                                <li > <a href="javascript:;"> Sub Menu </a> </li>
                                <li > <a href="ujavascript:;"> Sub Menu </a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="hidden-lg hidden-md hidden-xs" id="more-widgets" > <a href="javascript:;"> <i class="fa fa-plus"></i></a> 
                    <ul class="sub-menu">
                        <li class="side-bar-widgets">
                            <p class="menu-title">FOLDER 
                                <span class="pull-right">
                                    <a href="#" class="create-folder">
                                        <i class="icon-plus"></i>
                                     </a>
                                </span>
                            </p>
                            <ul class="folders" >
                                <li class="folder-input" style="display:none">
                                    <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name">
                                </li>
                            </ul>
                            <p class="menu-title">PROJECTS </p>
                            <div class="status-widget">
                                <div class="status-widget-wrapper">
                                    <div class="title">Freelancer
                                        <a href="#" class="remove-widget">
                                            <i class="icon-custom-cross"></i>
                                        </a>
                                    </div>
                                    <p>Redesign home page</p>
                                </div>
                            </div>
                            <div class="status-widget">
                                <div class="status-widget-wrapper">
                                    <div class="title">envato
                                        <a href="#" class="remove-widget">
                                            <i class="icon-custom-cross"></i>
                                        </a>
                                    </div>
                                    <p>Statistical report</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>    
            </ul>
			<a href="#" class="scrollup">Scroll</a>
			<div class="clearfix"></div>
    			<!-- END SIDEBAR MENU --> 
 		</div>
   		<div class="footer-widget">		
			<div class="progress transparent progress-small no-radius no-margin">
				<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" >
                </div>		
			</div>
			<div class="pull-right">
				<div class="details-status">
					<span data-animation-duration="560" data-value="86" class="animate-number"></span>%
				</div>	
				<a href="lockscreen.html">
                	<i class="fa fa-power-off"></i>
                </a>
            </div>
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
      			<div class="modal-body"> Widget settings form goes here 
                </div>
    		</div>
    		<div class="clearfix"></div>
    		<div class="content">  
				<div class="page-title">	
					<h3>Página Principal</h3>		
				</div>
    		</div>
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