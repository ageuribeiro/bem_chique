<?php

require_once("../../../conexao.php"); 

@session_start();

$res = $pdo->query("SELECT * FROM usuarios where id = '$_SESSION[id_usuario]'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$nome_usuario = @$dados[0]['nome'];
$email_usuario = @$dados[0]['email'];
$function = @$dados[0]['position'];
$nivel = @$dados[0]['nivel'];

$_SESSION['nome_usuario'] = $nome_usuario;

//verificar se o usuário está autenticado
if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != $nivel) {
    echo "<script language='javascript'> window.location='../index.php' </script>";
	exit;
}

	//Recuperando o nome do usuário da sessão
	$nomeUsuario = $_SESSION['nome_usuario'];
	$inNome = $_POST['nome-categoria'];
	$inDescricao = $_POST['descricao-categoria'];
	$inStatus = $_POST['status-categoria'];
	$dateRegistry = date('d-m-Y');

	// Verificar se as variaveis estão em branco

	$response = "Dados recebidos com sucesso! \nNome: $inNome, \nDescrição: $inDescricao, \nStatus: $inStatus, \nData de Registro: $dateRegistry, \nUsuário: $nomeUsuario";
	echo $response;
?>
