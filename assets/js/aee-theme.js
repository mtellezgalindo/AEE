// Libreria Jquery ya debe estar cargada en memoria.
// Aquí debe ir toda la configuración de los plugins

$(document).on("ready", inicio);

function inicio () {

	// Datepiker para formulario de footer
	$('#ff-contacto-fecha-publicacion').pikaday(
		{
			firstDay: 1,
			format: 'DD/MM/YYYY'
		}
	);
	// Slider principal del header
	$('.flexslider').flexslider();

} // END function inicio

