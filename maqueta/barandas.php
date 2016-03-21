<!DOCTYPE html>
<?php $pagina = 'productos';?>
<?php include('_head.php');?>
<body class="">
<?php include('_header.php');?>

		<div class="contentWrap">

			<div class="singleProductWrap">
				<div class="wrapper clear">
					<div class="productGallery clear">
						<div class="galleryThumb">
							<a href="#imgId1" class="galleryThumbItem active">
								<img src="images/content/barandas/image1.jpg" alt="">
							</a>
							<a href="#imgId2" class="galleryThumbItem">
								<img src="images/content/barandas/image2.jpg" alt="">
							</a>
							<a href="#imgId3" class="galleryThumbItem">
								<img src="images/content/barandas/image3.jpg" alt="">
							</a>
							<a href="#imgId4" class="galleryThumbItem">
								<img src="images/content/barandas/image4.jpg" alt="">
							</a>
						</div>
						<div class="productGalleryWrap">
							<img class="current" id="imgId1" src="images/content/barandas/image1.jpg" alt="">
							<img id="imgId2" src="images/content/barandas/image2.jpg" alt="">
							<img id="imgId3" src="images/content/barandas/image3.jpg" alt="">
							<img id="imgId4" src="images/content/barandas/image4.jpg" alt="">
						</div>
					</div>
					<div class="productDesc">
						<h1>barandas</h1>
						<p>Pasamanos en diversas opciones curvas o rectas, siempre a la medida de su proyecto.</p>
						<p>Estructura de aluminio resistente y de leve apariencia, destaca la continuidad del vidrio.</p>
						<p>Terminaciones superficiales:</p>
						<ul class="prod-list">
							<li>Anodizado natural</li>
							<li>Anodizado color Anolok Bronce oscuro<sup>*</sup></li>
							<li>Pintura color Blanco ral 9016 semibrillo (pintura electrostática en polvo en base poliéster)<sup>*</sup></li>
							<li><sup>*</sup> Consulte por otros colores</li>
						</ul>

					</div>
				</div>
			</div>

		
	</section>
<?php include('_footer.php');?>
<?php include('_mobileMenu.php');?>
</body>
</html>