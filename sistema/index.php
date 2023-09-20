<?php
require_once("../conexao.php");

//VERIFICAR SE EXISTE ALGUM CADASTRO NO BANCO, SE NÃO TIVER CADASTRAR O USUÁRIO ADMINISTRADOR
$res = $pdo->query("SELECT * FROM usuarios");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);

if (@count($dados) == 0) {
   @$response = 'Usuário não cadastrado no banco de dados';
}

?>
<head>
   <title>Login - <?php echo $nome_loja ?></title>

   <link rel="stylesheet" href="static/css/style.css">
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

   <link rel="shortcut icon" href="./../img/logotipo/simbolo-preto.png" type="image/x-icon">
   <link rel="icon" href="./../img/logotipo/simbolo-preto.png" type="image/x-icon">
</head>

   <body class="bg-rosa-blush pb-5">
      <header class="bg-rosa-blush pb-5">
         <div class="container">
            <div class="row">
               <div class="col-md-5 mx-auto">
                  <div id="first">
                     <div class="myform form">
                        <div class="logo mb-3">
                           <div class="d-flex mx-auto align-items-center justify-content-center">
                              <a class="navbar-brand text-light" href="index.php">
                                 <img src="../img/logo_bemchique.jpg" alt="logotipo" width="150" class="rounded-circle">
                              </a>
                           </div>
                           <div class="col-md-12 text-center">
                              <h1>Acesso Restrito</h1>
                           </div>
                        </div>
                        <form action="autenticar.php" method="post" name="login" enctype="application/x-www-form-urlencoded">
                           
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" name="email_login" class="form-control" id="email_login"
                                 aria-describedby="emailHelp" placeholder="Insira seu Email" required>
                           </div>
                           
                           <div class="form-group">
                              <label for="exampleInputEmail1">Senha</label>
                              <input type="password" name="senha_login" id="senha_login" class="form-control"
                                 aria-describedby="emailHelp" placeholder="Senha" required>
                           </div>
                           
                           <div class="col-md-12 text-center mt-4">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>
                           
                           <div class="form-group mt-4">
                              <small>
                                 <p><?php echo @$response; ?></p>
                                 <p class="text-center onModalCadastro">Não possui Cadastro? <a href="#" data-toggle="modal"
                                       data-target="#modalCadastro">Cadastre-se</a></p>
                                 <p class="text-center"><a class="text-danger" href="#" data-toggle="modal"
                                       data-target="#modalRecuperar">Recuperar Senha?</a></p>
                              </small>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
   </body>
</html>

<!-- Modal -->
<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form method="post">
               <div class="form-group">
                  <label for="exampleInputEmail1">Nome Completo</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome e Sobrenome">
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email">
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF">
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Inserir Senha">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Confirmar Senha</label>
                        <input type="password" class="form-control" id="confirmar-senha" name="confirmar-senha"
                           placeholder="Confirmar Senha">
                     </div>
                  </div>
               </div>
               <small>
                  <div id="div-mensagem"></div>
               </small>
               <div class="modal-footer">
                  <button type="button" id="btn-fechar-cadastrar" class="btn btn-secondary"
                     data-dismiss="modal">Fechar</button>
                  <button type="button" id="btn-cadastrar" class="btn btn-info">Cadastrar</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Modal Recuperar -->
<div class="modal fade" id="modalRecuperar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form method="post">
               <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="email-recuperar" name="email-recuperar"
                     placeholder="Seu Email">
               </div>
               <small>
                  <div id="div-mensagem-rec"></div>
               </small>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                  <button type="button" id="btn-recuperar" class="btn btn-info">Recuperar</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript">
   $('#btn-cadastrar').click(function (event) {
      event.preventDefault();

      $.ajax({
         url: "cadastrar.php",
         method: "post",
         data: $('form').serialize(),
         dataType: "text",
         success: function (msg) {
            if (msg.trim() === 'Cadastrado com Sucesso!') {

               $('#div-mensagem').addClass('text-success')
               $('#div-mensagem').text(msg);
               $('#btn-fechar-cadastrar').click();
               $('#email_login').val(document.getElementById('email').value);
               $('#senha_login').val(document.getElementById('senha').value);
            }
            else {
               $('#div-mensagem').addClass('text-danger')
               $('#div-mensagem').text(msg);
            }
         }
      })
   })
</script>

<script type="text/javascript">
   $('#btn-recuperar').click(function (event) {
      event.preventDefault();

      $.ajax({
         url: "recuperar.php",
         method: "post",
         data: $('form').serialize(),
         dataType: "text",
         success: function (msg) {
            if (msg.trim() === 'Senha Enviada para o Email!') {

               $('#div-mensagem-rec').addClass('text-success')
               $('#div-mensagem-rec').text(msg);

            } else if (msg.trim() === 'Preencha o Campo Email!') {
               $('#div-mensagem-rec').addClass('text-success')
               $('#div-mensagem-rec').text(msg);

            } else if (msg.trim() === 'Este email não está cadastrado!') {
               $('#div-mensagem-rec').addClass('text-success')
               $('#div-mensagem-rec').text(msg);
            }



            else {
               $('#div-mensagem-rec').addClass('text-danger')
               $('#div-mensagem-rec').text('Deu erro ao Enviar o Formulário! Provavelmente seu servidor de hospedagem não está com permissão de envio habilitada ou você está em um servidor local');


            }
         }
      })
   })
</script>


<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="../js/mascara.js"></script>