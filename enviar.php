<?php 
	require_once("config.php");
	
	if($_POST['nome'] == ""){
		echo 'Prencha o campo nome.';
	} 
	
	if($_POST['email'] == ""){
		echo 'Prencha o campo email.';
	}

	if($_POST['mensagem'] == ""){
		echo 'Escreva a mensagem que você deseja enviar.';
	}


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

	//Enviar para o banco de dados o email e nomes dos campos
	$res = $pdo->prepare("INSERT into emails(nome, email, ativo) values(:nome. :email, :ativo)");
	$res->bindValue(":nome", $_POST['nome']);
	$res->bindValue(":email", $_POST['email']);
	$res->bindValue(":ativo", "Sim");
	$res->execute(); 

?>