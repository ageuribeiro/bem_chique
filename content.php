<?php
require_once 'conexao.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="col-12 my-5">
                <div class="content d-flex justify-content-center">
                    <div class="d-flex mx-auto">
                        <form class="d-flex custom-input " role="search">
                            <input class="form-control me-2 opacity-50" id="search" name="search" type="search" placeholder="Deseja buscar um produto?" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="grade row">

                <?php

                if (isset($_GET['search']) && ($_GET['search'] != "")) {

                    $searchTerm = $_GET['search'];
                    $query = $pdo->prepare('SELECT * FROM produtos WHERE nome LIKE :searchTerm or categoria LIKE :searchTerm ORDER BY id DESC');
                    $query->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
                    $query->execute();
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    $query = $pdo->query("SELECT * FROM produtos ORDER BY id DESC ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    for ($i = 0; $i < count($res); $i++) {
                        foreach ($res[$i] as $key => $value) {
                        }

                        $id = $res[$i]['id'];
                        $codigo = $res[$i]['codGTIN'];
                        $nome = $res[$i]['nome'];
                        $quantidade = $res[$i]['quantidade'];
                        $cor = $res[$i]['cor'];
                        $valor = $res[$i]['valor'];
                        $observacao = $res[$i]['observacao'];
                        $imagem = $res[$i]['imagem'];
                ?>
                        <div class="col-sm-3 mb-4">
                            <div class="card rounded">
                                <img src="img/produtos/<?php echo $imagem; ?>" class="card-img-top" alt="<?php echo $nome; ?>">
                                <div class="card-body">
                                    <h6 class="card-title text-center"><?php echo $nome; ?></h6>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <p class="badge bg-success mb-2">R$: <?php echo $valor; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-primary btn-md">
                                                <a href="carrinho.php?add_to_cart=<?php echo $id; ?>" class="text-white" title="Adicionar ao carrinho">Adicionar</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }

                ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 sidebar">
            <div class="content-section my-5">
                <h3>Novidades</h3>
                <p class="text-muted small"><small>Acompanhe as novidades em postagens, anúncios e lançamentos da bem chique.</small></p>
                <ul class="list-group">

                    <li class="list-group-item list-group-item-light">Anúncios
                        <div>

                        </div>
                    </li>
                    <li class="list-group-item list-group-item-light">Promoções
                        <div>

                        </div>
                    </li>
                    <li class="list-group-item list-group-item-light">Últimas Postagens
                        <ul>
                            <?php
                            //SELECT * FROM blog ORDER BY data_publicacao DESC LIMIT 3;
                            $query = $pdo->query("SELECT * FROM blog ORDER BY date DESC LIMIT 3");
                            $res = $query->fetchAll(PDO::FETCH_ASSOC);

                            for ($i = 0; $i < count($res); $i++) {
                                foreach ($res[$i] as $key => $value) {
                                }
                                $title = $res[$i]['titulo'];
                                $date = $res[$i]['date'];
                                $url_article = $res[$i]['url_article'];
                                $formattedDate = date("F j, Y", strtotime($date));

                            ?>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="blog#<?php echo $url_article ?>">
                                        <div class="col-lg-8">
                                            <h6 class="mb-0"><?php echo $title ?></h6>
                                            <small class="text-body-secondary"><?php echo $formattedDate ?></small>
                                        </div>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="sidebar_widget_right">
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid align-items-center justify-content-center">
            <div class="align-items-center justify-content-around">
                <a target="_blank" title="Ir para a página do Facebook" class="mx-3" href="<?php echo $facebook; ?>"><i class="bi bi-facebook text-secondary fs-4"></i></a>
                <a target="_blank" title="Ir para a página do Instagram" class="mx-3" href="<?php echo $instagram; ?>"><i class="bi bi-instagram fs-4 text-secondary"></i></a>
                <a target="_blank" title="Envie mensagem pelo whatsapp" class="mx-3" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="bi bi-whatsapp fs-4 text-secondary"></i></a>
            </div>
        </div>
    </nav>
</div>