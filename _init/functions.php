<?php
// si el archivo no es llamado desde el index detenemos el script.
if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');

/*
se revisa la url y se llaman los controladores necesarios para
procesar la petición.
Si no existe ninguna variable para la página definimos una por defecto.
*/
function get_page(){
	$pagina = ( empty($_GET['p']) ) ? 'home' : $_GET['p'];
	settype($pagina, 'string');
	if ( file_exists('control/'.$pagina.'Control.php') ) :
		require_once('control/'.$pagina.'Control.php');
	else:
		if ( file_exists('control/errorControl.php') ) :
			require_once('control/errorControl.php');
		else:	die('<h1>Service Unavailable</h1>');
		endif;
	endif;
}

function site_info($request){
	global $config;
	if ( array_key_exists($request, $config) ) echo $config[$request];
}

function get_header($name = 'header'){
	$header_name = ($name == 'header' ) ? 'header.php' : 'header-'.$name.'.php';
	if ( file_exists('views/'.$header_name) ) :
		include('views/'.$header_name);
	else:
		echo "<h1>Header required doesn't exist</h1>";
	endif;
}
function get_footer($name = 'footer'){
	$footer_name = ($name == 'footer' ) ? 'footer.php' : 'footer-'.$name.'.php';
	if ( file_exists('views/'.$footer_name) ) :
		include('views/'.$footer_name);
	else: echo "<h1>Footer required doesn't exist</h1>";
	endif;
}
function get_content($name = 'page'){
	$content_name = ($name == 'page' ) ? 'page.php' : 'page-'.$name.'.php';
	if ( file_exists('views/'.$content_name) ) :
		include('views/'.$content_name);
	else: echo "<h1>Content required doesn't exist</h1>";
	endif;
}
function get_sidebar ($name = 'sidebar') {
	$sidebar_name = ($name = 'sidebar') ? 'sidebar.php' : 'sidebar-'.$name.'.php';
	if ( file_exists('views/'.$sidebar_name) ) :
		include( 'views/'.$sidebar_name);
	else: echo "<h1>Sidebar required doesn't exist</h1>";
	endif;
}

?>