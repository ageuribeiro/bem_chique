<?php
$pag = "blog";
require_once("../../conexao.php");
@session_start();
//verificar se o usuário está autenticado
if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Owner') {
    echo "<script language='javascript'> window.location='../index.php' </script>";
}

//CONSULTAR O BANCO DE DADOS E TRAZER OS DADOS DO USUÁRIO
$res = $pdo->query("SELECT * FROM usuarios where id = '$_SESSION[id_usuario]'");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$nome_usu = @$dados[0]['nome'];
$nivel_usu = @$dados[0]['nivel'];

?>
<script src="https://cdn.tiny.cloud/1/dpe9a0zhcg7o3ps8i1w9oo4932wfri92ekbfcy01afkbhwll/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        mode: 'specific_textarea',
        selector: '.mceEditor',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))

    });
</script>
<div class="mt-4 mb-4 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">

    <p class="h6"><small>Última postagem: <span><?php echo date('d.m.Y'); ?></span></small></p>
    <div class="row mt-4 mb-4">
        <a type="button" class="btn btn-primary btn-sm ml-3 d-none d-md-block" href="index.php?pag=<?php echo $pag ?>&funcao=novo">Adicionar Novo Artigo <i class='bx bx-plus'></i></a>
    </div>
</div>

<!-- DataTales Example -->
<div class="table-responsive small">
    <table class="table table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Categoria</th><!---->
                <th class="text-center">Título</th><!---->
                <th class="text-center">Subtítulo</th><!---->
                <th class="text-center">Keywords</th><!---->
                <th class="text-center">Content</th><!---->
                <th class="text-center">Autor</th>
                <th class="text-center">Postado em: </th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM blog order by id desc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }

                $id = $res[$i]['id'];
                $categoria = $res[$i]['categoria'];
                $titulo = $res[$i]['titulo'];
                $subtitulo = $res[$i]['subtitulo'];
                $keywords = $res[$i]['keywords'];
                $content = $res[$i]['content'];
                $author = $res[$i]['author'];
                $data = $res[$i]['date'];
            ?>
                <tr>
                    <td class="text-center align-middle"><?php echo $id ?></td>
                    <td class="text-center align-middle"><?php echo $categoria ?></td>
                    <td class="text-center align-middle"><?php echo $titulo ?></td>
                    <td class="text-center align-middle"><?php echo $subtitulo ?></td>
                    <td class="text-center align-middle"><?php echo $keywords ?></td>
                    <td class="text-center align-middle text-tooltip"><?php echo $content ?></td>
                    <td class="text-center align-middle"><?php echo $author ?></td>
                    <td class="text-center align-middle"><?php echo $data ?></td>
                    <td class="text-center align-middle">
                        <a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='text-primary mr-1' title='Editar Postagem'><i class='bx bxs-edit icon'></i></a>
                        <a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='text-danger mr-1' title='Excluir Postagem'><i class='bx bx-trash icon'></i></a>
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
                    $titulo = "Editar artigo";
                    $id2 = $_GET['id'];

                    $query = $pdo->query("SELECT * FROM blog where id = '" . $id2 . "' ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);
                    $categoria2  = $res[0]['categoria'];
                    $titulo2 = $res[0]['titulo'];
                    $subtitulo2 = $res[0]['subtitulo'];
                    $keywords2 = $res[0]['keywords'];
                    $content2 = $res[0]['content'];
                    $author2 = $res[0]['author'];
                    $data2 = $res[0]['date'];
                } else {
                    $titulo = "Adicionar novo artigo";
                }
                ?>

                <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="categoria">Categoria</label>
                                    <select value="<?php echo @$categoria2 ?>" type="text" class="form-control" id="categoria" name="categoria">
                                        <option value="none">Escolha a categoria</option>
                                        <?php
                                        $query = $pdo->query("SELECT * FROM categorias WHERE status='ativo' ORDER BY id DESC ");
                                        $res = $query->fetchAll(PDO::FETCH_ASSOC);
                                        for ($i = 0; $i < count($res); $i++) {
                                            foreach ($res[$i] as $key => $value) {
                                            }
                                            $id = $res[$i]['id'];
                                            $nome = $res[$i]['nome'];
                                        ?>
                                            <option value="<?php echo $nome; ?>"><?php echo $nome; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input value="<?php echo @$titulo2 ?>" type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="subtitulo">Subtítulo</label>
                                <input value="<?php echo @$subtitulo2 ?>" type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtitulo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="keywords">Keywords <span><small><b>(Metadados)</b></small></span></label>
                                <input type="text" value="<?php echo @$keywords2 ?>" class="form-control" id="keywords" name="keywords" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="content">Content <span><small><b> (Body Content)</b></small></span></label>
                                <textarea class="form-control mceEditor" id="content" name="content" cols="120" rows="12">
                                <?php echo @$content2; ?>
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <p><small>Author: <span><?php echo $nome_usu; ?></span></small></p>
                        </div>

                    </div>
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
                <h5 class="modal-title">Excluir Artigo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <p>Deseja excluir este artigo?</p>

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

<script type="text/javascript">
    document.querySelectorAll('.texto-com-tooltip').forEach(function(td) {
        td.addEventListener('mouseover', function() {
            if (td.scrollWidth > td.offsetWidth) {
                const tooltip = document.createElement('div');
                tooltip.className = 'tooltip';
                tooltip.textContent = td.textContent;
                document.body.appendChild(tooltip);
                const rect = td.getBoundingClientRect();
                tooltip.style.top = rect.top + window.scrollY + 'px';
                tooltip.style.left = rect.left + window.scrollX + 'px';
                td.addEventListener('mouseout', function() {
                    document.body.removeChild(tooltip);
                });
            }
        });
    });
</script>


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
        })

    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="../../js/mascara.js"></script>