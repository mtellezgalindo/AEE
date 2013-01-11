<?php
if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');
//=====================================================

$descargar = 'no hay libro';
if ( check_get('libro') ) {
	$descargar = check_get('libro') . ".pdf";
	$descargar = urldecode($descargar);
	$descargar = str_replace(' ', '_', $descargar);
	download_file("downloads/".$descargar);
}


get_header();
get_content('descargas');
get_footer();
?>