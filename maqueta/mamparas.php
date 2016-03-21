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
								<img src="images/content/mamparas/image1.jpg" alt="">
							</a>
							<a href="#imgId2" class="galleryThumbItem">
								<img src="images/content/mamparas/image2.jpg" alt="">
							</a>
							<a href="#imgId3" class="galleryThumbItem">
								<img src="images/content/mamparas/image3.jpg" alt="">
							</a>
							<a href="#imgId4" class="galleryThumbItem">
								<img src="images/content/mamparas/image4.jpg" alt="">
							</a>
						</div>
						<div class="productGalleryWrap">
							<img class="current" id="imgId1" src="images/content/mamparas/image1.jpg" alt="">
							<img id="imgId2" src="images/content/mamparas/image2.jpg" alt="">
							<img id="imgId3" src="images/content/mamparas/image3.jpg" alt="">
							<img id="imgId4" src="images/content/mamparas/image4.jpg" alt="">
						</div>
					</div>
					<div class="productDesc">
						<h1>mamparas de baño</h1>
						<p>Las mamparas Glassbox han sido concebidas para brindar belleza y tecnología al baño. </p>
						<p>Características del sistema:</p>
						<ul class="prod-list">
							<li>Armonía – con sus terminaciones de aristas curvas </li>
							<li>Seguridad – con sus placas de vidrio templado </li>
							<li>Practicidad – con su deslizamiento suave y silencioso </li>
							<li>Facilidad de limpieza – por su diseño sin recovecos </li>
							<li>Estilo</li>
						</ul>

					</div>
				</div>
			</div>

		
	</section>
<?php include('_footer.php');?>
<?php include('_mobileMenu.php');?>
</body>
</html>