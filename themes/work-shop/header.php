<!DOCTYPE html>

<html class="menu-closed">

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title> 
	   <?php
	   	     if (is_category()) {
	         	single_cat_title(); echo ' - '; 
	         }
	         elseif (is_archive()){
	         	wp_title(''); echo ' - ';  
	         }
	      elseif (is_search()) {
	         	echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
	      elseif (!(is_404()) && (is_single()) || (is_page())) {
	         	wp_title(''); echo ' - '; 
	         }
	      elseif (is_404()) {
	         	echo 'Not Found - ';
	         }
	      if (is_home()) {
	         bloginfo('name'); echo ' - '; bloginfo('description'); }
	      else {
	          bloginfo('name'); 
	          }
	   ?>
	</title>

	<!-- Twitter Card data -->
	<meta name="twitter:card" value="<?php bloginfo('description'); ?>">
	
	<!-- Open Graph data -->
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="<?php bloginfo('url'); ?>" />
	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/_/img/logo.png" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
				   
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="google-site-verification" content="">
	<meta name="author" content="Greg Nemes and Nic Schumann of Work-Shop">
		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
			
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_directory'); ?>/_/js/html5shiv.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/_/js/respond.js"></script>
    <![endif]-->		
        	
	<?php wp_head(); ?>
				
</head>

<body <?php body_class('before'); ?>>

<?php get_template_part('landing'); ?>

<?php get_template_part('ie'); ?>

<div id="state" class="loading">
	
		<header id="header" class="closed">
			<div class="container">		
			
				<a id="logo" class="logo" href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/_/img/logo.png" alt="logo">					
				</a>		

				<nav class="right " id="nav">
					<ul class="main-menu">
						<li id="home-link"><a href="<?php bloginfo('url'); ?>" class="hidden" >Home</a></li>
						<li><a href="<?php bloginfo('url'); ?>/projects" id="work-link" class="">Projects</a></li>	
						<li class="hidden"><a href="<?php bloginfo('url'); ?>/process" class="">Process</a></li>							
						<li><a href="<?php bloginfo('url'); ?>/about" class="">About</a></li>
						<li><a href="#menu" class="menu-toggle">Menu</a></li>
						
					</ul>	
				</nav>	
				
				<a id="carrot" href="#" class="menu-toggle closed">
					<img src="<?php bloginfo('template_directory'); ?>/_/img/toggle.png" alt="navigation-toggle">
				</a>
				
				<a href="#close" class="menu-toggle display-block" id="menu-close"><span class="icon" data-icon="&#64258;"></span></a>
				
				
			</div>					
		</header>	

	<div id="headerfix"></div>
	
	<?php  get_template_part('menu','2'); ?>
	
	<?php if(is_home()): ?>

	<div id="nav-side" class="dark spy">
		<ul>
			<li><a class="jump active side" href="#home-introduction" data-toggle="tooltip" data-placement="left" title="home"></a></li>
			<li><a class="jump side" href="#home-about"  data-toggle="tooltip" data-placement="left" title="studio"></a></li>
			<li><a class="jump side" href="#home-spaces"  data-toggle="tooltip" data-placement="left" title="spaces"></a></li>		
			<li><a class="jump side" href="#home-interfaces" data-toggle="tooltip" data-placement="left" title="interfaces"></a></li>
			<li><a class="jump side" href="#home-furniture"  data-toggle="tooltip" data-placement="left" title="furniture"></a></li>
 			<li><a class="jump side" href="#home-web"  data-toggle="tooltip" data-placement="left" title="web"></a></li>		
			<li><a class="jump side" href="#home-fabrication"  data-toggle="tooltip" data-placement="left" title="fabrication"></a></li>
			<li><a class="jump side" href="#home-info" data-toggle="tooltip" data-placement="left" title="about"></a></li>	
			<!-- <li><a class="jump side" href="#home-news" data-toggle="tooltip" data-placement="left" title="news"></a></li> -->				
			<li><a class="jump side" href="#invitation" data-toggle="tooltip" data-placement="left" title="coffee"></a></li>
			<li><a class="jump side" href="#contact" data-toggle="tooltip" data-placement="left" title="contact"></a></li>		
		</ul>
		
	</div>	
	
	<?php endif; ?>
		
	<div id="content" class="">
