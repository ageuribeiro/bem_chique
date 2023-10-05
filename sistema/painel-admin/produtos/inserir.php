<?php

require_once("../../../conexao.php"); 

$code = $_POST['code'];
$nome = $_POST['nome-prod'];
$quantidade = $_POST['quantidade-prod'];
$categoria = $_POST['categoria-prod'];
$cor = $_POST['cor-prod'];
$valor = $_POST['valor-prod'];
$observacao = $_POST['observacao-prod'];
$descricao = $_POST['desc-prod'];


$nome_novo = strtolower( preg_replace("[^a-zA-Z0-9-]", "-", 
        strtr(utf8_decode(trim($nome)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
$nome_url = preg_replace('/[ -]+/' , '-' , $nome_novo);

$antigo = $_POST['antigo'];
$id = $_POST['txtid2'];

if($nome == ""){
	echo 'Preencha o Campo Nome!';
	exit();
}


if($nome != $antigo){
	$res = $pdo->query("SELECT * FROM produtos where nome = '$nome'"); 
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	if(@count($dados) > 0){
			echo 'Produto já consta no Banco de dados';
			exit();
		}
}


//SCRIPT PARA SUBIR FOTO NO BANCO
$caminho = '../../img/produtos/' .@$_FILES['imagem']['name'];
if (@$_FILES['imagem']['name'] == ""){
  $imagem = "sem-foto.jpg";
}else{
  $imagem = @$_FILES['imagem']['name']; 
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 

$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 
@move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida!';
	exit();
}


if($id == ""){
	$res = $pdo->prepare("INSERT INTO produtos (codGTIN, nome, quantidade, categoria, descricao, cor, valor, observacao, imagem) 
							            VALUES (:codGTIN, :nome, :quantidade, :categoria, :descricao, :cor, :valor, :observacao, :imagem)");
	$res->bindValue(":imagem", $imagem);
}else{

	if($imagem == "sem-foto.jpg"){
		$res = $pdo->prepare("UPDATE produtos SET codGTIN = :codGTIN, nome = :nome, quantidade = :quantidade, categoria = :categoria, descricao = :descricao, cor = :cor, valor = :valor, observacao = :observacao WHERE id = :id");
	}else{
		$res = $pdo->prepare("UPDATE produtos SET codGTIN = :codGTIN, nome = :nome, quantidade = :quantidade, categoria = :categoria, descricao = :descricao, cor = :cor, valor = :valor, observacao = :observacao, imagem = :imagem WHERE id = :id");
		$res->bindValue(":imagem", $imagem);
	}

	$res->bindValue(":id", $id);
}
	$res->bindValue(":codGTIN", $code);
	$res->bindValue(":nome", $nome);
	$res->bindValue(":quantidade", $quantidade);
	$res->bindValue(":categoria", $categoria);
	$res->bindValue(":cor", $cor);
	$res->bindValue(":valor", $valor);
	$res->bindValue(":observacao", $observacao);
	$res->bindValue(":descricao", $descricao);

	$res->execute();


echo 'Salvo com Sucesso!!';


?>