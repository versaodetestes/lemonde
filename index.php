<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Le Monde Campolim</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style-general.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
	<!-- HEADER -->
	<?php include ("header.php"); ?>
	<!-- FIM HEADER -->
	<!-- HERO -->
	<div class="hero-video" id="hero-video">
		<video poster="assets/img/hero-home.jpg" id="video" playsinline autoplay muted loop>
		<source src="assets/video/video-hero-lemonde.mp4" type="video/mp4"></video>
	</div>
	<div class="hero-home-mobile">
		<img src="assets/img/banner-le-monde-campolim-mobile.jpg" class="img-fluid">
	</div>

	<!-- FIM HEADER -->
	<!-- EMPREENDIMENTO -->
	<div class="container about-building">
		<div class="row justify-content-center">
				<div class="title-group reveal-noscale">
					<h1>O empreendimento</h1>
					<p class="lead">Tendência internacional de moradia</p>
					<span class="line line-blue"></span>
				</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-3 col-6">
				<div class="feature">
					Localização Estratégica
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="feature">
					Arquitetura Autêntica
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="feature">
					Plantas Inteligentes 
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="feature">
					Lazer Completíssimo
				</div>					
			</div>
		</div>

		<div class="row justify-content-center text-center">
			<div class="midia">
				<div class="midia-player">
					<img src="assets/img/youtube-cover.jpg" class="img-fluid" id="youtubecover">
					<div id="ytplayer" style="display:none;">
					</div>
				<span class="bar-color"></span>
				</div>
				<div class="midia-text justify-content-center">
					A CRB Construtora traz para Sorocaba uma tendência internacional de moradia: reunir opções completas de lazer e funcionalidades, em localização estratégica repleta de serviços. O residencial Le Monde Campolim reúne os recursos indispensáveis para os gostos mais exigentes com variedade de plantas e personalização que você escolhe de acordo com o seu momento e estilo de vida.
				</div>
				<div class="midia-cta">
					<a class="btn btn-cta" href="./empreendimento.php">Tudo sobre o empreendimento</a>
				</div>
			</div>
			<span class="line line-blue line-full line-mr-bottom"></span>
		</div>



		<div class="row">

			
				<div class="cards col-md-4 reveal-noscale">
					<a href="./apartamentos" class="card-link">
						<div class="card-block card-apto">
						  <div class="card-info">
							<h3 class="card-title">Apartamentos</h3>
							<span class="btn btn-cta btn-inverse">Escolha sua planta ideal</span>
						  </div>
						</div>
		 				<span class="bar-color bar-color_card"></span>
 						</a>
			</div>


			<div class="cards col-md-4 reveal-noscale">
				<a href="./lazer" class="card-link">
				<div class="card-block card-lazer">
					<div class="card-info">
						<h3 class="card-title">Lazer completo</h3>
						<span class="btn btn-cta btn-inverse" >Um mundo de possibilidades</span>
					</div>
				</div>
 				<span class="bar-color bar-color_card"></span>
 				</a>
			</div>

			<div class="cards col-md-4 reveal-noscale">
				<a href="./localizacao" class="card-link">
				<div class="card-block card-localizacao">
				  <div class="card-info">
					<h3 class="card-title">Localização</h3>
					<span class="btn btn-cta btn-inverse">Explore seu novo endereço</span>
				  </div>
				 
				</div>
 				<span class="bar-color bar-color_card"></span>
 				</a>
			</div>

		</div>

		</div>
		<div class="container-fluid">
			<div class="row no-gutter justify-content-center testimonial">
				<div class="col-md-2 testimonial-image text-center">
					<img src="assets/img/depoimento.png">
				</div>
				<div class="col-md-3 testimonial-text">
					"A CRB Construtora realmente me surpreendeu e tem me supreendido até esse momento"
					<span class="testimonial-autor">Rogério Duarte <br>
						<small>- Empresário (Morador Luzes Campolim)</small></span>
				</div>
			</div>
		</div>
		<!-- CTA -->
		<?php include ("cta-stand.php"); ?>
		<!-- FIM CTA -->
		<!-- FOOTER -->
		<?php include ("footer.php"); ?>
		<!-- FIM FOOTER -->

<script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="assets/js/main-script.js"></script>


</body>
</html>