<?php
include_once("cabecalho.php");
require_once "conexao.php";


// Obtém a URL da variável de consulta 'route'
$route = isset($_GET['route']) ? $_GET['route'] : '';
$title = isset($_GET['title']) ? $_GET['title'] : '';


// Define as rotas
if ($route === 'blog' && $title !== '') {
    //Consulta ao banco de dados
    $query = $pdo->query("SELECT * FROM blog WHERE url_article = ? ");
    $query->execute([$title]);
    $article = $query->fetch(PDO::FETCH_ASSOC);

    if ($article) {
        include './blog.php';
    } else {
        echo "Artigo não encontrado.";
    }

    // $url_article = $res[$i]['url_article'];

    // if ($route === 'blog/$url_article') {
    //     include './blog.php/#$url_article';
    // }
} elseif ($route === 'home') {
    include './index.php';
} elseif ($route === 'blog') {
    include './blog.php';
} elseif ($route === 'about') {
    include './about.php';
} elseif ($route === 'contatos') {
    include './contatos.php';
}
?>

<body>
    <section id="content">
        <?php
        require_once("content.php");
        ?>
    </section>

    <section id="rodape">
        <?php
        require_once("rodape.php");
        ?>
    </section>
</body>