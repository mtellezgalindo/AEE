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
	<link rel="stylesheet" type="text/css" href="<?php site_info('css-directory'); ?>/others/all_plugins_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php site_info('css-file'); ?>">
	<!--[if lt IE 10]>
	<style type="text/css">
	.libro-titulo {
		font-weight: bold;
	}
	</style>
	<![endif]-->
	<!--[if lt IE 9]><script type="text/javascript" src="<?php site_info('js-directory'); ?>/libs/html5.js"></script><![endif]-->
	<?php altus_head(); ?>
</head>
<body>
<!--[if lt IE 9]>
<p class="chromeframe" style="">Usas un navegador antiguo. Por favor <strong><a href="http://browsehappy.com/" target="_blank">actualiza tu navegador</a></strong> o activa <strong><a href="http://www.google.com/chromeframe/?redirect=true">Google Chrome Frame</a></strong> para mejorar tu experiencia en este sitio.</p>
<![endif]-->
<div id="black-bar-header"></div>
<div id="main-container" class="container">
	<header id="header" class="fClear clearfix">
		<h1 id="site-name"><?php site_info('name'); ?></h1>
		<a id="home-logo" href="<?php site_info('home-url'); ?>"></a>
		<div id="header-social-icons" class="social-icons">
			<a class="social-icon icon-twitter" href="<?php site_info('twitter'); ?>" target="_blank" ></a>
			<a class="social-icon icon-facebook" href="<?php site_info('facebook'); ?>" target="_blank" ></a>
			<a class="social-icon icon-youtube" href="<?php site_info('youtube'); ?>" target="_blank" ></a>
		</div>
		<nav class="navigation">
			<ul class="menu clearfix">
				<li class="menu-item"><a href="?p=quienes-somos">Nosotros</a>
					<ul class="submenu">
						<li class="menu-item"><a href="?p=quienes-somos"  >Quiénes somos</a></li>
						<li class="menu-item"><a href="?p=mision-vision"  >Misión y visión</a></li>
						<li class="menu-item"><a href="?p=valores"  >Valores</a></li>
						<li class="menu-item"><a href="?p=historia-aee"  >Historia de la AEE</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="?p=servicios"  >Servicios</a>
					<ul class="submenu">
						<li class="menu-item"><a href="?p=infraestructura"  >Infraestructura</a></li>
						<li class="menu-item"><a href="?p=videos"  >Videos</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="?p=periodicos"  >Periódicos</a>
					<ul class="submenu">
						<li class="menu-item"><a href="?p=periodico-el-siglo-de-torreon"  >El Siglo de Torreón</a></li>
						<li class="menu-item"><a href="?p=periodico-diario-de-yucatan"  >Diario de Yucatán</a></li>
						<li class="menu-item"><a href="?p=periodico-el-imparcial"  >El Imparcial</a></li>
						<li class="menu-item"><a href="?p=periodico-la-cronica"  >La Crónica</a></li>
						<li class="menu-item"><a href="?p=periodico-el-siglo-de-durango"  >El Siglo de Durango</a></li>
						<li class="menu-item"><a href="?p=periodico-la-frontera"  >La Frontera</a></li>
						<li class="menu-item"><a href="?p=periodico-la-i"  >La I</a></li>
						<li class="menu-item"><a href="?p=periodico-al-chile"  >Al Chile</a></li>
						<li class="menu-item"><a href="?p=en-internet"  >Internet</a></li>
						<li class="menu-item"><a href="?p=en-vallas"  >Vallas</a></li>
						<li class="menu-item"><a href="?p=en-publicidad-movil"  >Publicidad Móvil</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="?p=media-kit-2012"  >Media Kit 2012</a>
					<ul class="submenu">
						<li class="menu-item"><a href="?p=media-kit-2012-el-siglo-de-torreon"  >El Siglo de Torreón</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012-diario-de-yucatan"  >Diario de Yucatán</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012-el-imparcial"  >El Imparcial</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012-la-cronica"  >La Crónica</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012-el-siglo-de-durango"  >El Siglo de Durango</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012-la-frontera"  >La Frontera</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012-la-i"  >La I</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012-al-chile"  >Al Chile</a></li>
						<li class="menu-item"><a href="?p=media-kit-2012-internet"  >Suplementos y revistas</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="?p=clientes"  >Clientes</a></li>
				<li class="menu-item"><a href="?p=directorio"  >Directorio</a></li>
				<li class="menu-item"><a href="?p=contacto"  >Contacto</a></li>
			</ul>
		</nav>
		<?php get_widget('slider'); ?>
	</header>
	<!-- /#header -->