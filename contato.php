<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Contato - Le Monde Campolim</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style-contato.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- HEAD -->
	<?php include ("head.php"); ?>
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
					<a href="tel:1533187999"><span class="icon-tel-contato"><img src="assets/img/telefone.svg"></span><span class="telefone">(15) 3318-7999</span></a>
				</div>
		</div>
		<div class="row">

			<div class="col-md-6">
				<img src="assets/img/stand-vendas.jpg" class="img-fluid reveal">
			</div>
			<div class="col-md-6">
				<form class="form-contact" role="form" id="form-email" action="send-email.php" method="POST">
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
				    <label for="celular">WhatsApp / Celular</label>
				    <input type="tel" class="form-control" id="celular" name="celular"  placeholder="Digite seu principal celular">
				  </div>
				  <div class="form-group">
				    <label for="estado">Estado</label>
				    <select class="form-control" name="estado" id="estado">
				    	<option>Selecione um Estado</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="cidade">Cidade</label>
				    <select class="form-control" name="cidade" id="cidade">
				    	<option>Selecione uma Cidade</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="planta">Selecione seu apartamento ideal</label>
				    <select class="form-control" name="planta" id="planta">
				    	<option>Selecione uma planta</option>
				    	<option value="Apto 48m²">Apto 48m²</option>
				    	<option value="Apto 62m²">Apto 62m²</option>
				    	<option value="Duplex 101m²">Duplex 101m²</option>
				    	<option value="Duplex 129m²">Duplex 129m²</option>
				    </select>
				  </div>

 					<div class="form-group">
				    <label for="mensagem">Dúvidas e informações adicionais</label>
				    <textarea rows="2" class="form-control" id="mensagem"></textarea>
					</div>
				  <label style="margin-right: 5px;">Deseja receber contato via:</label>
				  <label style="margin-right: 20px;" for="emailcheck" style="margin-top: 5px;"><input type="checkbox" name="emailcheck" value="Email" id="emailcheck" checked="checked">
						Email
					</label>
				  <label style="margin-right: 20px;" for="whatsappcheck" style="margin-top: 5px;"><input type="checkbox" value="WhatsApp" name="whatsappcheck" id="whatsappcheck">
						WhatsApp
					</label>
				  <label style="margin-right: 20px;" for="telefonecheck" style="margin-top: 5px;"><input type="checkbox" value="Telefone" name="telefonecheck" id="telefonecheck">
						Telefone
					</label><br>
					<button type="submit" class="btn btn-cta">Enviar mensagem</button>
					<label for="autorizo" style="margin-top: 5px;"><input type="checkbox" name="autorizacao" id="autorizo" checked="checked">
						<small>Autorizo receber informações de CRB Construtora. Nunca enviamos spam.</small>
					</label>

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
				<img src="assets/img/decorado-le-monde.jpg" class="img-fluid rounded reveal" style="margin-bottom: 20px;">
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
<script src="assets/js/cidades-estados.js" charset='iso-8859-1'></script>
<script type="text/javascript">
	
// CIDADE E ESTADO
    $(document).ready(function(){
        new dgCidadesEstados( 
            document.getElementById('estado'), 
            document.getElementById('cidade'), 
            true
        );
        new dgCidadesEstados( 
            document.getElementById('estado-2'), 
            document.getElementById('cidade-2'), 
            true
        );
    });
</script>
<script type="text/javascript" src="assets/js/main-script.js"></script>
<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script> 
<script type="text/javascript">
RdIntegration.integrate('4928a2b2f6bbc166823f44e7f99295c2', 'LP - Le Monde'); 
</script>

</body>
</html>	