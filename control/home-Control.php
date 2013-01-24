<?php if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');
//=======================================================

$add_head = '
	<link rel="stylesheet" type="text/css" href="assets/css/others/flowplayer-skin-functional.css" />
';
$add_footer = '
	<script src="assets/js/plugins/flowplayer.min.js"></script>
';

// Preparamos elementos específicos para la página en la tag head.
altus_head(true, $add_head );
// Preparamos elementos específicos para la página antes del cierre de la tag body
altus_footer(true, $add_footer);


get_header();
get_content();
get_footer();




?>

<?php  ?>