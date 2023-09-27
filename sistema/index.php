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

<<<<<<< HEAD
<head>
   <title>Login - <?php echo $nome_loja ?></title>

   <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

=======
   <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

>>>>>>> 200efd2ecffc0118b72a6811c14835339ff46d13
   <link rel="shortcut icon" href="./../img/logotipo/simbolo-preto.png" type="image/x-icon">
   <link rel="icon" href="./../img/logotipo/simbolo-preto.png" type="image/x-icon">
</head>

<<<<<<< HEAD
<body>
   <main id="container">
      <form id="login_form" action="validation/autenticar.php" method="POST" name="form-login" enctype="multipart/form-data">
         <div id="form_header">
            <h1>Login</h1>
            <i id="mode_icon" class='bx bxs-moon'></i>
         </div>
         <div id="social_media">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-google'></i></a>
         </div>
         <div id="inputs">
            <div class="input-box">
               <label for="email">
                  Email
                  <div class="input-field">
                     <i class='bx bx-envelope'></i>
                     <input type="email" name="email" id="email" required>
                  </div>
               </label>
            </div>
            <div class="input-box">
               <label for="password">
                  Senha
                  <div class="input-field">
                     <i class='bx bx-key'></i>
                     <input type="password" name="password" id="password" required>
                  </div>
               </label>
               <div id="forgot_password" class="small">
                  <a href="#modalRecuperar">
                     Esqueceu sua senha?
                  </a>
               </div>
            </div>
         </div>
         <button type="submit" id="login_button">
            Login
         </button>
         <div id="return_home">
            <a href="../index.php" class="small">
               Volte para a página principal
            </a>
         </div>
         <div id="register">
            <a href="#modalCadastro" class="small">
               Não tem os dados de acesso? Cadastre-se.
            </a>
         </div>

         <!-- Modal -->
         <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                 <input type="password" class="form-control" id="confirmar-senha" name="confirmar-senha" placeholder="Confirmar Senha">
                              </div>
                           </div>
                        </div>
                        <small>
                           <div id="div-mensagem"></div>
                        </small>
                        <div class="modal-footer">
                           <button type="button" id="btn-fechar-cadastrar" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                           <button type="button" id="btn-cadastrar" class="btn btn-info">Cadastrar</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>

         <!-- Modal Recuperar -->
         <div class="modal fade" id="modalRecuperar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                           <input type="email" class="form-control" id="email-recuperar" name="email-recuperar" placeholder="Seu Email">
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
      </form>
   </main>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
=======
   <body>
      <main id="container">
         <form id="login_form" action="validation/autenticar.php" method="POST" name="form-login" enctype="multipart/form-data">
            <div id="form_header">
               <h1>Login</h1>
               <i id="mode_icon" class='bx bxs-moon' ></i>
            </div>
            <div id="social_media">
               <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
               <a href="#"><i class='bx bxl-instagram' ></i></a>
               <a href="#"><i class='bx bxl-google' ></i></a>
            </div>
            <div id="inputs">
               <div class="input-box">
                  <label for="email"> 
                     Email
                     <div class="input-field">
                        <i class='bx bx-envelope' ></i>
                        <input type="email" name="email" id="email" required>
                     </div>
                  </label>
               </div>
               <div class="input-box">
                  <label for="password"> 
                     Senha
                     <div class="input-field">
                        <i class='bx bx-key' ></i>
                        <input type="password" name="password" id="password" required>
                     </div>
                  </label>
                  <div id="forgot_password">
                     <a href="#">
                        Forgot your password?
                     </a>
                  </div>
               </div>
            </div>
            <button type="submit" id="login_button">
               Login
            </button>
         </form>
      </main>  
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
>>>>>>> 200efd2ecffc0118b72a6811c14835339ff46d13

<script type="text/javascript">
   $(document).ready(function() {
      $('#btn-cadastrar').click(function(event) {
         event.preventDefault();

         $.ajax({
            url: "cadastrar.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(msg) {
               if (msg.trim() === 'Cadastrado com Sucesso!') {

                  $('#div-mensagem').addClass('text-success')
                  $('#div-mensagem').text(msg);
                  $('#btn-fechar-cadastrar').click();
                  $('#email_login').val(document.getElementById('email').value);
                  $('#senha_login').val(document.getElementById('senha').value);
               } else {
                  $('#div-mensagem').addClass('text-danger')
                  $('#div-mensagem').text(msg);
               }
            }
<<<<<<< HEAD
         });
      });
   });
=======
            else {
               $('#div-mensagem').addClass('text-danger')
               $('#div-mensagem').text(msg);
            }
         }
      })
   })
>>>>>>> 200efd2ecffc0118b72a6811c14835339ff46d13
</script>

<script type="text/javascript">
   $('#btn-recuperar').click(function(event) {
      event.preventDefault();

      $.ajax({
         url: "recuperar.php",
         method: "post",
         data: $('form').serialize(),
         dataType: "text",
         success: function(msg) {
            if (msg.trim() === 'Senha Enviada para o Email!') {

               $('#div-mensagem-rec').addClass('text-success')
               $('#div-mensagem-rec').text(msg);

            } else if (msg.trim() === 'Preencha o Campo Email!') {
               $('#div-mensagem-rec').addClass('text-success')
               $('#div-mensagem-rec').text(msg);

            } else if (msg.trim() === 'Este email não está cadastrado!') {
               $('#div-mensagem-rec').addClass('text-success')
               $('#div-mensagem-rec').text(msg);
            } else {
               $('#div-mensagem-rec').addClass('text-danger')
               $('#div-mensagem-rec').text('Deu erro ao Enviar o Formulário! Provavelmente seu servidor de hospedagem não está com permissão de envio habilitada ou você está em um servidor local');


            }
         }
      })
   })
</script>

<script type="text/javascript">
   $(document).ready(function() {
      $('#login_form').submit(function(event) {
         event.preventDefault();

         $.ajax({
            url: "validation/autenticar.php",
            method: "post",
            data: $(this).serialize(),
            dataType: "json", // Define o tipo de resposta como JSON
            success: function(response) {
               if (response.success) {
                  // Login bem-sucedido, redireciona ou exibe uma mensagem de sucesso
                  window.location.href = 'página_de_redirecionamento.php'; // Redireciona após o login
                  // Ou exibe uma mensagem de sucesso na página de login
                  // Exemplo: $('#mensagem').text(response.message);
               } else {
                  // Exibe a mensagem de erro na página de login
                  $('#mensagem').text(response.message);
               }
            }
         });
      });
   });
</script>