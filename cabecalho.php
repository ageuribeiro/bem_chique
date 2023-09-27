<?php
require_once("base.php");
require_once("config.php");
?>
<header class="bg-rosa-blush pb-2">
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="d-flex mx-auto">
                            <a class="navbar-brand text-light" href="index.php">
                                <img src="img/logotipo/logo-principal.png" alt="logotipo" width="120" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-rosa-blush rounded">
                <div class="container">
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="./index.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="./about.php">Sobre</a>
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
                    <div class="col col-2 mx-auto">
                        <div class="d-flex justify-content-around text-uppercase">
                            <a href="sistema/cadastrar.php" class="text-black text-decoration-none" title="Cadastrar novo usuário"><i class='bx bx-user-plus' ></i></a>
                            <a href="sistema/index.php" class="text-black text-decoration-none" title="Acessar perfil de usuário"><i class='bx bx-log-in-circle'></i></a>
                            <a href="carrinho.php" class="text-black text-decoration-none" title="Meu carrinho"> <i class='bx bx-shopping-bag' ></i> </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>