<?php
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="assets/logotipo/Simbolo-rose.png" type="image/x-icon">
    <title>Bem Chique | E-commerce</title>
</head>
<body>
    <div class="background-container">
        <div class="left-side"></div>
        <div class="right-side"></div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <div class="d-flex mx-auto">
                                <a class="navbar-brand text-light" href="index.php">
                                    <img src="assets/imgs/logo_bemchique.jpg" alt="logotipo" width="100vw" class="rounded-circle m-1">
                                </a>
                            </div>
                            <div class="d-flex mx-auto">
                                <form class="d-flex custom-input" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                            <div class="d-flex mx-auto">
                                <p class="text-uppercase text-black">
                                    <a href="#" class="text-black text-decoration-none">Cadastre-se</a> | 
                                    <a href="#" class="text-black text-decoration-none">Iniciar Sessão</a> | 
                                    <i class="fas fa-shopping-cart"></i>
                                </p>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5 rounded">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">Lançamentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">Mais Vendidos</a>
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
                                    <a class="nav-link text-uppercase" href="#">T-Shirt</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">Moleton</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">Com Desconto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">Lançamento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">Coleção Verão 2K23</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="#">Coleção Inverno 2K23</a>
                                </li>
                            </ul>  
                        </div>
                    </div>
                </nav>
               
                <div class="col col-12">
                    <div class="content d-flex justify-content-center">
                        <!--Inicio Carrossel-->
                        <div id="carrossel-bemchique" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicadores -->
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carrossel-bemchique" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carrossel-bemchique" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carrossel-bemchique" data-bs-slide-to="2"></li>
                                <!-- Adicione mais indicadores para cada imagem -->
                            </ol>

                            <!-- Slides das imagens -->
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active rounded" width="100px" height="50px">
                                    <img src="assets/imgs//img-carrossel-1.jpg" alt="Imagem 1">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="assets/imgs//img-carrossel-1.jpg" alt="Imagem 2">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="assets/imgs//img-carrossel-1.jpg" alt="Imagem 3">
                                </div>
                                <!-- Adicione mais slides para cada imagem -->
                            </div>

                            <!-- Controles de navegação -->
                            <a class="carousel-control-prev" href="#carrossel-bemchique" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carrossel-bemchique" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Próximo</span>
                            </a>
                        </div>

                        <!--Final Carrossel-->
                    </div>
                </div>  
                
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>