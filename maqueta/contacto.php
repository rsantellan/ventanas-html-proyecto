<!DOCTYPE html>
<html lang="es">
<?php $pagina = 'contacto';?>
<?php include('_head.php');?>
<body class="">
<?php include('_header.php');?>
	<section class="container">
		<div class="pageHeader" style="background-image: url(images/content/contacto-top.jpg);">
		</div>

			<div class="checkoutPage clear">
				<div class="fcell">
					<h3>contacto</h3>
					<p class="contacto-text">Completá el formulario y con mucho gusto nos pondremos en contacto contigo a la brevedad.</p>
					<p class="form-row form-row-first">
						<label>Nombre / Apellido</label>
						<input id="billing_first_name" class="input-text " type="text" value="" placeholder="" name="billing_first_name">
					</p>
					<p class="form-row form-row-last">
						<label>Mail</label>
						<input id="billing_last_name" class="input-text " type="text" value="" placeholder="" name="billing_last_name">
					</p>
					<div class="clear"></div>
					<p class="form-row form-row-wide">
						<label class="" for="billing_company">Asunto</label>
						<input id="billing_company" class="input-text " type="text" value="" placeholder="" name="billing_company">
					</p>
					<p class="form-row form-row-wide">
						<label class="" for="billing_address_1">Mensaje</label>
						<textarea rows="10"></textarea>
					</p>
					<input class="checkoutBtn" type="submit" value="enviar">
				</div>				


			</div>

		
	</section>
<?php include('_footer.php');?>
<?php include('_mobileMenu.php');?>
</body>
</html>