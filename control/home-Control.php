<?php if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');
//=======================================================

$add_head = '
	<link rel="stylesheet" type="text/css" href="http://releases.flowplayer.org/5.3.1/skin/playful.css" />
';
$add_footer = '
	<script src="http://releases.flowplayer.org/5.3.1/flowplayer.min.js"></script>
';

// Preparamos elementos específicos para la página en la tag head.
altus_head(true, $add_head );
// Preparamos elementos específicos para la página antes del cierre de la tag body
altus_footer(true, $add_footer);

get_header('video-test');
get_content('video-test');
get_footer('video-test');




?>

<?php  ?>