<?php
session_start();
require_once("../../conexao.php");

$response = array(); // Inicializa um array para armazenar a resposta

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $senha = $_POST['password'];

        $senha_cripto = md5($senha);

        $res = $pdo->query("SELECT * FROM usuarios WHERE (email = '$email' OR cpf = '$email') AND senha_cripto = '$senha_cripto'");
        $dados = $res->fetchAll(PDO::FETCH_ASSOC);

        if (count($dados) > 0) {
            $_SESSION['id_usuario'] = $dados[0]['id'];
            $_SESSION['email_usuario'] = $dados[0]['email'];
            $_SESSION['nivel_usuario'] = $dados[0]['nivel'];

            $response['success'] = true;
            $response['message'] = 'Login bem-sucedido.';
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

// Retorna a resposta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
