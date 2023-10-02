<?php
$pag = "produtos";
require_once("../../conexao.php");
@session_start();
//verificar se o usuário está autenticado
if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Owner') {
    echo "<script language='javascript'> window.location='../index.php' </script>";
}

$query = $pdo->query("SELECT COUNT(*) AS SCORE FROM produtos");
$score = $query->fetchColumn();
?>

<div class="mt-4 mb-4 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
    <div class="row mt-4 mb-4">
        <a type="button" class="btn btn-primary btn-sm ml-3 d-none d-md-block" href="index.php?pag=<?php echo $pag ?>&funcao=novo"> <i class='bx bx-plus'></i> Novo Produto</a>
    </div>
</div>

<!-- DataTales Example -->
<div class="table-responsive small">
    <table class="table table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" scope="col">Código GTIN</th>
                <th class="text-center" scope="col">Nome</th>
                <th class="text-center" scope="col">Quantidade</th>
                <th class="text-center" scope="col">Descrição</th>
                <th class="text-center" scope="col">Cor</th>
                <th class="text-center" scope="col">Valor</th>
                <th class="text-center" scope="col">Observação</th>
                <th class="text-center" scope="col">Foto</th>
                <th class="text-center" scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM produtos order by id desc ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }

                $id = $res[$i]['id'];
                $codigo = $res[$i]['codigo_gtin'];
                $nome = $res[$i]['nome'];
                $quantidade = $res[$i]['quantidade'];
                $decricao = $res[$i]['descricao'];
                $cor = $res[$i]['cor'];
                $valor = $res[$i]['valor'];
                $observacao = $res[$i]['observacao'];
                $imagem = $res[$i]['imagem'];
            ?>
                <tr>
                    <td class="text-center align-middle"><?php echo $codigo ?></td>
                    <td class="text-center align-middle"><?php echo $nome ?></td>
                    <td class="text-center align-middle"><?php echo $quantidade ?></td>
                    <td class="text-center align-middle"><?php echo $decricao ?></td>
                    <td class="text-center align-middle"><?php echo $cor ?></td>
                    <td class="text-center align-middle"><?php echo $valor ?></td>
                    <td class="text-center align-middle"><?php echo $observacao ?></td>
                    <td class="text-center align-middle"><img src="../../img/categorias/<?php echo $imagem; ?>" width="50"></td>
                    <td>
                        <a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='btn-bc-primary mr-1' title='Editar produto'><i class='bx bxs-edit icon'></i></a>
                        <a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='btn-bc-danger mr-1' title='Excluir produto'><i class='bx bx-trash icon'></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Modal Dados-->
