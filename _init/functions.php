<?php
// si el archivo no es llamado desde el index detenemos el script.
if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');

// Establece la plantilla configurada. Si no hay ninguna usa una por defecto.
function set_template(){
	global $config;
	if ( array_key_exists('template', $config) && !empty($config['template']) ) :
		if ( file_exists('views/'.$config['template'].'/') ) :
			define('TEMPLATE', 'views/'.$config['template'].'/' );
		else: 
			die("<h1>Defined Template doesn't exist.</h1>");
		endif;
	else:
		if ( file_exists('views/default/') ) :
			define('TEMPLATE', 'views/default/');
		else:
			die('<h1>There is not defined template yet.</h1>');
		endif;
	endif;
}

/*
se revisa "p" por GET y se llaman los controladores necesarios para
procesar la petición. Si no existe ninguna variable para la página definimos una por defecto.
*/
function get_controller(){
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

// Obtiene información configurada del sitio.
function site_info($request){
	global $config;
	if ( array_key_exists($request, $config) ) echo $config[$request];
}

// Incluye el header solicitado en base a la plantilla configurada
function get_header($name = 'header'){
	$header_name = ($name == 'header' ) ? 'header.php' : 'header-'.$name.'.php';
	if ( file_exists(TEMPLATE.$header_name) ) :
		include(TEMPLATE.$header_name);
	else:
		echo "<h1>Header required doesn't exist</h1>";
	endif;
}

// Incluye el footer solicitado en base a la plantilla configurada
function get_footer($name = 'footer'){
	$footer_name = ($name == 'footer' ) ? 'footer.php' : 'footer-'.$name.'.php';
	if ( file_exists(TEMPLATE.$footer_name) ) :
		include(TEMPLATE.$footer_name);
	else: echo "<h1>Footer required doesn't exist</h1>";
	endif;
}

// Incluye el contenido solicitado en base a la plantilla configurada
function get_content($name = 'page'){
	$content_name = ($name == 'page' ) ? 'page.php' : 'page-'.$name.'.php';
	if ( file_exists(TEMPLATE.$content_name) ) :
		include(TEMPLATE.$content_name);
	else: echo "<h1>Content required doesn't exist</h1>";
	endif;
}

// Incluye el sidebar solicitado en base a la plantilla configurada
function get_sidebar ($name = 'sidebar') {
	$sidebar_name = ($name = 'sidebar') ? 'sidebar.php' : 'sidebar-'.$name.'.php';
	if ( file_exists(TEMPLATE.$sidebar_name) ) :
		include( TEMPLATE.$sidebar_name);
	else: echo "<h1>Sidebar required doesn't exist</h1>";
	endif;
}

?>