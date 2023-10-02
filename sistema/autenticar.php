<?php
session_start();
require_once("../conexao.php");

$response = array(); // Inicializa um array para armazenar a resposta

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email_login']) && isset($_POST['senha_login'])) {
        $email = $_POST['email_login'];
        $senha = $_POST['senha_login'];

        $senha_cripto = md5($senha);

        $res = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha_cripto = '$senha_cripto'");
        $dados = $res->fetchAll(PDO::FETCH_ASSOC);

        if (count($dados) > 0) {
            $_SESSION['id_usuario'] = $dados[0]['id'];
            $_SESSION['nome_usuario'] = $dados[0]['nome'];
            $_SESSION['email_usuario'] = $dados[0]['email'];
            $_SESSION['cpf_usuario'] = $dados[0]['cpf'];
            $_SESSION['nivel_usuario'] = $dados[0]['nivel'];

            if($_SESSION['nivel_usuario'] == 'Owner'){
                echo "<script language='javascript'>window.location='painel-admin'</script>";
            } 

            if($_SESSION['nivel_usuario'] == 'User'){
                echo "<script language='javascript'>window.location='painel-client'</script>";
            }
            
        } else {
            $response['success'] = false;
            $response['message'] = 'Credenciais inválidas.';
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'Campos de email e senha não foram fornecidos.';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'Acesso não autorizado.';
}


?>
