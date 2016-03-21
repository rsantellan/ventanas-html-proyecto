	<div class="mobileMenu">
		<ul>
					<li><a href="index.php">inicio</a></li>
					<li>
						<a href="productos.php" <?php if($pagina == 'productos'):?> class="current"<?php endif;?>>productos</a>
					</li>
					<li>
						<a href="servicios.php" <?php if($pagina == 'servicios'):?> class="current"<?php endif;?>>servicios</a>
					</li>
					<li>
						<a href="galeria.php" <?php if($pagina == 'galeria'):?> class="current"<?php endif;?>>galería</a>
					</li>
					<li><a href="nosotros.php" <?php if($pagina == 'nosotros'):?> class="current"<?php endif;?>>nosotros</a>
					</li>
					<li><a href="contacto.php" <?php if($pagina == 'contacto'):?> class="current"<?php endif;?>>contacto</a>
					</li>
		</ul>
	</div>