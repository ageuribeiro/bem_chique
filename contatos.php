<?php
    require_once("cabecalho.php");
?>
    <!-- Contact Section Begin -->
    <section class="contact spad bg-light pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="bi bi-phone"></i></span>
                        <h6>Telefone</h6>
                        <p><?php echo $telefone ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_whatsapp">
                            <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="bi bi-whatsapp text-info"></i></a>
                        </span>
                        <h6>Whatsapp</h6>
                        <p><?php echo $whatsapp ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="bi bi-clock-history"></i></span>
                        <h6>Horário Atendimento</h6>
                        <p>09:00 ás 19:00 </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
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
    <div class="contact-form spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <h4>Contate-nos</h4>
                    </div>
                </div>
            </div>
            <form method="POST">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu Nome">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Seu Email">
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
                        <div class="text-center my-3 text-info d-flex align-items-center justify-content-center" id="div-mensagem">
                            
                        </div>
                    </small>
                    </div>
                    <div class="col my-3">
                        <div class="text-center">
                            <button name="btn-enviar-email" id="btn-enviar-email" type="button" class="btn btn-success">Enviar Mensagem</button>
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
    $('#btn-enviar-email').click(function(event){
        event.preventDefault();
        $('#div-mensagem').addClass('text-secondary');
        $('#div-mensagem').text('Enviando...');
        $.ajax({
            url:"enviar.php",
            method:"post",
            data:$('form').serialize(),
            dataType:"text",
            success: function(msg){
                if(msg.trim()==='Enviado com Sucesso!'){
                    $('#div-mensagem').addClass('text-success');
                    $('#div-mensagem').text(msg);
                    $('#nome').val('');
                    $('#email').val('');
                    $('#telefone').val('');
                    $('#mensagem').val('');
                }else{
                    $('#div-mensagem').addClass('text-danger');
                    $('#div-mensagem').text('Erro na tentativa de envio do formulário.\n\r Provavelmente seu servidor de hospedagem não está habilitado ou você está em um servidor local.');
                    //$('#div-mensagem').text(msg);
                }
            }
        });
        
    });    
</script>