<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title> 
	<link href="<?php echo get_template_directory_uri(); ?>/img/cart.png" rel="icon" /> 
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet"> 
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" />  
	<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" />  
	<link href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.min.css" rel="stylesheet" />   
<?php wp_head(); ?>
</head>

<body >
<!-- Begin page -->
<div class="container">
	<div id="site">
		<!-- Begin header -->
		<header id="header">
			 <div class="pav-mainnav">
			 	<div class="container">
			 		<div class="menu_bar">
			 			<span>Menu</span>
					<!--	<a href="#" class="bt-menu"><i class="fa fa-bars" aria-hidden="true"></i>Menú</a>-->
						<button id="ocultar-menu" type="button" class="navbar-toggle">
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				        </button>
					</div>
			 		<div class="mainnav-warp">
			 			<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
								 <div id="logo-site">
	                                <a href="<?php echo home_url(); ?>">
	                                	<img src="<?php echo get_template_directory_uri(); ?>/img/logo-pagina.png">
	                                </a>
	                            </div>
							</div>
			 				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">			 					
			 					<nav>
			 						<ul class="nav nav-pills"> 
				 						<li role="presentation"><a href="<?php echo home_url(); ?>">Home</a></li>
										<li role="presentation"><a href="<?php echo esc_url( get_permalink( get_page_by_title('desayuno'))); ?>">desayuno</a></li>
										<li role="presentation"><a href="#">almuerzo</a></li>
										<li role="presentation"><a href="#">cena</a></li>
										<li role="presentation"><a href="<?php echo esc_url( get_permalink( get_page_by_title('bebidas'))); ?>">bebidas</a></li>
									    <li role="presentation"><a href="#">Entradas & Postres</a></li>
									</ul>
			 					</nav>
			 				</div> 
			 			</div>			 			
			 		</div>
			 	</div>
			 </div>	 
		</header>
		<!-- End Header -->
