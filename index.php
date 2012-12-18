<?php
// se define una constante que servirá como llave de securidad para otros archivos
define('KEY', 'afsd65f4qwe687zs3dv24sdfg564as9d8f7');
// comprobamos que existan los archivos básicos para el sitio y los requerimos.
if ( file_exists('_init/config.php') && file_exists('_init/functions.php') ) :
	require_once('_init/config.php');
	require_once('_init/functions.php');
else: die('<h1>Internal error</h1>');
endif;
// llamamos la pagina a mostrar
get_page();


?>