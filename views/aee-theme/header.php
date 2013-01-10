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
		<h1 id="site-name"><?php site_info('name'); ?></h1>
		<a id="home-logo" href="<?php site_info('home-url'); ?>"></a>
		<div id="header-social-icons" class="social-icons">
			<a class="social-icon icon-twitter" href="<?php site_info('twitter'); ?>" target="_blank" rel="bookmark"></a>
			<a class="social-icon icon-facebook" href="<?php site_info('facebook'); ?>" target="_blank" rel="bookmark"></a>
			<a class="social-icon icon-youtube" href="<?php site_info('youtube'); ?>" target="_blank" rel="bookmark"></a>
		</div>
		<nav class="navigation">
			<ul class="menu clearfix">
				<li class="menu-item"><a href="?p=nosotros" rel="bookmark" >Nosotros</a>
					<ul class="submenu">
						<li class="menu-item"><a href="?p=nosotros&s=quienes-somos" rel="bookmark" >Quiénes somos</a></li>
						<li class="menu-item"><a href="?p=nosotros&s=mision-vision" rel="bookmark" >Misión y visión</a></li>
						<li class="menu-item"><a href="?p=nosotros&s=valores" rel="bookmark" >Valores</a></li>
						<li class="menu-item"><a href="?p=nosotros&s=historia-aee" rel="bookmark" >Historia de la AEE</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="?p=servicios" rel="bookmark" >Servicios</a>
					<ul class="submenu">
						<li class="menu-item"><a href="?p=servicios&s=infraestructura" rel="bookmark" >Infraestructura</a></li>
						<li class="menu-item"><a href="?p=servicios&s=videos" rel="bookmark" >Videos</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="?p=periodicos" rel="bookmark" >Periódicos</a>
					<ul class="submenu">
						<li class="menu-item"><a href="?p=periodicos&s=el-siglo-de-torreon" rel="bookmark" >El Siglo de Torreón</a></li>
						<li class="menu-item"><a href="?p=periodicos&s=diario-de-yucatan" rel="bookmark" >Diario de Yucatán</a></li>
						<li class="menu-item"><a href="?p=periodicos&s=el-imparcial" rel="bookmark" >El Imparcial</a></li>
						<li class="menu-item"><a href="?p=periodicos&s=la-cronica" rel="bookmark" >La Crónica</a></li>
						<li class="menu-item"><a href="?p=periodicos&s=el-siglo-de-durango" rel="bookmark" >El Siglo de Durango</a></li>
						<li class="menu-item"><a href="?p=periodicos&s=la-frontera" rel="bookmark" >La Frontera</a></li>
						<li class="menu-item"><a href="?p=periodicos&s=la-i" rel="bookmark" >La I</a></li>
						<li class="menu-item"><a href="?p=periodicos&s=al-chile" rel="bookmark" >Al Chile</a></li>
						<li class="menu-item"><a href="?p=periodicos&s=internet" rel="bookmark" >Internet</a></li>
						<li class="menu-item"><a href="?p=periodicos&s=vallas" rel="bookmark" >Vallas</a></li>
						<li class="menu-item"><a href="?p=periodicos&s=publicidad-movil" rel="bookmark" >Publicidad Móvil</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="?p=media-kit-2012" rel="bookmark" >Media Kit 2012</a>
					<ul class="submenu">
						<li class="menu-item"><a href="?p=media-kit-2012&s=el-siglo-de-torreon" rel="bookmark" >El Siglo de Torreón</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012&s=diario-de-yucatan" rel="bookmark" >Diario de Yucatán</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012&s=el-imparcial" rel="bookmark" >El Imparcial</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012&s=la-cronica" rel="bookmark" >La Crónica</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012&s=el-siglo-de-durango" rel="bookmark" >El Siglo de Durango</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012&s=la-frontera" rel="bookmark" >La Frontera</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012&s=la-i" rel="bookmark" >La I</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012&s=al-chile" rel="bookmark" >Al Chile</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012&s=internet" rel="bookmark" >Suplementos y revistas</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="?p=clientes" rel="bookmark" >Clientes</a></li>
				<li class="menu-item"><a href="?p=directorio" rel="bookmark" >Directorio</a></li>
				<li class="menu-item"><a href="?p=contacto" rel="bookmark" >Contacto</a></li>
			</ul>
		</nav>
		<?php get_widget('slider'); ?>
	</header>
	<!-- /#header -->