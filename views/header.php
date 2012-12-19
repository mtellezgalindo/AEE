<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" cosntent="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="author" type="text/plain" href="humans.txt">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize_v2.0.1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<!--[if lt IE 9]><script type="text/javascript" src="assets/js/libs/html5.js"></script><![endif]-->
</head>
<body>
<div id="black-bar-header"></div>
<div id="container" class="container">
	<!--[if lt IE 8]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
	<header id="header" class="clear">
		<h1 id="site-name"><?php site_info('name'); ?></h1>
		<a id="home-logo"></a>
		<div id="social-icons" class="">
			<a class="social-icon icon-twitter" href="<?php site_info('twitter'); ?>" target="_blank" rel="bookmark"></a>
			<a class="social-icon icon-facebook" href="<?php site_info('facebook'); ?>" target="_blank" rel="bookmark"></a>
			<a class="social-icon icon-youtube" href="<?php site_info('youtube'); ?>" target="_blank" rel="bookmark"></a>
		</div>
		<nav id="navigation" class="clear">
			<ul class="menu">
				<li class="menu-item">
					<a href="#" rel="bookmark" target="">Nosotros</a>
					<ul class="submenu">
						<li class="menu-item"><a href="#" rel="bookmark" target="">Nosotros</a></li>
						<li class="menu-item"><a href="#" rel="bookmark" target="">Misión y visión</a></li>
						<li class="menu-item"><a href="#" rel="bookmark" target="">Valores</a></li>
						<li class="menu-item"><a href="#" rel="bookmark" target="">Historia de AEE</a></li>
					</ul>
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
	<div id="content" class="clear">
		<div id="slider">slider</div>
		<div class="quote">
			<span>Somos una sociedad de periódicos</span><br>
			<span>Líderes de provincia en México</span>
		</div>
		<div class="partners"></div>
		<section id="main">
			<article>
				<header>
					<hgroup>
						<h2>Videos</h2>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h3>
					</hgroup>
				</header>
				<div id="video-container"></div>
				<div id="related-videos"></div>
			</article>
		</section>
		<div id="secondary">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<!-- /#content -->
	<footer id="footer" class="clear">
		footer
	</footer>
</div>
<div id="black-bar-footer">
	<div class="container">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	</div>
</div>
<!-- /Container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/libs/jquery.min.js"><\/script>')</script>
<script src="assets/js/main.js"></script>
</body>
</html>