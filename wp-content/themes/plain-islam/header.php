<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo(template_url);?>/img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo(template_url);?>/img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo(template_url);?>/img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo(template_url);?>/img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo(template_url);?>/img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo(template_url);?>/img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo(template_url);?>/img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo(template_url);?>/img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo(template_url);?>/img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo(template_url);?>/img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo(template_url);?>/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo(template_url);?>/img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo(template_url);?>/img/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo(template_url);?>/img/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php bloginfo(template_url);?>/img/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

        <script src="//use.typekit.net/vcf6kco.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

		<!--[if gte IE 9]>
		  <style type="text/css">
		    .gradient {
		       filter: none;
		    }
		  </style>
		<![endif]-->

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header class="header clear" role="banner">

			<div class="wrapper">

				<!-- logo -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/islam-logo.jpg" alt="Logo" class="logo-img">
					</a>
				</div>
				<!-- /logo -->
				
				<!-- <a href="">
					<div class="header__search">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 57.4 58.6" enable-background="new 0 0 57.4 58.6" xml:space="preserve"><g><path fill="none" stroke="#231F20" stroke-width="3" stroke-miterlimit="10" d="M46.4,24c0,12.4-10.1,22.5-22.5,22.5C11.6,46.4,1.5,36.4,1.5,24C1.5,11.6,11.6,1.5,24,1.5C36.4,1.5,46.4,11.6,46.4,24z"/><line fill="none" stroke="#231F20" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" x1="39.7" y1="40" x2="55.9" y2="57.1"/></g></svg>
					</div>
				</a> -->

				  <!-- Burger button -->
			      <button class="burger-menu">
			        <div id="nav-icon3">
			          <span></span>
			          <span></span>
			          <span></span>
			          <span></span>
			        </div>
			      </button>
				
				<?php if(is_front_page() ) { ?>
				<!-- nav -->
				<nav class="nav" role="navigation">
					<ul>
						<li><a href="<?php bloginfo(url);?>/about-us" class="nav-about-us">About us</a></li>
						<li><a href="<?php bloginfo(url);?>/bite-size" class="nav-bite-size">Bite-size</a></li>
						<li><a href="#in-depth" id="in-depth-nav">In-depth</a></li>
						<li><a href="<?php bloginfo(url);?>/glossary" class="nav-glossary">Glossary</a></li>
						<li><a href="#" id="contact-button">Contact</a></li>
					</ul>

				</nav><?php

				}else{ ?>
					<nav class="nav" role="navigation">
					<ul>
						<li><a href="<?php bloginfo(url);?>/about-us" class="nav-about-us">About us</a></li>
						<li><a href="<?php bloginfo(url);?>/bite-size" class="nav-bite-size">Bite-size</a></li>
						<li><a href="<?php bloginfo(url);?>/#in-depth">In-depth</a></li>
						<li><a href="<?php bloginfo(url);?>/glossary" class="nav-glossary">Glossary</a></li>
						<li><a href="#" id="contact-button">Contact</a></li>
					</ul>

				</nav>


				<?php } ?>	


				<!-- /nav -->
				
			</div><!-- wrapper -->

		</header>
		<!-- /header -->
