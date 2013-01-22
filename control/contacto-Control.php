<?php
if ( !defined('KEY') ) die('<h1>Acceso denegado</h1>');
//=====================================================


if ( !empty( $_POST['fname']) ) :
	$tiposFormulario = array( 'ff-acceso', 'ff-cotizador', 'ff-contacto' );	
	$tipoFormulario = $_POST['fname'];
	if (in_array($tipoFormulario, $tiposFormulario)) {
		switch ($tipoFormulario) {
			case 'ff-acceso':
				break;
			case 'ff-cotizador':
				break;
			case 'ff-contacto':
				$contacto_nombre = trim($_POST['ff-contacto-nombre']);
				$contacto_email = trim($_POST['ff-contacto-email']);
				$contacto_mensaje = trim($_POST['ff-contacto-comentario']);
				
				$dinamic_tags = array(
						'remitente_nombre'	=>	$contacto_nombre,
						'remitente_mail'	=>	$contacto_email,
						'remitente_mensaje'	=>	$contacto_mensaje
					);

				$email_template = file_get_contents('includes/email_template.html');
				foreach ($dinamic_tags as $tag => $valor) {
					$email_template = str_replace('{'.$tag.'}', $valor, $email_template);
				}

				require_once 'classes/class.phpmailer.php';
				$mail = new phpmailer();
				$mail->PluginDir = "classes/";
				$mail->Mailer = "mail";
				$mail->From = "contacto@aee.com.mx";
				$mail->FromName = "Sitio Web AEE";
				$mail->Timeout = 30;
				$mail->AddAddress('momosolamente@gmail.com');
				$mail->AddAddress('a.vivanco@altusmedia.com.mx');
				$mail->AddAddress('g.trejo@altusmedia.com.mx');
				$mail->AddReplyTo($contacto_email);
				$mail->Subject = "Sitio web AEE - Mensaje de ".$contacto_nombre;
				$mail->Body = $email_template;
				$mail->AltBody = $contacto_mensaje;
				$mail->IsHTML(true);
				$exito = $mail->Send();
				$intentos = 1;
				while ( (!$exito ) && ($intentos < 5 ) ) {
					sleep(5);
					$exito = $mail->Send();
					$intentos++;
				}
				$email_enviado = ( $exito) ? true : false ;
				break;
			default:
				# code...
				break;
		}
	}
endif;
get_header();
get_content('contacto');
get_footer();
?>
