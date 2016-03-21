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
								<img src="images/content/laminas/image1.jpg" alt="">
							</a>
							<a href="#imgId2" class="galleryThumbItem">
								<img src="images/content/laminas/image1.jpg" alt="">
							</a>
							<a href="#imgId3" class="galleryThumbItem">
								<img src="images/content/laminas/image1.jpg" alt="">
							</a>
							<a href="#imgId4" class="galleryThumbItem">
								<img src="images/content/laminas/image1.jpg" alt="">
							</a>
						</div>
						<div class="productGalleryWrap">
							<img class="current" id="imgId1" src="images/content/laminas/image1.jpg" alt="">
							<img id="imgId2" src="images/content/laminas/image1.jpg" alt="">
							<img id="imgId3" src="images/content/laminas/image1.jpg" alt="">
							<img id="imgId4" src="images/content/laminas/image1.jpg" alt="">
						</div>
					</div>
					<div class="productDesc">
						<h1>láminas de seguridad</h1>
						<p>El atentado o accidente suele dejar al vidrio sin daño alguno, con lo cual evita lesiones y trastornos. En aquellos casos en que los impactos son tan fuertes que llegan a romper el vidrio, la película laminada actúa como un escudo protector.</p>
					</div>
				</div>
			</div>

		
	</section>
<?php include('_footer.php');?>
<?php include('_mobileMenu.php');?>
</body>
</html>