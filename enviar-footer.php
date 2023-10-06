<?php
require_once("conexao.php");

if ($_POST['email-footer'] == "") {
	echo 'Preencha o campo email.';
	exit();
}

$destinatario = $email;
$assunto = $nome_loja . ' - Email da Loja';


$email_cliente = $_POST['email-footer'];
$mensagem = utf8_decode('Nome: ' . 'None' . "\r\n" . "\r\n" . 'Telefone: ' . 'None' . "\r\n" . "\r\n" . 'Email: ' . 'None' . "\r\n" . "\r\n" . 'Mensagem: ' . 'None');

$remetente = $_POST['email-footer'];

$header = "From: " . $remetente;

mail($destinatario, $assunto, $mensagem, $header);
echo "Mensagem enviada com sucesso!!!";

//Verificar se o email existe
$res = $pdo->query("SELECT * FROM emails WHERE email = '$email_cliente'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
if (@count($dados) == 0) {
	//Salvar dados no banco de dados
	$res = $pdo->prepare("INSERT INTO emails (nome, email, ativo) VALUES (:nome, :email, :ativo)");

	$res->bindValue(":email", $_POST['email-footer']);
	$res->bindValue(":ativo", "Não");
	$res->execute();
} else {
	echo 'Email já existe no banco de dados';
}
