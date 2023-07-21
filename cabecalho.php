<?php 
    require_once("base.php");
    require_once("config.php");
?>
<header class="bg-rosa-blush pb-5">    
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="d-flex mx-auto">
                            <a class="navbar-brand text-light" href="index.php">
                                <img src="img/logo_bemchique.jpg" alt="logotipo" width="150" class="rounded-circle">
                            </a>
                        </div>
                        <div class="d-flex mx-auto">
                            <form class="d-flex custom-input " role="search">
                                <input class="form-control me-2 opacity-50" type="search" placeholder="Deseja buscar um produto?" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Buscar</button>
                            </form>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-12">
                            <div class="footer__widget">
                                <nav class="navbar navbar-expand-lg bg-transparent">
                                    <div class="container-fluid align-items-center justify-content-center">
                                        <div class="align-items-center justify-content-center">
                                            <a target="_blank" title="Ir para a página do Facebook" class="mx-3" href="#"><i class="bi bi-facebook text-secondary fs-4"></i></a>
                                            <a target="_blank" title="Ir para a página do Instagram" class="mx-3" href="<?php echo $instagram;?>"><i class="bi bi-instagram fs-4 text-secondary"></i></a>
                                            <a target="_blank" title="Envie mensagem pelo whatsapp" class="mx-3" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="bi bi-whatsapp fs-4 text-secondary"></i></a>
                                        </div>
                                    </div>
                                </nav>
                            </div> 
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-rosa-blush rounded">
                <div class="container">
                    <div class="col col-6">
                        <div class="d-flex justify-content-center">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="./index.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="./about.php">Sobre</a>
                                </li>
                                <li class="dropdown text-uppercase">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Categorias
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">T-SHIRT</a></li>
                                        <li><a class="dropdown-item" href="#">MOLETON</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Com Desconto</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown text-uppercase">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Produtos
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">T-SHIRT</a></li>
                                        <li><a class="dropdown-item" href="#">MOLETON</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Com Desconto</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="contatos.php">Contatos</a>
                                </li>
                            </ul>  
                        </div>
                    </div>
                    <div class="col col-6 mx-auto">
                        <div class="d-flex align-items-center justify-content-center">
                            <p class="text-uppercase text-black">
                                <a href="#" class="text-black text-decoration-none">Cadastre-se</a> | 
                                <a href="sistema" class="text-black text-decoration-none">Iniciar Sessão</a> | 
                                <i class="fas fa-shopping-cart"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>