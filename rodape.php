<?
include_once('base.php');
?>

<!-- Footer Section Begin -->
<footer class="footer bg-rosa-blush py-3">
    <div class="container text-center">
        <div class="row m-3">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer align-items-center justify-content-center">
                    <small>
                        <h6 class="mb-5 small">Fale Conosco</h6>
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logotipo/logo-principal.png" alt="logo" width="80" class="rounded-circle"></a>
                        </div>
                        <div class="my-5">
                            <p class="small"> Telefone: <?php echo $telefone ?></p>
                            <p class="small"> Email: <?php echo $email ?></p>
                        </div>
                        <h6 class="mt-5">Formas de pagamento</h6>
                        <div class="footer__copyright__payment" class="my-5">
                            <i class="fa-brands fa-cc-visa" aria-hidden="true"></i>
                            <i class="fa-brands fa-cc-mastercard" aria-hidden="true"></i>
                            <i class="fa-brands fa-pix" aria-hidden="true"></i>
                            <i class="fa-solid fa-barcode" aria-hidden="true"></i>
                        </div>
                    </small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 ">
                <div class="d-block align-items-center justify-content-center">
                    <h6 class="mb-5 small"><small> Principais Links </small></h6>
                    <ul class="list-unstyled text-start text-center small">
                        <li class="my-3 small"><a href="contatos.php" class="text-decoration-none text-dark">Contatos</a></li>
                        <li class="my-3 small"><a href="sobre.php" class="text-decoration-none text-dark">Sobre</a></li>
                        <li class="my-3 small"><a href="carrinho.php" class="text-decoration-none text-dark">Carrinho</a></li>
                        <li class="my-3 small"><a href="blog.php" class="text-decoration-none text-dark">Blog</a></li>
                        <li class="my-3 small"><a href="lista-produtos" class="text-decoration-none text-dark">Lista de Produtos</a></li>
                        <li class="my-3 small"><a href="categorias.php" class="text-decoration-none text-dark">Categorias</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="d-block align-items-center justify-content-center">
                    <h6 class="my-5">Ainda não possui Cadastro?</h6>
                    <p class="my-5">Insira seu email para receber newsletter.</p>
                    <form action="enviar-footer.php" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col col-8">
                                <input type="email" id="email-footer" name="email-footer" class="form-control bg-light opacity-50" placeholder="Insira seu Email" required>
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
                        | Loja Virtual <img src="img/logotipo/Simbolo-preto.png" alt="logotipo" width="25px"> Bem Chique <i class="fa fa-heart mx-2" aria-hidden="true"></i> by <a class="text-info" href="https://www.channelsystem.com.br" target="_blank"> Channel System</a>
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
</body>

</html>