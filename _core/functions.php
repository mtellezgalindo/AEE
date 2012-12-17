<?php
// si el archivo no es llamado desde el index detenemos el script.
if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');

// se revisa la url y se llaman los controladores necesarios para
// procesar la petición.
// Si no existe ninguna variable para la página definimos una por defecto.
function get_page(){
	$pagina = ( empty($_GET['p']) ) ? 'home' : $_GET['p'];
	settype($pagina, 'string');
	if ( file_exists('control/'.$pagina.'Control.php') ) :
		require_once('control/'.$pagina.'Control.php');
	else:
		if ( file_exists('control/errorControl.php') ) : require_once('control/errorControl.php');
		else:	die('<h1>Service Unavailable</h1>');
		endif;
	endif;
}

function get_header(){
	include('views/header.php');
}
function get_footer(){
	include('views/footer.php');
}
function get_content($content){
	settype($content, 'string');
	include('views/page-'.$content.'.php');
}


?>