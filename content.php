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
                    if(isset($_POST['pesquisar'])) {
                        $pesquisar = $_POST['pesquisar'];
                        $search = $pdo->query("SELECT * FROM produtos WHERE nome LIKE '%$pesquisar%'");
                        $res =  $search->fetchAll(PDO::FETCH_ASSOC);
            
                       
                        foreach ($res[$i] as $key => $value) {
                        
                        $id = $res[$i]['id'];
                        $codigo = $res[$i]['codigo_gtin'];
                        $nome = $res[$i]['nome'];
                        $decricao = $res[$i]['descricao'];
                        $valor = $res[$i]['valor'];
                        $imagem = $res[$i]['imagem'];
                ?>
                <div class="col-sm-3 mb-4">
                    <div class="card rounded">
                        <img src="<?php echo $imagem; ?>" class="card-img-top" alt="<?php echo $nome; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $nome; ?></h5>
                            <p class="card-text"><?php echo $descricao; ?></p>
                            <p class="card-text">Preço: <span class="badge bg-secondary">R$: <?php echo $valor; ?></span></p>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                else {
                    $query = $pdo->query("SELECT * FROM produtos order by id desc ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);
        
                    if (count($res) > 0) {
                        foreach ($res as $key) {
                        
        
                        $id = $res[$i]['id'];
                        $codigo = $res[$i]['codigo_gtin'];
                        $nome = $res[$i]['nome'];
                        $quantidade = $res[$i]['quantidade'];
                        $decricao = $res[$i]['descricao'];
                        $cor = $res[$i]['cor'];
                        $valor = $res[$i]['valor'];
                        $observacao = $res[$i]['observacao'];
                        $imagem = $res[$i]['imagem'];
                        
                    
                ?>
            
                <div class="col-sm-3 mb-4">
                    <div class="card rounded">
                        <img src="img/produtos/t-shirt-azul-faca-o-bem.jpeg" class="card-img-top" alt="t-shirt-azul-faca-o-bem">
                        <div class="card-body">
                            <h5 class="card-title"> T-Shirt <span> Faça o bem</span></h5>
                            <p class="card-text"> Descrição do Produto </p>
                            <p class="card-text"> Preço: <span class="badge bg-secondary">R$: XX,XX</span></p>
                        </div>
                    </div>
                </div>
              <?php 
                    }
                }else{
                    echo "<p class='text-center my-5'>Nenhum produto encontrado.</p>";
                }
            }
            ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 sidebar">
            <div class="content-section my-5">
                <h3>Novidades</h3>
                <p class="text-muted small"> Acompanhe as novidades em postagens, anúncios e lançamentos da bem chique.</p>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-light">Últimas Postagens</li>
                    <li class="list-group-item list-group-item-light">Anúncios</li>
                    <li class="list-group-item list-group-item-light">Calendários</li>
                    <li class="list-group-item list-group-item-light">Redes Sociais</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="sidebar_widget_right">
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid align-items-center justify-content-center">
            <div class="align-items-center justify-content-around">
                <a target="_blank" title="Ir para a página do Facebook" class="mx-3" href="#"><i class="bi bi-facebook text-secondary fs-4"></i></a>
                <a target="_blank" title="Ir para a página do Instagram" class="mx-3" href="<?php echo $instagram; ?>"><i class="bi bi-instagram fs-4 text-secondary"></i></a>
                <a target="_blank" title="Envie mensagem pelo whatsapp" class="mx-3" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="bi bi-whatsapp fs-4 text-secondary"></i></a>
            </div>
        </div>
    </nav>
</div>