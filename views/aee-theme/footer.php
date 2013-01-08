	<footer id="footer" class="fClear clearfix">
		<div class="footer-form-container">
			<form id="footer-form-acceso" class="footer-form" method="POST" action="">
				<h3 class="bebas-font">Acceso Interno</h3>
				<div>
					<label for="ff-acceso-cuenta">
						Cuenta <br>
						<input id="ff-acceso-cuenta" name="ff-acceso-cuenta" type="text" value="" placeholder="Cuenta de acceso" >
					</label>
				</div>
				<div>
					<label for="ff-acceso-contrasena">
						Contraseña <br>
						<input id="ff-acceso-contrasena" name="ff-acceso-contrasena" type="password" value="" placeholder="Contraseña">
					</label>
				</div>
				<div class="fClear clearfix">
					<div class="fLeft">
						<a href="">Regístrate aquí</a><br>
						<a href="">Olvidé mi contraseña</a><br>
						<a href="">Consulta tu email</a><br>
						<div id="footer-social-icons" class="social-icons">
							<a class="social-icon icon-twitter" href="<?php site_info('twitter'); ?>" target="_blank" rel="bookmark"></a>
							<a class="social-icon icon-facebook" href="<?php site_info('facebook'); ?>" target="_blank" rel="bookmark"></a>
							<a class="social-icon icon-youtube" href="<?php site_info('youtube'); ?>" target="_blank" rel="bookmark"></a>
						</div>
					</div>
					<div class="fRight">
						<input type="submit" value="Enviar">
					</div>
				</div>
			</form>
		</div>
		<div class="footer-form-container">
			<form id="footer-form-cotizador" class="footer-form" method="POST" action="">
				<h3 class="bebas-font">Cotizador Interno</h3>
				<div>
					<label for="ff-cotizador-periodico">
						Periódico <br>
						<input id="ff-cotizador-periodico" name="ff-cotizador-periodico" type="text" value="" placeholder="Periódico">
					</label>
				</div>
				<div>
					<label for="ff-cotizador-posicion">
						Posición <br>
						<input id="ff-cotizador-posicion" name="ff-cotizador-posicion" type="text"  value="" placeholder="Posición">
					</label>
				</div>
				<div>
					<label for="ff-cotizador-color">
						Color <br>
						<input id="ff-cotizador-color" name="ff-cotizador-color" type="text" value="" placeholder="color">
					</label>
				</div>
				<div>
					<label for="ff-cotizador-sección">
						Sección <br>
						<input id="ff-cotizador-sección" name="ff-cotizador-sección" type="text" value="" placeholder="sección">
					</label>
				</div>
				<div class="fClear clearfix">
					<div class="fLeft">
						<label for="ff-contacto-fecha-publicacion">
							Fecha de publicación <br>
							<input id="ff-contacto-fecha-publicacion" name="ff-contacto-fecha-publicacion" type="text" value="">
						</label>
					</div>
					<div class="fRight">
						<input type="submit" value="Enviar">
					</div>
				</div>
			</form>
		</div>
		<div class="footer-form-container">
			<form id="footer-form-contacto" class="footer-form" method="POST" action="">
				<h3 class="bebas-font">Contacto</h3>
				<div>
					<label for="ff-contacto-nombre">
						Nombre <br>
						<input id="ff-contacto-nombre" name="ff-contacto-nombre" type="text" value="">
					</label>
				</div>
				<div>
					<label for="ff-contacto-email">
						Email <br>
						<input id="ff-contacto-email" name="ff-contacto-email" type="text" value="">
					</label>
				</div>
				<div>
					<label for="ff-contacto-comentario">
						Comentarios <br>
						<input id="ff-contacto-comentario" name="ff-contacto-comentario" type="text" value="">
					</label>
				</div>
				<div class="fClear clearfix">
					<div class="fLeft">
						<small><sup>*</sup>Campos Obligatorios</small>
					</div>
					<div class="fRight">
						<input type="submit" value="Enviar">
					</div>
				</div>
			</form>
		</div>
	</footer>
</div>
<!-- /#main-container -->
<div id="black-bar-footer">
	<div class="container aCenter">
		AEE-Asociación de Editores de los Estados, A.C. 2008. Todos los derechos reservados | Política de privacidad | Creado por <a href="http://www.altusmedia.com.mx">Altusmedia</a>
	</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script defer >window.jQuery || document.write('<script src="<?php site_info("js-directory"); ?>/libs/jquery.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php site_info('js-directory'); ?>/libs/cufon-yui.js"></script>
<script type="text/javascript" src="<?php site_info('fonts-directory'); ?>/Bebas_Neue_400.font.js"></script>
<script defer src="<?php site_info('js-file'); ?>"></script>
<script defer type="text/javascript">
	Cufon.replace(".bebas-font,	.section-title");
	Cufon.now();
</script>
</body>
</html>