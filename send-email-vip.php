<?php
include("config.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$planta = $_POST['planta'];
$mensagem = $_POST['mensagem'];
$emailcheck = $_POST['emailcheck'];
$whatsappcheck = $_POST['whatsappcheck'];
$telefonecheck = $_POST['telefonecheck'];
$autorizacao = $_POST['autorizacao'];
$dataHora = date('d/m/Y h:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$produto = '10';
$midia = 'LP Le Monde';

// where are we posting to?
$url = 'https://crb.hypnobox.com.br/email.receber.php?';

$sql = "INSERT INTO `contatos`(`nome`, `email`, `telefone`, `cidade`, `estado`, `origem`, `produto`, `pagina`, `dia`, `mes`, `ano`) VALUES ('$nome','$email', '$telefone', '$cidade', '$estado', '$midia', 'Le Monde', '$pagina', '$dia', '$mes', '$ano' )";

if ($conn->query($sql) === TRUE) {
    echo "Mensagem enviada com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// what post fields?
$fields = array(
   'nome' => $nome,
   'email' => $email,
   'id_produto' => $produto,
   'midia' => $midia,
   'mensagem' => $mensagem,
);

// build the urlencoded data
$postvars = http_build_query($fields);

// open connection
$ch = curl_init();

// set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

// execute post
$result = curl_exec($ch);

// close connection
curl_close($ch);

// SEND EMAIL

$emailbody = "
<table style='border-collapse:collapse;border:1px solid #E6E6E6;background-color:#FFF;width:500px;' align='center'><tbody>
<tr><td style='padding:20px;'>
<table width='100%' style='font:12px Arial, Helvetica, sans-serif;border-collapse:collapse;'>
<tbody>

<tr>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#2D2D2D;'>
		<strong>Nome:</strong>
	</td>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#666666;'>$nome</td>
</tr>
<tr>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#2D2D2D;'>
		<strong>E-mail:</strong>
	</td>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#666666;'> $email</td>
</tr>
<tr>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#2D2D2D;'>
		<strong>Telefone:</strong>
	</td>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#666666;'> $telefone</td>
</tr>
<tr>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#2D2D2D;'>
		<strong>Estado:</strong>
	</td>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#666666;'> $estado</td>
</tr>
<tr>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#2D2D2D;'>
		<strong>Cidade:</strong>
	</td>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#666666;'> $cidade</td>
</tr>
<tr>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#2D2D2D;'>
		<strong>Planta ideal:</strong>
	</td>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#666666;'> $planta</td>
</tr>
<tr>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#2D2D2D;'>
		<strong>Mensagem:</strong>
	</td>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#666666;'> $mensagem</td>
</tr>
<tr>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#2D2D2D;'>
		<strong>Atendimento Via:</strong>
	</td>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#666666;'> $emailcheck / $whatsappcheck / $telefonecheck </td>
</tr>
<tr>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#2D2D2D;'>
		<strong>Autoriza recebimento de email:</strong>
	</td>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#666666;'>	$autorizacao</td>
</tr>
<tr>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#2D2D2D;'>
		<strong>Data e Hora de envio:</strong>
	</td>
	<td style='padding:3px;border-bottom:1px solid #E6E6E6;color:#666666;'>	$dataHora</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</blockquote>
</body>
</html>
";

$emailenviar = "roberta@crbimoveis.com.br,corretoronline@crbimoveis.com.br,corretoronline1@crbimoveis.com.br,corretoronline2@crbimoveis.com.br,leads@crbconstrutora.com.br";
$destino = $emailenviar;
$assunto = "★ Landing Page Le Monde - Visita VIP";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: CRB Construtora - Le Monde <$email>';
//$headers .= "Bcc: $EmailPadrao\r\n";
 
$enviaremail = mail($destino, $assunto, $emailbody, $headers);
if($enviaremail) {
	die("<script>location.href='https://preview.crbconstrutora.com.br/obrigado'</script>");
}else {
	echo "Erro ao enviar a mensagem";
	header("location:http://preview.crbconstrutora.com.br");
}
?>