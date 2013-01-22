// Libreria Jquery ya debe estar cargada en memoria.
// Aquí debe ir toda la configuración de los plugins

$(document).on("ready", inicio);

function inicio () {
	
	/*******************************************/
	// Datepiker para formulario de footer
	$('#ff-contacto-fecha-publicacion').pikaday(
		{
			firstDay: 1,
			format: 'DD/MM/YYYY'
		}
	);


	/*******************************************/
	// Slider principal del header
	
	$('.flexslider').flexslider();

	
	/*******************************************/
	// Reproductor Video-JS
	// Reproductor de home page
	
	/*$(".related-videos a.video-link").on('click', function(){
		newVideo = $(this).attr('rel');
		if ( home_player = _V_("homePlayer") ) {
				homePlayer = _V_("homePlayer");
				homePlayer.src(newVideo);
				homePlayer.play();
		}
	});*/


	/*******************************************/
	// Validaciones de Formulario
	
	$('#footer-form-contacto').validate({
		debug: false,
		rules: {
			'ff-contacto-nombre' : {
				required: true,
				minlength: 3
			},
			'ff-contacto-email': {
				email:true,
				required: true
			},
			'ff-contacto-comentario' : {
				required: true,
				minlength: 50
			}
		},
		messages: {
			'ff-contacto-nombre' : {
				required: "¿Cómo te llamas?",
				minlength: "Un nombre más largo"
			},
			'ff-contacto-email' : {
				required: "Que no se te olvide tu dirección",
				email: "Escribe una dirección<br>de correo válida"
			},
			'ff-contacto-comentario' : {
				required : "Escríbemos tu mensaje",
				minlength: "Es demasiado corto.<br>Dinos algo más."
			}
		}
	});

	/*******************************************/



} // END function inicio

