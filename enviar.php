<?php 
	require_once("config.php");
	
	$destinatario = $email;
	$assunto = $nome_loja . ' - Email da Loja';

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email_cliente = $_POST['email'];
	$mensagem = utf8_decode('Nome: ' .$nome. "\r\n"."\r\n" .'Telefone: '.$telefone. "\r\n"."\r\n" .'Email: ' .$email. "\r\n"."\r\n" .'Mensagem: '.$_POST['mensagem']);

	$remetente = $_POST['email'];

	$header = "From: " . $remetente;

	mail($destinatario, $assunto, $mensagem, $header);
	// echo 'Enviado com sucesso!!!';

?>