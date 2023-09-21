<?php
session_start();
require_once("../../conexao.php");
    
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['password'];
}


	$senha_cripto = md5($senha);

    $res = $pdo->query("SELECT * FROM usuarios where (email = '$email' or cpf = '$email') and senha_cripto = '$senha_cripto' "); 
    $dados = $res->fetchAll(PDO::FETCH_ASSOC);
    
    if(@count($dados) > 0){
    	$_SESSION['id_usuario'] = $dados[0]['id'];
    	$_SESSION['email_usuario'] = $dados[0]['email'];
    	$_SESSION['nivel_usuario'] = $dados[0]['nivel'];

    	if($_SESSION['nivel_usuario'] == 'Owner'){
			header("Location: ../painel-admin/index.php");
    	}
		
    	if($_SESSION['nivel_usuario'] == 'Customer'){
    		header("Location: ../painel-client/index.php");
    	}
	}
    // }else{
    // 	echo "<script language='javascript'> window.alert('Dados Incorretos!') </script>";
    // 	echo "<script language='javascript'> window.location='../index.php' </script>";
    // }
?>