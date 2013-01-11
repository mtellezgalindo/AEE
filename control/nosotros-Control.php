<?php
if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');
// ====================================================

$seccion = check_get('s');
echo "$seccion";


get_header();
get_content($seccion);
get_footer();
?>