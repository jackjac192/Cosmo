<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




<!DOCTYPE html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/mdb.min.css">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/imprimir.css" media="print" />



        
    </head>
    <body class="fixed-sn graphite-skin">


    	 
    <header>

    	
    	<ul id="slide-out" class="side-nav fixed custom-scrollbar ps-container ps-theme-default" data-ps-id="da7537f4-3f77-abd2-12b0-caf42b7e2964" style="transform: translateX(-100%);">
    	 <!-- Sidebar navigation 
				<!-- Logo
				<li>
	                <div class="">
	                    <img src="" class="img-fluid rounded-circle">
	                    <div class="rgba-stylish-strong">
	                        <p class="user white-text"> <?=$username; ?> <br> <?=$correo; ?>
	                        </p>
	                    </div>
	                </div>
	            </li>
	            <!--/. Logo -->


	            <!-- Side navigation links 
	            <li>
	                <ul class="collapsible collapsible-accordion">
	                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-diamond"></i> Reportes<i class="fa fa-angle-down rotate-icon"></i></a>
	                        <div class="collapsible-body">
	                            <ul>
	                            	<li><a href="<?php echo base_url(); ?>Reportes/crear" class="waves-effect">Crear un nuevo reporte</a>
	                            	<li><a href=""> Listar Reportes</a></li>
	                                
	                                </li>
	                                <li><a href="#" class="waves-effect">Buscar por..</a>
	                                </li>
	                                
	                            </ul>
	                        </div>
	                    </li>
	                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-home"></i> Planillas<i class="fa fa-angle-down rotate-icon"></i></a>
	                        <div class="collapsible-body">
	                            <ul>
	                                
	                                <li><a href="#" class="waves-effect">Listar todas las planillas</a>
	                                </li>
	                                <li><a href="#" class="waves-effect">Buscar por..</a></li>
	                            </ul>
	                        </div>
	                    </li>
	                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-cloud"></i> Conductor<i class="fa fa-angle-down rotate-icon"></i></a>
	                        <div class="collapsible-body">
	                            <ul>
	                                <li><a href="#" class="waves-effect">Crear un nuevo conductor</a>
	                                </li>
	                                <li><a href="#" class="waves-effect">Listar todos</a>
	                                </li>
	                                <li><a href="#" class="waves-effect">Buscar por..</a>
	                                </li>
	                            </ul>
	                        </div>
	                    </li>
	                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-desktop"></i> Otra función<i class="fa fa-angle-down rotate-icon"></i></a>
	                        <div class="collapsible-body">
	                            <ul>
	                                <li><a href="#" class="waves-effect">Items...</a>
	                                </li>
	                                <li><a href="#" class="waves-effect">Items...</a>
	                                </li>
	                            </ul>
	                        </div>
	                    </li>	                    
	                    
	                </ul>
	            </li>
	            


		
             <!--Navbar-->
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
        

       

        <div class="containerr">
        
	        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

	        	<?php
					if (isset($this->session->userdata['logged_in'])) {
						

				?>
						<div class="float-xs-left">
			                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
			            </div>

				<?php } ?>
	            <!-- SideNav slide-out button -->
	            

	            <!-- Breadcrumb-->
	            <div class="breadcrumb-dn">
	                <p>Multiservicios Cosmos     </p>
	            </div>


	            <ul class="nav navbar-nav float-xs-left">


	            	 <?php
						if (isset($this->session->userdata['logged_in'])) {
							

					?>	
							

					<?php	
					} else{

					?>
						<li class="nav-item ">
			                <a class="nav-link waves-effect waves-light" href="<?php echo base_url();?>Login/"><i class="fa fa-comments-o"></i> <span class="">Iniciar Sesión</span></a>
		                </li>
		                <li class="nav-item ">
		                    <a class="nav-link waves-effect waves-light" href="<?php echo base_url();?>Login/registrar"><i class="fa fa-user"></i> <span class="">Registrarse</span></a>
		                </li>
					<?php

					}?>

	               
	                


	                <?php
						if (isset($this->session->userdata['logged_in'])) {


					?>		 <li class="nav-item ">
			                    <a class="nav-link waves-effect waves-light" href="<?php echo base_url();?>Login/"><i class="fa fa-home" aria-hidden="true"></i><span class="">INICIO</span></a>
			                </li>
							<li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle waves-effect waves-light" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-file-text" aria-hidden="true"></i> REPORTES</a>
			                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
			                        <a class="dropdown-item waves-effect waves-light" href="<?php echo base_url();?>reportes/crear">CREAR NUEVO REPORTE</a>
			                        <a class="dropdown-item waves-effect waves-light" href="<?php echo base_url();?>planillas/">LISTAR REPORTES</a>
			                        
			                    </div>
			                </li>
			                
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle waves-effect waves-light" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user"></i>
			                    CONDUCTOR</a>
			                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
			                        <a class="dropdown-item waves-effect waves-light" href="<?php echo base_url();?>conductor/crear">REGISTRAR CONDUCTOR</a>
			                        <a class="dropdown-item waves-effect waves-light" href="<?php echo base_url();?>conductor/">LISTAR CONDUCTORES</a>
			                        
			                    </div>
			                </li>
													
			                 <li class="nav-item ">
				                <a class="nav-link waves-effect waves-light" href="<?php echo base_url();?>Login/salir"><i class="fa fa-sign-out" aria-hidden="true"></i> <span class="hidden-sm-down">SALIR SESIÓN</span></a>
			                </li>
			               

					<?php } ?>
	                
	            </ul>

	        </nav>
	        <!--/.Navbar-->

        </div>

    </header>
    <!--/Double Navigation-->
    

		
		<!--/.Navbar-->
