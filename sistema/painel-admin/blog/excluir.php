<?php

require_once("../../../conexao.php"); 

$id = $_POST['id'];

$pdo->query("DELETE from blog WHERE id = '$id'");

echo 'Artigo excluído com Sucesso!!';

?>