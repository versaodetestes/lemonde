<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Duplex 129m² - Le Monde Campolim</title>
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
	<div class="hero hero-apto hero-129">
		<div class="hero-info">
			<h1>Duplex 129m²</h1>
			<span class="line line-green"></span>
			<p class="lead lead-hero">Perfeito para a família que não para de crescer</p>
		</div>
	</div>
	<!-- FIM HERO -->
	<div class="container">
		
		<div class="row justify-content-center">
			<div class="col-md-3">
				<div class="feature feature-apto ">
					03 Dorms. (03 Suítes)
				</div>
			</div>
			<div class="col-md-3">
				<div class="feature feature-apto">
					Varanda Gourmet com churrasqueira carvão
				</div>
			</div>
			<div class="col-md-3">
				<div class="feature feature-apto">
					Depósito Privativo 5m²
				</div>
			</div>
			<div class="col-md-3">
				<div class="feature feature-apto">
					3 vagas cobertas
				</div>
			</div>
		</div>

		<div class="row banner-wrap">

			<div class="col-md-6 ">
				<h2 class="apto-subtitle">Morar bem com amplitude de um duplex</h2>
				<p class="text-spot">
Para quem deseja viver com muito espaço e privacidade. A planta do duplex 129m² foi projetada para oferecer conforto extra. São três suítes no pavimento superior, sendo uma suíte máster com varanda e espaço para closet.
				</p>
				<p class="text-spot">

No pavimento inferior fica a área social com cozinha e varanda gourmet integradas, ampla sala de jantar com lavabo, living reservado, ideal para relaxar e apreciar bons filmes.
				</p>
				<span class="apto-desc-line"></span>
			</div>

			<div class="col-md-6">
				<div class="banner banner-pet banner-pet_4">
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
				<source media="(max-width: 960px)" srcset="assets/banners/Banners-imagens-internas-aptos-mobile-129.jpg" class="img-fluid">
				<source media="(max-width: 1366px)" srcset="assets/banners/Banners-imagens-internas-aptos-1336-129.jpg.jpg" class="img-fluid">
				<img src="assets/banners/Banners-imagens-internas-aptos-1920-129.jpg" class="img-fluid">
			</picture>
		</div>
	</div>

	<div class="container">
		<div class="row galeria-plantas justify-content-center">
			<div class="title-group title-group-slider">
				<h2>Plantas</h2>
				<span class="line line-blue"></span>
			</div>

			<img src="galeria/plantas/129/galeria-plantas-129.jpg" class="img-fluid">
		</div>
	</div>
	
	<div class="container-fluid">

		<div class="row ficha-tecnica ficha-tecnica_apto d-flex justify-content-center">
			<div class="col-md-12 text-center">
				<h3 class="h2 ficha-title">Características</h3>
				<span class="line line-green"></span>
			</div>
			<div class="col-md-3">
				<ul class="ficha-list">
					<li>3 Suítes (1 suíte master)</li>
					<li>3 Vagas cobertas</li>
					<li>Depósito privativo (5m²)</li>
					<li>Ambientes sociais integrados</li>
					<li>Varanda gourmet com churrasqueira a carvão</li>
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
						<input type="hidden" name="identificador" value="LP - Le Monde - Apto. 129m² Planta" />
						<div class="form-down-input">
						<label for="nome">Nome</label><br>
						<input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
						</div>
						<div class="form-down-input">
						<label for="email">Email</label> <br>
						<input type="email" name="email" id="email" placeholder="Digite seu email" required>
						</div>
						<input type="hidden" name="redirect_to" value="https://lemonde.crbconstrutora.com.br/apartamento-duplex-129" />
						<button type="submit" class="btn btn-cta btn-download">Download plantas</button>
					</form>
				</div>
			</div>

		</div>

	</div>

	<div class="container">

		<div class="row justify-content-center">
			<div class="title-group title-group-slider">
				<h3 class="h2">Galeria de imagens</h3>
				<span class="line line-blue"></span>
			</div>
			<div class="galeria" id="slider-apartamento">
				<div class="swiper-container" id="slider-perspectivas">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<picture>
								<source media="(max-width: 425px)" srcset="galeria/perspectiva/duplex-129/mobile/duplex-129m-estar.jpg" class="img-fluid">
						<img src="galeria/perspectiva/duplex-129/duplex-129m-sala-de-estar.jpg" class="img-fluid inline img-100">
					</picture>
							<span class="slider-ilustra-caption">
								perspectiva ilustrativa sala de estar
							</span>
						</div>
						<div class="swiper-slide">
							<picture>
								<source media="(max-width: 425px)" srcset="galeria/perspectiva/duplex-129/mobile/duplex-129m-living.jpg" class="img-fluid">
						<img src="galeria/perspectiva/duplex-129/duplex-129m-sala-de-jantar.jpg" class="img-fluid inline img-100">
						</picture>
							<span class="slider-ilustra-caption">
								perspectiva ilustrativa sala de jantar
							</span>
						</div>
						<div class="swiper-slide">
							<picture>
								<source media="(max-width: 425px)" srcset="galeria/perspectiva/duplex-129/mobile/duplex-129m-suíte_2.jpg" class="img-fluid">
						<img src="galeria/perspectiva/duplex-129/duplex-129m-suite_1.jpg" class="img-fluid inline img-100">
						</picture>
							<span class="slider-ilustra-caption">
								perspectiva ilustrativa suíte master
							</span>
						</div>
						<div class="swiper-slide">
							<picture>
								<source media="(max-width: 425px)" srcset="galeria/perspectiva/duplex-129/mobile/duplex-129m-suíte.jpg" class="img-fluid">
						<img src="galeria/perspectiva/duplex-129/duplex-129m-suite_2.jpg" class="img-fluid inline img-100">
						</picture>
							<span class="slider-ilustra-caption">
								perspectiva ilustrativa suíte
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