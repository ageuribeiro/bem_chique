<?php
require_once("conexao.php");

if ($_POST['email'] == "") {
	echo 'Preencha o campo email.';
	exit();
}

if ($_POST['nome'] == "") {
	echo 'Preencha o campo email.';
	exit();
}

if ($_POST['telefone'] == "") {
	echo 'Preencha o campo nome.';
	exit();
}

if ($_POST['mensagem'] == "") {
	echo 'Preencha o campo mensagem.';
	exit();
}
$destinatario = $email;
$assunto = $nome_loja . ' - Email da Loja';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email_cliente = $_POST['email'];
$mensagem = utf8_decode('Nome: ' . $nome . "\r\n" . "\r\n" . 'Telefone: ' . $telefone . "\r\n" . "\r\n" . 'Email: ' . $email . "\r\n" . "\r\n" . 'Mensagem: ' . $_POST['mensagem']);

$remetente = $_POST['email'];

$header = "From: " . $remetente;

mail($destinatario, $assunto, $mensagem, $header);
echo "Mensagem enviada com sucesso!!!";

//Verificar se o email existe
$res = $pdo->query("SELECT * FROM emails WHERE email = '$_POST[email]'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
if (@count($dados) == 0) {
	//Salvar dados no banco de dados
	$res = $pdo->prepare("INSERT INTO emails (nome, email, ativo) VALUES (:nome, :email, :ativo)");
	$res->bindValue(":nome", $_POST['nome']);
	$res->bindValue(":email", $_POST['email']);
	$res->bindValue(":ativo", "Sim");
	$res->execute();
} else {
	echo 'Email já existe no banco de dados';
}
