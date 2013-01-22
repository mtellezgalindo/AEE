<?php if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');
//=======================================================

$add_head = '
	<link rel="stylesheet" type="text/css" href="http://releases.flowplayer.org/5.3.1/skin/playful.css" />
	<style type="text/css">
		.flowplayer { width: 80%; }
		.flowplayer .fp-controls { background-color: rgba(17, 17, 17, 1)}
		.flowplayer .fp-timeline { background-color: rgba(204, 204, 204, 1)}
		.flowplayer .fp-progress { background-color: rgba(0, 167, 200, 1)}
		.flowplayer .fp-buffer { background-color: rgba(249, 249, 249, 1)}
	</style>
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