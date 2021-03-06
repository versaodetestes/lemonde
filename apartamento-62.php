<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Apartamento 62m² - Le Monde Campolim</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="assets/css/style-apartamentos.css">
	<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
	<!-- HEAD -->
	<?php include ("head.php"); ?>
</head>
<body>
	<!-- HEADER -->
	<?php include ("header.php"); ?>
	<!-- FIM HEADER -->
	<!-- HERO -->
	<div class="hero hero-apto hero-62">
		<div class="hero-info">
			<h1>Apartamento 62m²</h1>
			<span class="line line-green"></span>
			<p class="lead lead-hero">Para quem sonha com cada detalhe para ser perfeito.</p>
		</div>
	</div>
	<!-- FIM HERO -->
	<div class="container">
		
		<div class="row justify-content-center">
			<div class="col-md-3 col-6">
				<div class="feature feature-apto ">
					02 Dorms. (1 Suíte)
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="feature feature-apto">
					Varanda Gourmet Grill
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="feature feature-apto">
					Depósito Privativo 5m²
				</div>
			</div>

			<div class="col-md-3 col-6">
				<div class="feature feature-apto">
					2 vagas cobertas
				</div>
			</div>
		</div>

		<div class="row banner-wrap">

			<div class="col-md-6">
				<h2 class="apto-subtitle">Ideal para a família que começou a crescer</h2>
				<p class="text-spot">
				O apartamento de 62m² possui dois dormitórios, sendo uma suíte do casal. E ainda, ambientes integrados da sala, cozinha e varanda gourmet. Distribuição de espaços que privilegiam o convívio social, incluindo o banheiro com lavatório externo.
				</p>
				<p class="text-spot">
				Uma planta na medida para quem deseja viver bem e com conforto, sem abrir mão do requinte.
								</p>
				<span class="apto-desc-line"></span>
			</div>

			<div class="col-md-6">
				<div class="banner banner-pet banner-pet_2">
					<div class="banner-pet_info">
						<span class="banner-pet_title">Personalização de Piso</span>
						<span class="banner-pet_text">3 tipos de piso para você escolher</span>
						<span class="banner-pet_text">
							<ul>
								<li>• Porcelanato</li>
								<li>• Laminado de madeira</li>
								<li>• Piso Vinílico</li>
							</ul>
						</span>
					</div>
				</div>
			</div>



		</div>

	</div>
	<div class="container-fluid">
		<div class="row reveal">
			<picture>
				<source media="(max-width: 960px)" srcset="assets/banners/Banners-imagens-internas-aptos-mobile-62.jpg" class="img-fluid">
				<source media="(max-width: 1366px)" srcset="assets/banners/Banners-imagens-internas-aptos-1336-62.jpg" class="img-fluid">
				<img src="assets/banners/Banners-imagens-internas-aptos-1920-62.jpg" class="img-fluid">
			</picture>
		</div>
	</div>
	<div class="container">

		<div class="row galeria-plantas justify-content-center">
			<div class="title-group title-group-slider">
				<h2>Planta</h2>
				<span class="line line-blue"></span>
			</div>
			<div class="col-md-12">
				<picture>
					<source media="(max-width: 960px)" srcset="galeria/plantas/62/galeria-plantas-62-mobile.jpg" class="img-fluid">
					<img src="galeria/plantas/62/galeria-plantas-62.jpg" class="img-fluid">
				</picture>
			</div>

			
		</div>
	</div>
	
	<div class="container-fluid">

		<div class="row ficha-tecnica  ficha-tecnica_apto d-flex justify-content-center">
			<div class="col-md-12 text-center">
				<h3 class="h2 ficha-title">Características</h3>
				<span class="line line-green"></span>
			</div>
			<div class="col-md-3">
				<ul class="ficha-list">
					<li>2 dormitórios (1 suíte)</li>
					<li>Varanda Gourmet Grill</li>
					<li>2 Vagas cobertas</li>
					<li>Ambientes Integrados</li>
					<li>Lavabo com lavatório externo</li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul class="ficha-list">
					<li>Personalização de pisos inclusa</li>
					<li>Preparação completa para ar-condicionado</li>
					<li>Medição individual de água e energia</li>
					<li>Isolamento acústico para redução de ruídos</li>
					<li>Acabamentos finos e materiais de alta qualidade</li>
				</ul>
			</div>

		</div>
	</div>

	<div class="container-fluid">
		<div class="row no-gutter download-plantas">

			<div class="download-plantas-wrap">
				<img src="assets/img/icon-download.png" class="icon-download">
				<div class="download-info">
						<span>Faça o download das plantas</span>
					<p>
						Tenha as plantas com suas medidas.<br>
						Baixe e se encante com o projeto.
					</p>

				</div>
				<div class="download-form">
					<form class="form" action="https://www.rdstation.com.br/api/1.2/conversions"  method="POST" onSubmit=" swal('Sucesso!', 'Email enviado com sucesso! Em breve você receberá um email com o link para download.', 'success');" id="plantasdownload">
						<input type="hidden" name="token_rdstation" value="4928a2b2f6bbc166823f44e7f99295c2" />
						<input type="hidden" name="identificador" value="LP - Le Monde - Apto. 62m² Planta" />
						<div class="form-down-input">
						<label for="nome">Nome</label><br>
						<input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
						</div>
						<div class="form-down-input">
						<label for="email">Email</label> <br>
						<input type="email" name="email" id="email" placeholder="Digite seu email" required>
						</div>
						<input type="hidden" name="redirect_to" value="https://lemonde.crbconstrutora.com.br/apartamento-62" />
						<button type="submit" class="btn btn-cta btn-download">Download plantas</button>
					</form>
				</div>
			</div>

		</div>

	</div>

	<div class="container">
		<div class="row justify-content-center">
			<div class="title-group title-group-slider">
				<h3 class="h2">Galeria de imagens 62m²</h3>
				<span class="line line-blue"></span>
			</div>
			<div class="galeria" id="slider-apartamento">
				<div class="swiper-container" id="slider-perspectivas">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<picture>
								<source media="(max-width: 425px)" srcset="galeria/perspectiva/apto-62/mobile/apto-62m-living.jpg" class="img-fluid">
						<img src="galeria/perspectiva/apto-62/apto-62m-living.jpg" class="img-fluid inline img-100">
					</picture>
							<span class="slider-ilustra-caption">
								perspectiva ilustrativa living e jantar
							</span>
						</div>
						<div class="swiper-slide">
							<picture>
								<source media="(max-width: 425px)" srcset="galeria/perspectiva/apto-62/mobile/apto-62m-quarto-infantil.jpg" class="img-fluid">
						<img src="galeria/perspectiva/apto-62/apto-62m-quarto-pokemon.jpg" class="img-fluid inline img-100">
						</picture>
							<span class="slider-ilustra-caption">
								perspectiva ilustrativa quarto infantil
							</span>
						</div>
						<div class="swiper-slide">
							<picture>
								<source media="(max-width: 425px)" srcset="galeria/perspectiva/apto-62/mobile/apto-62m-quarto-infanti-2.jpg" class="img-fluid">
						<img src="galeria/perspectiva/apto-62/apto-62m-quarto-pokemon-2.jpg" class="img-fluid inline img-100">
						</picture>
							<span class="slider-ilustra-caption">
								perspectiva ilustrativa quarto infantil
							</span>
						</div>
					</div>
					<div class="nav-arrow nav-arrow_perspectivas">
			          <a class="nav-icon nav-prev" id="prev-ilustra"></a>
			          <a class="nav-icon nav-next" id="next-ilustra"></a>
					</div>
					<!-- Add Pagination -->
					<span class="bar-color bar-color_small bar-color_slider"></span>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="title-group title-group-slider">
				<h3 class="h2">Imagem 360º</h3>
				<span class="line line-blue"></span>
			</div>

			
				<div class="embed-responsive embed-responsive-16by9 wrap-360">
				<iframe width="100%" class="embed-responsive-item img-360"  allowfullscreen style="border-style:none;" src="https://cdn.pannellum.org/2.2/pannellum.htm?panorama=https%3A//i.imgur.com/z9Pehvs.jpg&autoLoad=true&autoRotate=-1"></iframe>
				<span class="bar-color bar-color_small bar-color_360"></span>
				<div class="img-360_caption">

					Perspectiva living da planta 62m²
				</div>
				</div>
		</div>

	</div>



	<!-- CTA -->
	<?php include ("cta-stand-apartamento.php"); ?>
	<!-- FIM CTA -->
	<!-- FOOTER -->
	<?php include ("footer.php"); ?>
	<!-- FIM FOOTER -->

<script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/sweetalert.min.js"></script>
<script type="text/javascript" src="assets/js/main-script.js"></script>
<script src="assets/js/swiper.min.js"></script>

</body>
</html>