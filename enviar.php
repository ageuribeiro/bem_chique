<?php 
	require_once("config.php");

	$destinatario = $email;
	$assunto = $nome_loja.'- Email do site';

	$nome_cliente = $_POST['nome'];
	$telefone_cliente = $_POST['telefone'];
	$email_cliente = $_POST['email'];
	$mensagem_cliente = $_POST['mensagem'];

	$mensagem_email = 'Nome: '.$_POST['nome']."\r\n".'Telefone: '.$_POST['telefone']. "\r\n". 'Mensagem: '."\r\n" . $_POST['mensagem'];

	$header = "From: ".$_POST['email'];

	mail($destinatario, $assunto, $mensagem_email, $header);

	echo 'Enviado com Sucesso!';
?>