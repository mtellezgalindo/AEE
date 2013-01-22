	<footer id="footer" class="fClear clearfix">
		
		<!-- Acceso interno -->
		<div class="footer-form-container" id="footer-form-container-acceso">
			<form id="footer-form-acceso" class="footer-form" method="POST" action="">
				<h3 class="BebasNeueRegular f-form-title"><span class="icon-ff-home"></span>Acceso Interno</h3>
				<hr class="ff-separador-dark">
				<div class="ff-little-wrapper">
					<div>
						<input type="hidden" name="fname" value="ff-acceso">
						<label for="ff-acceso-cuenta">Cuenta<br></label>
						<input id="ff-acceso-cuenta" name="ff-acceso-cuenta" type="text" value="" placeholder="Cuenta de acceso" >
					</div>
					<div>
						<label for="ff-acceso-contrasena">Contraseña<br></label>
						<input id="ff-acceso-contrasena" name="ff-acceso-contrasena" type="password" value="" placeholder="Contraseña">
					</div>
					<div class="fClear clearfix">
						<div class="fLeft" id="ff-acceso-opciones-de-cuenta">
							<a href="">Regístrate aquí</a><br>
							<a href="">Olvidé mi contraseña</a><br>
							<a href="">Consulta tu email</a><br>
						</div>
						<div class="fRight" id="ff-acceso-submit-container" >
							<input type="submit" value="Enviar" class="btn-mini-red">
						</div>
					</div>
				</div>
				<div id="footer-social-icons" class="social-icons clear clearfix">
					<a class="social-icon icon-twitter" href="<?php site_info('twitter'); ?>" target="_blank" rel="bookmark"></a>
					<a class="social-icon icon-facebook" href="<?php site_info('facebook'); ?>" target="_blank" rel="bookmark"></a>
					<a class="social-icon icon-youtube" href="<?php site_info('youtube'); ?>" target="_blank" rel="bookmark"></a>
				</div>
			</form>
		</div>

		<!-- Cotizador interno -->
		<div class="footer-form-container" id="footer-form-container-cotizador">
			<form id="footer-form-cotizador" class="footer-form" method="POST" action="">
				<h3 class="BebasNeueRegular f-form-title"><span class="icon-ff-calendar"></span>Cotizador Interno</h3>
				<hr class="ff-separador-dark">
				<div class="ff-little-wrapper">
					<div>
						<input type="hidden" name="fname" value="ff-cotizador">
						<label for="ff-cotizador-periodico">Periódico<br></label>
						<!-- <input id="ff-cotizador-periodico" name="ff-cotizador-periodico" type="text" value="" placeholder="Periódico"> -->
						<select id="ff-cotizador-nombre-periodico" class="" name="ff-cotizador-nombre-periodico">
							<option value="siglo-torreon">El siglo de Torreón</option>
							<option value="diario-yucatan">El Diario de Yucatán</option>
							<option value="imparcial">El Imparcial</option>
							<option value="cronica">La Cronica</option>
							<option value="siglo-durango">El Siglo de Durango</option>
							<option value="frontera">La Frontera</option>
							<option value="frontera-ensenada">La Frontera Ensenada</option>
							<option value="Frontera-san-diego">La Frontea San Diego</option>
							<option value="la-i-laguna">La i Laguna</option>
							<option value="la-i-hermosillo">La i Hermosillo</option>
							<option value="la-i-campeche">La i Campeche</option>
							<option value="la-i-yucatan">La i Yucatán</option>
							<option value="al-chile">Al Chile</option>
						</select>
					</div>
					<div>
						<label for="ff-cotizador-posicion">Posición <br></label>
						<input id="ff-cotizador-posicion" name="ff-cotizador-posicion" type="text"  value="" placeholder="Posición">
					</div>
					<div>
						<label for="ff-cotizador-color">Color <br></label>
						<input id="ff-cotizador-color" name="ff-cotizador-color" type="text" value="" placeholder="Color">
					</div>
					<div>
						<label for="ff-cotizador-sección">Sección <br></label>
						<input id="ff-cotizador-sección" name="ff-cotizador-sección" type="text" value="" placeholder="sección">
					</div>
					<div class="fClear clearfix" id="ff-cotizador-last-otptions">
						<div class="fLeft" id="ff-cotizador-publicacion-container">
							<label for="ff-contacto-fecha-publicacion"><span class="icon-ff-calendar"></span>Fecha de publicación <br></label>
							<input id="ff-contacto-fecha-publicacion" name="ff-contacto-fecha-publicacion" type="text" value="" placeholder="dd/mm/aaa">
						</div>
						<div class="fRight">
							<input id="ff-cotizador-submit" class="btn-mini-red" type="submit" value="Enviar" >
						</div>
					</div>
				</div>
			</form>
		</div>

		<!-- Formulario Contacto-->
		<div class="footer-form-container" id="footer-form-container-contacto">
			<form id="footer-form-contacto" class="footer-form" method="POST" action="<?php site_info('home-url'); ?>/?p=contacto">
				<h3 class="BebasNeueRegular f-form-title"><span class="icon-ff-mail"></span>Contacto</h3>
				<hr class="ff-separador-light">
				<div class="ff-little-wrapper">
					<div>
						<input type="hidden" name="fname" value="ff-contacto">
						<label for="ff-contacto-nombre">
							Nombre<sup>*</sup> <br>
							<input id="ff-contacto-nombre" class="ff-contacto-nombre" name="ff-contacto-nombre" type="text" value="" required >
						</label>
					</div>
					<div>
						<label for="ff-contacto-email">
							Email<sup>*</sup> <br>
							<input id="ff-contacto-email" class="ff-contacto-email" name="ff-contacto-email" type="text" value="" required>
						</label>
					</div>
					<div>
						<label for="ff-contacto-comentario">
							Comentarios<sup>*</sup><br>
							<textarea id="ff-contacto-comentario" class="ff-contacto-comentario" name="ff-contacto-comentario" value="" rows="5" placeholder="Escríbenos" required ></textarea>
						</label>
					</div>
					<div class="fClear clearfix">
						<div class="fLeft">
							<small><sup>*</sup>Campos Obligatorios</small>
						</div>
						<div class="fRight">
							<input type="submit" value="Enviar" class="btn-mini-red">
						</div>
					</div>
					<br>
				</div>
			</form>
		</div><!-- Formulario Contacto-->

	</footer>
</div>
<!-- /#main-container -->
<div id="black-bar-footer">
	<div class="container aCenter">
		AEE-Asociación de Editores de los Estados, A.C. 2008. Todos los derechos reservados | <a href="<?php site_info('home-url'); ?>?p=politicas-privacidad">Política de privacidad</a> | Creado por <a id="link-altus" href="http://www.altusmedia.com.mx" target="_blank">Altusmedia</a>
	</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php site_info("js-directory"); ?>/libs/jquery.min.js"><\/script>')</script>
<script src="<?php site_info('js-directory'); ?>/plugins/general_plugins.js"></script>
<script src="<?php site_info('js-file'); ?>"></script>
<script type="text/javascript" src="http://vjs.zencdn.net/c/video.js"></script>
<!--[if lt IE 8]>
<script type="text/javascript" src="<?php site_info('js-directory'); ?>/libs/cufon-yui.js"></script>
<script type="text/javascript" src="<?php site_info('fonts-directory'); ?>/Bebas_Neue_400.font.js"></script>
<![endif]-->
<!--[if lt IE 8]>
<script defer type="text/javascript">
	// Cufon.replace(".BebasNeueRegular, .section-title");
	// Cufon.now();
</script>
<![endif]-->
</body>
</html>