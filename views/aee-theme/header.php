<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php site_info('title'); ?></title>
	<meta name="keywords" content="<?php site_info('keywords'); ?>">
	<meta name="description" content="<?php site_info('description'); ?>">
	<meta name="author" content="<?php site_info('author'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="author" type="text/plain" href="humans.txt">
	<link rel="stylesheet" type="text/css" href="<?php site_info('css-directory'); ?>/libs/normalize_v2.0.1.css">
	<link rel="stylesheet" type="text/css" href="<?php site_info('css-file'); ?>">
	<!--[if lt IE 9]><script type="text/javascript" src="<?php site_info('js-directory'); ?>/libs/html5.js"></script><![endif]-->
	
</head>
<body>
<div id="black-bar-header"></div>
<div id="main-container" class="container">
	<!--[if lt IE 8]>
	<p class="chromeframe">Usas un navegador <strong>antiguo</strong>. Por favor <a href="http://browsehappy.com/" target="_blank">actualiza tu navegador</a> o <a href="http://www.google.com/chromeframe/?redirect=true">activa Google Chrome Frame</a> para mejorar tu experiencia en este sitio.</p>
	<![endif]-->
	<header id="header" class="fClear clearfix">
		<?php if(isset($thanksForYouMessage)) echo $thanksForYouMessage; ?>
		<h1 id="site-name"><?php site_info('name'); ?></h1>
		<a id="home-logo"></a>
		<div id="social-icons" class="">
			<a class="social-icon icon-twitter" href="<?php site_info('twitter'); ?>" target="_blank" rel="bookmark"></a>
			<a class="social-icon icon-facebook" href="<?php site_info('facebook'); ?>" target="_blank" rel="bookmark"></a>
			<a class="social-icon icon-youtube" href="<?php site_info('youtube'); ?>" target="_blank" rel="bookmark"></a>
		</div>
		<nav id="navigation">
			<ul class="menu clearfix">
				<li class="menu-item">
					<a href="#" rel="bookmark" target="">Nosotros</a>
					<!-- <ul class="submenu">
						<li class="menu-item"><a href="#" rel="bookmark" target="">Nosotros</a></li>
						<li class="menu-item"><a href="#" rel="bookmark" target="">Misión y visión</a></li>
						<li class="menu-item"><a href="#" rel="bookmark" target="">Valores</a></li>
						<li class="menu-item"><a href="#" rel="bookmark" target="">Historia de AEE</a></li>
					</ul> -->
				</li>
				<li class="menu-item"><a href="#" rel="bookmark" target="">Servicios</a></li>
				<li class="menu-item"><a href="#" rel="bookmark" target="">Preiódicos</a></li>
				<li class="menu-item"><a href="#" rel="bookmark" target="">Media Kit 2012</a></li>
				<li class="menu-item"><a href="#" rel="bookmark" target="">Clientes</a></li>
				<li class="menu-item"><a href="#" rel="bookmark" target="">Directorio</a></li>
				<li class="menu-item"><a href="#" rel="bookmark" target="">Contacto</a></li>
			</ul>
		</nav>
	</header>
	<!-- /#header -->