<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php
                if (@$_GET['funcao'] == 'editar') {
                    $titulo = "Editar Produto";
                    $id2 = $_GET['id'];

                    $query = $pdo->query("SELECT * FROM produtos where id = '" . $id2 . "' ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    $codGTIN2 = $res[0]['codigo_gtin'];
                    $nome2 = $res[0]['nome'];
                    $quantidade2 = $res[0]['quantidade'];
                    $decricao2 = $res[0]['descricao'];
                    $cor2 = $res[0]['cor'];
                    $valor2 = $res[0]['valor'];
                    $observacao2 = $res[0]['observacao'];
                    $imagem2 = $res[0]['imagem'];
                } else {
                    $titulo = "Cadastrar Produto";
                }
                ?>

                <h5 class="modal-title text-primary font-weight-bold" id="exampleModalLabel"><?php echo $titulo ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="codigo-gtin-prod">Código GTIN</label>
                                <input value="<?php echo @$codGTIN2 ?>" type="text" class="form-control" id="codigo-gtin-prod" name="nome-cat" placeholder="Código de barra">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nome-prod">Nome</label>
                                <input value="<?php echo @$nome2 ?>" type="text" class="form-control" id="nome-prod" name="nome-prod" placeholder="Nome">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="quantidade-prod">Quantidade</label>
                                <input value="<?php echo @$quantidade2 ?>" type="text" class="form-control" id="quantidade-prod" name="quantidade-prod" placeholder="0">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="desc-prod">Descrição</label>
                                <input value="<?php echo @$decricao2 ?>" type="text" class="form-control" id="desc-prod" name="desc-prod" placeholder="Descriçao do produto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="cor-prod">Cor</label>
                                <input value="<?php echo @$cor2 ?>" type="text" class="form-control" id="cor-prod" name="cor-prod" placeholder="#000000">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="valor-prod">Valor</label>
                                <input value="<?php echo @$valor2 ?>" type="text" class="form-control" id="valor-prod" name="valor-prod" placeholder="Valor do produto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="observacao-prod">Observação </label>
                                <textarea  class="form-control" name="observacao-prod" id="observacao-prod" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="imagem-prod">Imagem</label>
                        <input type="file" value="<?php echo @$imagem2 ?>" class="form-control-file" id="imagem-prod" name="imagem-prod" onChange="carregarImg();">
                    </div>

                    <?php if (@$imagem2 != "") { ?>
                        <img src="../../img/categorias/<?php echo $imagem2 ?>" width="100" height="100" id="target" class="rounded">
                    <?php  } else { ?>
                        <img src="../../img/categorias/sem-foto.jpg" width="100" height="100" id="target" class="rounded">
                    <?php } ?>
                    <small>
                        <div id="mensagem"></div>
                    </small>
                </div>
                <div class="modal-footer">
                    <input value="<?php echo @$_GET['id'] ?>" type="hidden" name="txtid2" id="txtid2">
                    <input value="<?php echo @$nome2 ?>" type="hidden" name="antigo" id="antigo">

                    <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="btn-salvar" id="btn-salvar" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Deletar -->
<div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <p>Deseja realmente Excluir esta Categoria?</p>

                <div align="center" id="mensagem_excluir" class="">

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-excluir">Cancelar</button>
                <form method="post">

                    <input type="hidden" id="id" name="id" value="<?php echo @$_GET['id'] ?>" required>

                    <button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "novo") {
    echo "<script>$('#modalDados').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "editar") {
    echo "<script>$('#modalDados').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "excluir") {
    echo "<script>$('#modal-deletar').modal('show');</script>";
}

?>




<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM -->
<script type="text/javascript">
    $("#form").submit(function() {
        var pag = "<?= $pag ?>";
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: pag + "/inserir.php",
            type: 'POST',
            data: formData,

            success: function(mensagem) {

                $('#mensagem').removeClass()

                if (mensagem.trim() == "Salvo com Sucesso!!") {

                    //$('#nome').val('');
                    //$('#cpf').val('');
                    $('#btn-fechar').click();
                    window.location = "index.php?pag=" + pag;

                } else {

                    $('#mensagem').addClass('text-danger')
                }

                $('#mensagem').text(mensagem)

            },

            cache: false,
            contentType: false,
            processData: false,
            xhr: function() { // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                    myXhr.upload.addEventListener('progress', function() {
                        /* faz alguma coisa durante o progresso do upload */
                    }, false);
                }
                return myXhr;
            }
        });
    });
</script>





<!--AJAX PARA EXCLUSÃO DOS DADOS -->
<script type="text/javascript">
    $(document).ready(function() {
        var pag = "<?= $pag ?>";
        $('#btn-deletar').click(function(event) {
            event.preventDefault();

            $.ajax({
                url: pag + "/excluir.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function(mensagem) {

                    if (mensagem.trim() === 'Excluído com Sucesso!!') {


                        $('#btn-cancelar-excluir').click();
                        window.location = "index.php?pag=" + pag;
                    }

                    $('#mensagem_excluir').text(mensagem)



                },

            })
        })
    })
</script>



<!--SCRIPT PARA CARREGAR IMAGEM -->
<script type="text/javascript">
    function carregarImg() {

        var target = document.getElementById('target');
        var file = document.querySelector("input[type=file]").files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            target.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);


        } else {
            target.src = "";
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').dataTable({
            "ordering": false
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="../../js/mascara.js"></script>