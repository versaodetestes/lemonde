<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Contato - Le Monde Campolim</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style-contato.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
	<!-- HEADER -->
	<?php include ("header.php"); ?>
	<!-- FIM HEADER -->
	<div class="container">
		<div class="row justify-content-center">
				<div class="title-group text-center">
					<h1>Contato</h1>
					<p class="lead">Corretores Exclusivos</p>
					<span class="line line-blue"></span><br>
					<span class="telefone">(15) 3318-7999</span>
				</div>
		</div>
		<div class="row">

			<div class="col-md-6">
				<img src="assets/img/stand-vendas.jpg" class="img-fluid reveal">
			</div>
			<div class="col-md-6">
				<form class="form-contact">
				  <div class="form-group">
				    <label for="nome">Nome</label>
				    <input type="text" class="form-control" id="nome" name="nome"  placeholder="Digite seu nome">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" name="email"  placeholder="Digite seu principal email">
				  </div>
				  <div class="form-group">
				    <label for="telefone">Telefone</label>
				    <input type="tel" class="form-control" id="telefone" name="telefone"  placeholder="Digite seu principal telefone">
				  </div>
				  <div class="form-group">
				    <label for="estado">Estado</label>
				    <select class="form-control" name="estado" id="estado">
				    	<option>Selecione um Estado</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="estado">Cidade</label>
				    <select class="form-control" name="cidade" id="cidade">
				    	<option>Selecione uma Cidade</option>
				    </select>
				  </div>
 					<div class="form-group">
				    <label for="estado">Dúvidas e informações adicionais</label>
				    <textarea rows="3" class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-cta">Enviar mensagem</button>
				</form>
			</div>
		</div>

		<div class="row projeto d-flex align-items-center">
			<div class="col-md-6">
				<h4 class="projeto-title">Explore o projeto</h4>
				<span class="line line-green"></span>
				<p class="projeto-text">
					Visite o Stand Le Monde e explore de perto a 
					maquete do empreendimento, além de poder 
					se envolver ainda mais com esse projeto,
					conhecendo o DECORADO.
				</p>
				<img src="assets/img/decorado-le-monde.jpg" class="img-fluid rounded reveal">
			</div>
			<div class="col-md-6">
				<img src="assets/img/maquete.jpg" class="img-fluid rounded reveal">
			</div>
		</div>

	</div>


		<!-- FOOTER -->
		<?php include ("footer.php"); ?>
		<!-- FIM FOOTER -->

<script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="assets/js/main-script.js"></script>
</body>
</html>	