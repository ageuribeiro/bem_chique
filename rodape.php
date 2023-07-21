<?
    include_once ('base.php');
?>

<!-- Footer Section Begin -->
<footer class="footer bg-rosa-blush py-3">
    <div class="container text-center">
        <div class="row m-3">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="footer align-items-center justify-content-center">
                <h6 class="mb-5">Fale Conosco</h6>
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logo_bemchique.jpg" alt="logo" width="125" class="rounded-circle"></a>
                    </div>
                    <ul class="navbar navbar-nav">
                        <!--<li class="navbar-item"><?php echo $endereco_loja ?></li>-->
                        <li class="navbar-item">Telefone: <?php echo $telefone ?></li>
                        <li class="navbar-item">Email: <?php echo $email ?></li>
                    </ul>
                    <h6 class="mt-5">Formas de pagamento</h6>
                    <div class="footer__copyright__payment" class="my-5">
                        <i class="fa-brands fa-cc-visa"></i>
                        <i class="fa-brands fa-cc-mastercard"></i>
                        <i class="fa-brands fa-pix"></i>
                        <i class="fa-solid fa-barcode"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 justify-content-center">
                <h6 class="mb-5">Principais Links</h6>
                <ul class="list-unstyled text-start">
                    <li><a href="contatos.php" class="text-decoration-none text-dark">Contatos</a></li>
                    <li><a href="sobre.php" class="text-decoration-none text-dark">Sobre</a></li>
                    <li><a href="carrinho.php" class="text-decoration-none text-dark">Carrinho</a></li>
                    <li><a href="blog.php" class="text-decoration-none text-dark">Blog</a></li>
                    <li><a href="lista-produtos" class="text-decoration-none text-dark">Lista de Produtos</a></li>
                    <li><a href="categorias.php" class="text-decoration-none text-dark">Categorias</a></li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="footer__widget">
                <h6 class="mb-5">Nossas Redes Sociais</h6>
                <nav class="navbar navbar-expand-lg bg-transparent">
                    <div class="container-fluid align-items-center justify-content-center">
                        <div class="align-items-center justify-content-center">
                            <a target="_blank" title="Ir para a página do Facebook" class="mx-3" href="#"><i class="bi bi-facebook text-secondary fs-4"></i></a>
                            <a target="_blank" title="Ir para a página do Instagram" class="mx-3" href="<?php echo $instagram;?>"><i class="bi bi-instagram fs-4 text-secondary"></i></a>
                            <a target="_blank" title="Envie mensagem pelo whatsapp" class="mx-3" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="bi bi-whatsapp fs-4 text-secondary"></i></a>
                        </div>
                    </div>
                </nav>
                   
                    <div class="my-5">
                        <h6 class="mt-5">Ainda não possui Cadastro?</h6>
                        <p>Insira seu email para se cadastrar em nosso site!!</p>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col col-8">
                                    <input type="email" class="form-control bg-light opacity-50" placeholder="Insira seu Email" required>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-secondary">Cadastre-se</button>
                                </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p class="d-flex justify-content-center small-text "> 
                            All right reserved. Copyright &copy;
                            | <?php echo date('Y'); ?>         
                            | Loja Virtual <img src="img/logotipo/Simbolo-preto.png" alt="logotipo" width="25px"> Bem Chique <i class="fa fa-heart mx-2" aria-hidden="true"></i> by <a class="text-info" href="https://www.channelsystem.com.br" target="_blank">Channel System</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="js/mascara.js"></script>
</body>

</html>