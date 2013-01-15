<?php
if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');
//=====================================================

$descargar = 'no hay libro';
if ( check_get('item') ) {
	$descargar = check_get('item') . ".pdf";
	$descargar = urldecode($descargar);
	$descargar = str_replace(' ', '_', $descargar);
	download_file("downloads/".$descargar);
}

ob_start();
get_header();
get_content('descargas');
get_footer();
ob_end_flush();
?>