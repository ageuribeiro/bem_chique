<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Hugo Vasconcelos">

    <title>Painel Administrativo - <?php echo @$nome_loja; ?></title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/style.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Ìcone da barra de navegação -->
    <link rel="shortcut icon" href="../../img/logotipo/simbolo-preto.png" type="image/x-icon">
    <link rel="icon" href="../../img/logotipo/simbolo-preto.png" type="image/x-icon">

</head>

<body>
    <div id="page-top">
        <div id="header" class="header bg-gradient-preto-chumbo">
            <button class="menu-bar rounded d-flex align-middle justify-content-center">
                <i class="fas fa-bars"></i>
            </button>

            <div class="logo-header">
                <a class="navbar-brand text-light d-flex justify-content-center" href="index.php">
                    <div class="sidebar-brand-text mx-auto my-3">
                       
                    </div>
                </a> 
            </div>
            <ul class="navbar-nav sidebar sidebar-dark accordion text-light" id="accordionSidebar">
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Heading -->
                <div class="sidebar-heading">
                    Cadastros
                </div>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-box-open"></i>
                        <span>Produtos</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="index.php?pag=<?php echo $menu1 ?>">Produtos</a>
                            <a class="collapse-item" href="index.php?pag=<?php echo $menu2 ?>">Categorias</a>                        
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-percent"></i>
                        <span>Promoções</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="index.php?pag=<?php echo $menu3 ?>">Promoções</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    Consultas
                </div>
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pag=<?php echo $menu4 ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Clientes</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pag=<?php echo $menu5 ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Vendas</span></a>
                    </li>
                </li>
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pag=<?php echo $menu6 ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Pedidos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pag=<?php echo $menu7 ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Estoque</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pag=<?php echo $menu8 ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Carrinhos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pag=<?php echo $menu9 ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Pagamentos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pag=<?php echo $menu10 ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Retiradas</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pag=<?php echo $menu11 ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Chat</span>
                    </a>
                </li>

                        <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="row">
            <div id="content" class="navigation-header">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-gradient-rose-gold topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    
                </nav>
                <!-- End of Topbar -->
            </div>
        </div>
        <div class="row">
            <!-- Begin Page Content -->

        </div>
    </div>

<!-- /.container-fluid -->
    <!--  Modal Perfil-->
    <div class="modal fade" id="ModalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="form-perfil" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label >Nome</label>
                            <input value="<?php echo @$nome_usu ?>" type="text" class="form-control" id="nome-usuario" name="nome-usuario" placeholder="Nome">
                        </div>

                        <div class="form-group">
                            <label >CPF</label>
                            <input value="<?php echo @$cpf_usu ?>" type="text" class="form-control" id="cpf-usuario" name="cpf-usuario" placeholder="CPF">
                        </div>

                        <div class="form-group">
                            <label >Email</label>
                            <input value="<?php echo @$email_usu ?>" type="email" class="form-control" id="email-usuario" name="email-usuario" placeholder="Email">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Senha</label>
                                    <input value="" type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                    <label >Confirmar Senha</label>
                                    <input value="" type="password" class="form-control" id="conf-senha" name="conf-senha" placeholder="Senha">
                                </div>
                            </div>
                        </div>






                        <small>
                            <div id="mensagem-perfil" class="mr-4">

                            </div>
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

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>

<script type="text/javascript">
    $('#btn-salvar-perfil').click(function(event){
        event.preventDefault();
        
        $.ajax({
            url:"editar-perfil.php",
            method:"post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(msg){
                if(msg.trim() === 'Salvo com Sucesso!'){
                    $('#btn-fechar-perfil').click();
                    window.location='index.php';
                }
                else
                {
                $('#mensagem-perfil').addClass('text-danger')
                $('#mensagem-perfil').text(msg);
                }
            }
        });
    });
</script>
