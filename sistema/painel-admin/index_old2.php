<?php
require_once("../../conexao.php");
@session_start();
//verificar se o usuário está autenticado
if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Admin') {
    echo "<script type='text/javascript'> window.location='../index.php' </script>";
}

//variaveis para o menu
$pag = @$_GET["pag"];
$menu1 = "produtos";
$menu2 = "categorias";
$menu3 = "promocoes";
$menu4 = "clientes";
$menu5 = "vendas";
$menu6 = "pedidos";
$menu7 = "estoque";
$menu8 = "carrinhos";
$menu9 = "pagamentos";
$menu10 = "retiradas";
$menu11 = "chat";

//CONSULTAR O BANCO DE DADOS E TRAZER OS DADOS DO USUÁRIO
$res = $pdo->query("SELECT * FROM usuarios where id = '$_SESSION[id_usuario]'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$nome_usu = @$dados[0]['nome'];
$email_usu = @$dados[0]['email'];
$cpf_usu = @$dados[0]['cpf'];
$img_usu = @$dados[0]['image'];
?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <script src="./js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ageu Ribeiro">
    <meta name="generator" content="Ageu Ribeiro 0.115.4">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        media="all">
    <link rel="stylesheet" href="../css/style.css" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="../css/dashboard.css" media="all">

    <!-- Favicons -->
    <link rel="shortcut icon" href="../../img/logotipo/simbolo-preto.png" type="image/x-icon">
    <link rel="icon" href="../../img/logotipo/simbolo-preto.png" type="image/x-icon">

    <!-- Custom styles for this template -->

    <title>Painel Administrativo -
        <?php echo @$nome_loja; ?>
    </title>
</head>

<body>
    <header class="navbar sticky-top p-0 shadow" data-bs-theme="dark">
        
        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false"
                    aria-label="Toggle search">
                    <i class="fa fa-search mx-2"></i>
                </button>
            </li>
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg class="bi">
                        <use xlink:href="#list" />
                    </svg>
                </button>
            </li>
        </ul>

        <div id="navbarSearch" class="navbar-search w-100 collapse">
            <form action="#">
                <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-sucess"> Buscar </button>
            </form>
            
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-2 col-lg-3 p-0 bg-gradient-preto-chumbo">
                <div class="offcanvas-md offcanvas-end bg-transparent" tabindex="-1" id="sidebarMenu"
                    aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">Bem Chique</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#sidebarMenu" aria-label="Close">

                        </button>
                    </div>
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <span>Cadastros</span>
                        </h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" href="index.php?pag=<?php echo $menu2 ?>">
                                    <i class="fa fa-list-alt mx-2" aria-hidden="true"></i>Categoria
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" href="index.php?pag=<?php echo $menu1 ?>">
                                    <i class="fa fa-pencil-square mx-2" aria-hidden="true"></i>
                                    Produto
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center   " href="index.php?pag=<?php echo $menu4 ?>">
                                    <i class="fa fa-user mx-2" aria-hidden="true"></i>
                                    Cliente
                                </a>
                            </li>
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <span>Consultas</span>
                        </h6>
                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center   " href="index.php?pag=<?php echo $menu4 ?>">
                                    <i class="fa fa-users mx-2" aria-hidden="true"></i>
                                    Clientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center   " href="#">
                                    <i class="fa fa-money mx-2" aria-hidden="true"></i>
                                    Vendas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center   " href="#">
                                    <i class="fa fa-first-order mx-2" aria-hidden="true"></i>
                                    Pedidos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center   " href="#">
                                    <i class="fa fa-th mx-2" aria-hidden="true"></i>
                                    Estoque
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center   " href="#">
                                    <i class="fa fa-cart-arrow-down mx-2" aria-hidden="true"></i>
                                    Carrinhos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center   " href="#">
                                    <i class="fa fa-credit-card mx-2" aria-hidden="true"></i>
                                    Pagamentos
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center   " href="#">
                                    <i class="fa fa-comments-o mx-2" aria-hidden="true"></i>
                                    Chat
                                </a>
                            </li>
                        </ul>

                        <hr class="my-3">

                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="img-profile rounded-circle mx-auto d-flex align-middle justify-content-center"
                                        src="<?php echo @$img_usu; ?>">
                                    <span class="d-flex align-middle justify-content-center small">
                                        <?php echo @$nome_usu ?>
                                    </span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#ModalPerfil">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
                                        Editar Perfil
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../logout.php">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                                        Sair
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-cogs mx-2" aria-hidden="true"></i>
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-sign-out mx-2"></i>
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="row">
                    <div class="container-fluid mx-0 px-0">
                        <?php if ($pag == null) {
                            include_once("home.php");

                        } else if ($pag == $menu1) {
                            include_once($menu1 . ".php");

                        } else if ($pag == $menu2) {
                            include_once($menu2 . ".php");

                        } else if ($pag == $menu3) {
                            include_once($menu3 . ".php");

                        } else if ($pag == $menu4) {
                            include_once($menu4 . ".php");

                        } else if ($pag == $menu5) {
                            include_once($menu5 . ".php");

                        } else if ($pag == $menu6) {
                            include_once($menu6 . ".php");

                        } else if ($pag == $menu7) {
                            include_once($menu7 . ".php");

                        } else if ($pag == $menu8) {
                            include_once($menu8 . ".php");

                        } else if ($pag == $menu9) {
                            include_once($menu9 . ".php");

                        } else if ($pag == $menu10) {
                            include_once($menu10 . ".php");

                        } else if ($pag == $menu11) {
                            include_once($menu11 . ".php");

                        } else {
                            include_once("home.php");
                        }
                        ?>
                    </div>
                </div>
                
            </main>
        </div>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
        integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG"
        crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>