<?php
require_once("../../conexao.php");
require_once("../../config.php");

@session_start();
$_SESSION['nivel_usuario'] == 'Owner';
$usuarioAutenticado = false;

//verificar se o usuário está autenticado
if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Owner') {
    echo "<script type='text/javascript'> window.location='../index.php' </script>";
}


//variaveis para o menu
$pag = @$_GET["pag"];
$menu1 = "dashboard";
$menu2 = "categorias";
$menu3 = "produtos";
$menu4 = "clientes";
$menu5 = "pedidos";
$menu6 = "vendas";
$menu7 = "estoque";
$menu8 = "carrinho";
$menu9 = "pagamentos";
$menu10 = "blogs";
$menu11 = "chat";
$menu12 = "promocoes";

//CONSULTAR O BANCO DE DADOS E TRAZER OS DADOS DO USUÁRIO
$res = $pdo->query("SELECT * FROM usuarios where id = '$_SESSION[id_usuario]'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$nome_usuario = @$dados[0]['nome'];
$function = @$dados[0]['position'];
$email_usuario = @$dados[0]['email'];
$cpf_usuario = @$dados[0]['cpf'];
$img_usuario = @$dados[0]['image'];
$senha_usuario = @$dados[0]['senha'];
$confirmar_senha_usuario = @$dados[0]['senha'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="img/logotipo/simbolo-preto.png" type="image/x-icon">
    <title>Manager Panel - Bem Chique</title>
</head>

<body>
    <div class="menu">
        <nav class="sidebar fade-in slide-in" id="sidebar-menu">
            <div class="logo_content">
                <div class="logo">
                    <img src="img/logotipo/logo_bemchique.jpg" alt="#" class="rounded-circle">
                    <div class="logo_name"><a href="../index.php"><?php echo $nome_loja ?></a></div>
                </div>
            </div>
            <i class='bx bx-menu' id="toggle"></i>
            <ul class="sidebar-menu">
                <li>
                    <i class='bx bx-search icon'></i>
                    <input type="search" name="search" id="search" placeholder="Search...">
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu1) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu1 ?>">
                        <i class='bx bx-bar-chart icon'></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu2) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu2 ?>">
                        <i class='bx bx-category icon'></i>
                        <span class="links_name">Category</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu3) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu3 ?>">
                        <i class='bx bx-cart-add icon'></i>
                        <span class="links_name">Products</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu4) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu4 ?>">
                        <i class='bx bx-user icon'></i>
                        <span class="links_name">Customer</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu5) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu5 ?>">
                        <i class='bx bx-receipt icon'></i>
                        <span class="links_name">Orders</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu6) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu6 ?>">
                        <i class='bx bx-money-withdraw icon'></i>
                        <span class="links_name"> Sales</span>
                    </a>
                    <span class="tooltip">Dashboard</span>>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu7) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu7 ?>">
                        <i class='bx bx-box icon'></i>
                        <span class="links_name">Stock</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu8) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu8 ?>">
                        <i class='bx bx-cart icon'></i>
                        <span class="links_name">Cart</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu9) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu9 ?>">
                        <i class='bx bx-coin icon'></i>
                        <span class="links_name">Pay</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu10) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu10 ?>">
                        <i class='bx bx-bookmark icon'></i>
                        <span class="links_name">Blogs</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu11) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu11 ?>">
                        <i class='bx bx-chat icon'></i>
                        <span class="links_name">Chat</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li class="sidebar-menu-link <?php if ($pag === $menu12) echo 'active'; ?>">
                    <a href="index.php?pag=<?php echo $menu12 ?>">
                        <i class='bx bx-chat icon'></i>
                        <span class="links_name">Promoções</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
            </ul>
            <div class="profile-content">
                <div class="profile">
                    <div class="profile-details">
                        <div class="user-profile">
                            <img src="<?php echo @$img_usuario; ?>" alt="image-profile">
                            <i class='bx bx-cog settingsProfile'></i>
                        </div>
                        <div class="name_job">
                            <div class="name"><?php echo @$nome_usuario; ?></div>
                            <div class="job"><?php echo @$function; ?></div>
                        </div>
                    </div>
                    <i class="bx bx-log-out" id="log_out"></i>
                </div>
            </div>
        </nav>
    </div>

    <main class="content">
        <div class="pages fade-in slide-in" id="content-pages">
            <div id="title-top-table" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
                <h2 class="h2 first-letter-uppercase"><?php echo $pag; ?></h2>
            </div>

            <?php if ($pag == null) {
                include_once("dashboard.php");
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
            } else if ($pag == $menu12) {
                include_once($menu12 . ".php");
            } else {
                include_once("dashboard.php");
            }
            ?>
        </div>
    </main>

    <!--  Modal Perfil-->
    <div class="modal fade" id="modalProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
                    <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <form id="form-perfil" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group my-3">
                            <div class="imagem-container">
                                <img src="<?php echo @$img_usuario; ?>" alt="picture-profile" name="picture-profile-edit" id="picture-profile-edit" class="rounded-circle picture-profile-edit">
                            </div>
                            <input value="<?php echo @$img_usuario ?>" type="file" class="form-control" id="image-usuario" name="image-usuario" placeholder="<?php echo @$img_usuario ?>">
                        </div>

                        <div class="form-group my-3">
                            <label for="nome-usuario">Nome</label>
                            <input value="<?php echo @$nome_usuario ?>" type="text" class="form-control" id="nome-usuario" name="nome-usuario" placeholder="Nome">
                        </div>

                        <div class="form-group my-3">
                            <label for="cpf-usuario">CPF</label>
                            <input value="<?php echo @$cpf_usuario ?>" type="text" class="form-control" id="cpf-usuario" name="cpf-usuario" placeholder="CPF">
                        </div>

                        <div class="form-group my-3">
                            <label for="email-usuario">Email</label>
                            <input value="<?php echo @$email_usuario ?>" type="email" class="form-control" id="email-usuario" name="email-usuario" placeholder="Email">
                        </div>

                        <div class="row my-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input value="<?php echo @$senha_usuario ?>" type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="conf-senha">Confirmar Senha</label>
                                    <input value="<?php echo @$confirmar_senha_usuario ?>" type="password" class="form-control" id="conf-senha" name="conf-senha" placeholder="Senha">
                                </div>
                            </div>
                        </div>
                        <small>
                            <div id="mensagem-perfil" class="mr-4"></div>
                        </small>
                    </div>
                    <div class="modal-footer">
                        <input value="<?php echo $_SESSION['id_usuario'] ?>" type="hidden" name="txtid" id="txtid">
                        <input value="<?php echo $_SESSION['cpf_usuario'] ?>" type="hidden" name="antigo" id="antigo">

                        <button type="button" id="btn-fechar-perfil" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="btn-salvar-perfil" id="btn-salvar-perfil" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script JQuery para finalizar a sessão-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="static/js/script.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>