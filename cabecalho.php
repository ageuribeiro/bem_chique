<?php
require_once("base.php");
require_once("config.php");
?>
<header class="bg-body-bemchique pb-2">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-body-bemchique rounded">
                <div class="container">
                    <div class="col-lg-2">
                        <div class="d-flex m-auto">
                            <a class="navbar-brand text-light" href="index.php">
                                <img src="img/logotipo/logo-principal.png" alt="logotipo" width="120" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="/">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="about">Sobre</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="contatos">Contatos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-2 mx-auto">
                        <div class="d-flex justify-content-around text-uppercase">
                            <a href="#" class="text-black text-decoration-none" title="Cadastrar novo usuário"><i class='bx bx-user-plus'></i></a>
                            <a href="sistema" class="text-black text-decoration-none" title="Acessar perfil de usuário"><i class='bx bx-log-in-circle'></i></a>
                            <a href="#" class="text-black text-decoration-none" title="Meu carrinho"> <i class='bx bx-shopping-bag'></i> </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>