<?php
$pag = "categorias";
require_once("../../conexao.php");
@session_start();
//verificar se o usuário está autenticado
if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Owner') {
    echo "<script language='javascript'> window.location='../index.php' </script>";
}
?>

<div class="mt-4 mb-4 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
    <h5> Categorias registradas </h5>
    <button type="button" class="btn-add btn-new-cat" data-toggle="modal" data-target="#modalNewCategory">Nova Categoria <i class='bx bx-plus'></i></button>
</div>

<!-- DataTables Example -->
<div class="table-responsive small">
    <table class="table table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" scope="col">#</th> 
                <th class="text-center" scope="col">Nome</th>
                <th class="text-center" scope="col">Descrição</th>
                <th class="text-center" scope="col">Status</th>
                <th class="text-center" scope="col">Data de Registro</th>
                <th class="text-center" scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM categorias order by id desc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }

                $id = $res[$i]['id'];
                $nome = $res[$i]['nome'];
                $descricao = $res[$i]['descricao'];
                $status = $res[$i]['status'];
                $data_registro = $res[$i]['data_registro'];
                
            ?>
            <tr>
            <td class="text-center align-middle"><?php echo $id ?></td>
                <td class="text-center align-middle"><?php echo $nome ?></td>
                <td class="text-center align-middle"><?php echo $descricao ?></td>
                <td class="text-center align-middle"><?php echo $status ?></td>
                <td class="text-center align-middle"><?php echo $data_registro ?></td>
                <td class="text-center align-middle">
                    <a id="editCategory" href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='btn-bc-primary mr-1' title='Editar Categoria'><i class='bx bxs-edit icon'></i></a>
                    <a id="deleteCategory" href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='btn-bc-danger mr-1' title='Excluir Categoria'><i class='bx bx-trash icon'></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Modal para cadastrar a nova categoria-->
<div class="modal fade" id="modalNewCategory"  tabindex="-1" role="dialog" aria-labelledby="modalNewCategoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalNewCategoryLabel"> Registrar Categoria </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <p class="alert p-0 m-0" id="alert" role="alert"></p>
            <div class="modal-body">
                <form action="/sistema/painel-admin/categorias/inserir.php" class="formNewCategory" method="POST" enctype="application/x-www-form-urlencoded">
                    <div class="form-group my-4">
                        <label for="nome-categoria">Nome:</label>
                        <input type="text" class="form-control" name="nome-categoria" id="nome-categoria" placeholder="Introduza o nome" required>
                    </div>
                    <div class="form-group my-4">
                        <label for="descricao-categoria">Descrição</label>
                        <input type="text" class="form-control" name="descricao-categoria" id="descricao-categoria" placeholder="Introduza a descrição." required>
                    </div>
                    <div class="form-group my-4">
                        <input type="checkbox" class="form-control-checkbox" name="status-categoria" id="status-categoria" checked>
                        <label for="status-categoria"> Ativo </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="submit">Adicionar</button>
                <button type="button" class="btn btn-secondary" name="btn-cancel-add-category" id="btn-cancel-add-category" data-bs-dismiss="modal">Sair</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para editar a categoria-->
<div id="modalEditCategory" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Editar Categoria </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Editar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para deletar a categoria-->
<div class="modal fade" id="modalDelCategory" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Deletar Categoria </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Você desejar excluir a categoria <?php echo $nome ?>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Excluir</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script>

    /* Ajax para cadastrar a Categoria */
    $(document).ready(function () {
        $('.btn-new-cat').click(function (e) { 
            e.preventDefault();
            $('#modalNewCategory').modal('show').show('slow');
        });

        $('#submit').click(function(e) {
            e.preventDefault();

            var nome = $('#nome-categoria').val();
            var descricao = $('#descricao-categoria').val();
            var status = $('#status-categoria').val();

            var dataToSend = {
                'nome-categoria' : nome,
                'descricao-categoria' : descricao,
                'status-categoria' : status
            };

            $.ajax({
                url: "categorias/inserir.php",
                type: 'POST',
                data: dataToSend
                
            })
            .done(function(response){
            
               alert(response);
               console.log(response);

                //Limpando os campos após o sucesso do pedido
                var nome = $('#nome-categoria').val('');
                var descricao = $('#descricao-categoria').val('');
                var status = $('#status-categoria').val('');
                location.reload();
            })
            .fail(function(error){
                var mensageError = error.responseText;
                console.log("Erro: " + mensageError);
            });
        });
    });

    /* Ajax para editar a Categoria */
    $(document).ready(function () {
        $('#editCategory').click(function (e) { 
            e.preventDefault();
            $('#modalEditCategory').modal('show');
        });
    });

<<<<<<< HEAD
    /* Ajax para deletar a Categoria */
    $(document).ready(function () {
        $('#deleteCategory').click(function (e) { 
            e.preventDefault();
            $('#modalDelCategory').modal('show');
        });
    });
=======
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
            });
        });
    });
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
>>>>>>> 9746acd5eca7353612d1301f77bc13c2805eb660
</script>