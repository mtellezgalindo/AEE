<?php
if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');
//=============================================================
ob_start();
get_header();
get_content('periodico-al-chile');
get_footer();
ob_end_flush();

?>