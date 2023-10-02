<?php
    require_once("cabecalho.php");
?>
<!-- Contact Section Begin -->
<section class="contact spad bg-white pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                <div class="contact__widget">
                    <span class="icon_whatsapp text-info">
                        <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="bi bi-whatsapp"></i></a>
                    </span>
                    <h6>Whatsapp</h6>
                    <p><?php echo $whatsapp ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                <div class="contact__widget">
                    <span><i class="bi bi-clock-history"></i></span>
                    <h6>Horário Atendimento</h6>
                    <p>09:00 ás 19:00 </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                <div class="contact__widget">
                    <span><i class="bi bi-envelope"></i></span>
                    <h6>Email</h6>
                    <p><?php echo $email ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->


<!-- Contact Form Begin -->
<div class="contact-form spad bg-white pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex align-items-center justify-content-center py-5">
                    <h4>Contate-nos</h4>
                </div>
            </div>
        </div>
        <form method="POST" class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu Nome">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Seu Email">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Seu Whatsapp">
                    </div>
                    <div class="col-lg-12 text-center my-3">
                        <textarea name="mensagem" id="mensagem" rows="6" class="form-control" placeholder="Sua Mensagem"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12">
                        <small>
                            <div class="text-center my-3 text-info d-flex align-items-center justify-content-center" id="contato_mensagem">

                            </div>
                        </small>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 my-3 mb-5">
                        <div class="text-center">
                            <button name="btn-enviar-email" id="btn-enviar-email" type="button" class="btn btn-success">Enviar Mensagem</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- Contact Form End -->

<?php
require_once("rodape.php");
?>
<script type="text/javascript">
    $('#btn-enviar-email').click(function(event) {
        event.preventDefault();
        $('#contato_mensagem').addClass('text-info');
        $('#contato_mensagem').removeClass('text-danger');
        $('#contato_mensagem').removeClass('text-success');
        $('#contato_mensagem').text('Enviando...');
        $.ajax({
            url: "enviar.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(msg) {
                if (msg.trim() === 'Enviado com sucesso!!!') {
                    $('#contato_mensagem').removeClass('text-info');
                    $('#contato_mensagem').addClass('text-success');
                    $('#contato_mensagem').text(msg);
                    $('#email').val('');
                    $('#nome').val('');
                    $('#mensagem').val('');
                    $('#telefone').val('');
                } else if (msg.trim() === 'Preencha o campo nome.') {
                    $('#contato_mensagem').addClass('text-danger');
                    $('#contato_mensagem').text(msg);
                }  else if (msg.trim() === 'Preencha o campo telefone.') {
                    $('#contato_mensagem').addClass('text-danger');
                    $('#contato_mensagem').text(msg);
                } else if (msg.trim() === 'Preencha o campo email.') {
                    $('#contato_mensagem').addClass('text-danger');
                    $('#contato_mensagem').text(msg);
                } else if (msg.trim() === 'Preencha o campo Mensagem.') {
                    $('#contato_mensagem').addClass('text-danger');
                    $('#contato_mensagem').text(msg);
                }else {
                    $('#contato_mensagem').addClass('text-danger');
                    // $('#contato_mensagem').text('Deu erro ao Enviar o formulário');
                    $('#contato_mensagem').text(msg);
                }
            }
        });
    });
</script>