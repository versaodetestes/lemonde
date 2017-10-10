<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Visita ao Decorado - Le Monde Campolim</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style-contato.css">
	<link rel="stylesheet" type="text/css" href="assets/css/datedropper.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- HEAD -->
	<?php include ("head.php"); ?>	
</head>
<body>
	<!-- HEADER -->
	<?php include ("header-nonav.php"); ?>
	<!-- FIM HEADER -->
	<div class="container">
		<div class="row justify-content-center">
				<div class="title-group text-center">
					<h1>Visite VIP</h1>
					<p>Rua Antônio Perez Hernandez, 333<br>
						Campolim, Sorocaba/SP
					</p>
				</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<img src="assets/img/visite-decorado-1.jpg" class="img-fluid rounded" style="margin-bottom: 50px;">
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h2>Agendar visita por e-mail</h2>
				<div class="info">
					<p>
						Você receberá uma confirmação por telefone ou por e-mail para a data e horário escolhido.
					</p>
				</div>
				<form class="form-contact" role="form" id="form-email" action="send-email-decorado.php" method="POST">
				  <div class="form-group">
				    <label for="nome">Nome</label>
				    <input type="text" class="form-control" id="nome" name="nome"  placeholder="Digite seu nome">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" name="email"  placeholder="Digite seu principal email">
				  </div>
				  <div class="form-group">
				    <label for="celular">WhatsApp / Celular</label>
				    <input type="tel" class="form-control" id="celular" name="celular"  placeholder="Digite seu principal celular">
				  </div>
				  <div class="form-group">
				    <label for="data">Data</label>
				    <input type="date" class="form-control" id="data" name="data" data-lang="pt" data-format="d M, Y" data-large-mode="true" data-large-default="true" data-min-year="2017" >
				  </div>
				  <div class="form-group">
				  	<label for="horario">Horário</label>
				  	<select class="form-control" id="horario" name="horario">
				  		<option value="09:00">09:00</option>
				  		<option value="10:00">10:00</option>
				  		<option value="11:00">11:00</option>
				  		<option value="12:00">12:00</option>
				  		<option value="13:00">13:00</option>
				  		<option value="14:00">14:00</option>
				  		<option value="15:00">15:00</option>
				  		<option value="16:00">16:00</option>
				  		<option value="17:00">17:00</option>
				  		<option value="18:00">18:00</option>
				  	</select>
				  </div>

 					<div class="form-group">
				    <label for="mensagem">Dúvidas e informações adicionais</label>
				    <textarea rows="2" class="form-control" id="mensagem" name="mensagem"></textarea>
					</div>
					<button type="submit" class="btn btn-cta">Enviar mensagem</button>
					<label for="autorizo" style="margin-top: 5px;"><input type="checkbox" name="autorizacao" id="autorizo" checked="checked">
						<small>Autorizo receber informações de CRB Construtora. Nunca enviamos spam.</small>
					</label>

				</form>
			</div>
		</div>


	</div>


		<!-- FOOTER -->
		<?php include ("footer-nonav.php"); ?>
		<!-- FIM FOOTER -->

<script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="assets/js/main-script.js"></script>
<script type="text/javascript" src="assets/js/datedropper.min.js"></script>
<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script> 
<script type="text/javascript">
RdIntegration.integrate('4928a2b2f6bbc166823f44e7f99295c2', 'LP - Le Monde - Visita ao Decorado'); 
</script>
<script>
$('#data').dateDropper();
</script>
</body>
</html>	