<?php

require_once("../../../conexao.php");

@session_start();

//CONSULTAR O BANCO DE DADOS E TRAZER OS DADOS DO USUÁRIO
$res = $pdo->query("SELECT * FROM usuarios WHERE id = '$_SESSION[id_usuario]' AND nivel ='Owner'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$nome_usu = @$dados[0]['nome'];
$nivel_usu = @$dados[0]['nivel'];

$categoria = $_POST['categoria'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$keywords = $_POST['keywords'];
$content = $_POST['content'];
$author = $nome_usu;
$date = date('d M Y');

$id = $_POST['txtid2'];

if ($categoria == "") {
	echo 'Preencha o campo categoria!';
	exit();
}

if ($titulo == "") {
	echo 'Preencha o campo titulo!';
	exit();
}

if ($subtitulo == "") {
	echo 'Preencha o campo subtítulo!';
	exit();
}

if ($keywords == "") {
	echo 'Preencha o campo keywords!';
	exit();
}

if ($content == "") {
	echo 'Preencha o campo content!';
	exit();
}

$titulo_novo = strtolower( preg_replace("[^a-zA-Z0-9-]", "-", 
        strtr(utf8_decode(trim($titulo)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
$titulo_url = preg_replace('/[ -]+/' , '-' , $titulo_novo);

$titulo_antigo = $_POST['titulo'];
$id = $_POST['txtid2'];

if($titulo == ""){
	echo 'Preencha o campo título!';
	exit();
}

if ($titulo_novo != $titulo_antigo) {
	$res = $pdo->query("SELECT * FROM blog where id = '$id'");
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	if (@count($dados) > 0) {
		echo 'A nova postagem foi cadastrada no banco!';
		exit();
	}
}

if ($id == "") {
	$res = $pdo->prepare("INSERT INTO blog (categoria, titulo, subtitulo, keywords, content, author, date) VALUES (:categoria, :titulo, :subtitulo, :keywords, :content, :author, :date)");
} else {
	$res = $pdo->prepare("UPDATE categorias SET categoria = :categoria , titulo = :titulo , subtitulo = :subtitulo , keywords = :keywords , content = :content , author = :author , date = :date  WHERE id = :id");
	$res->bindValue(":id", $id);
}

$res->bindValue(":categoria", $categoria);
$res->bindValue(":titulo", $titulo);
$res->bindValue(":subtitulo",$subtitulo);
$res->bindValue(":keywords",$keywords);
$res->bindValue(":content",$content);
$res->bindValue(":author",$author);
$res->bindValue(":date",$date);
$res->execute();


echo 'Postado com Sucesso!';
