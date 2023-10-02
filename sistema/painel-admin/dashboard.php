<?php
    $pag = "dashboard";
    require_once("../../conexao.php");
    require_once("../../config.php");
    @session_start();
    //verificar se o usuário está autenticado
    if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Owner') {
        echo "<script language='javascript'> window.location='../index.php' </script>";
    }
?>

<!--Todas as categorias-->
<div class="table-responsive small">
    <h5>Todas as categorias</h5>
    <table class="table table-striped table-hover table-sm" id="tblDashAllCategory">
        <thead>
            <tr>
                <th scope="col"><input type="checkbox" name="AllCheckSelected"></th>
                <th scope="col">#ID</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM produtos order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>">
                <td><input type="checkbox"  ></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!--Todos os produtos-->
<div class="table-responsive small">
    <h5>Todos os produtos</h5>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">#</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM mockado order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>" class="tr-dash">
                 <td><input type="checkbox" name="thisChecked"></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!--Todos os clientes-->
<div class="table-responsive small">
    <h5>Todos os clientes</h5>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">#</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM mockado order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>" class="tr-dash">
                <td><input type="checkbox" name="thisChecked"></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!--Todos os pedidos-->
<div class="table-responsive small">
    <h5>Todos os pedidos</h5>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">#</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM mockado order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>" class="tr-dash">
                 <td><input type="checkbox" name="thisChecked"></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!--Todas as vendas-->
<div class="table-responsive small">
    <h5>Todos as vendas</h5>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">#</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM mockado order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>" class="tr-dash">
                 <td><input type="checkbox" name="thisChecked"></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!--Todos os Estoque-->
<div class="table-responsive small">
    <h5>Transação de estoque</h5>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">#</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM mockado order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>" class="tr-dash">
                 <td><input type="checkbox" name="thisChecked"></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!--Todos os Carrinhos-->
<div class="table-responsive small">
    <h5>Todos os carrinhos</h5>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">#</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM mockado order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>" class="tr-dash">
                 <td><input type="checkbox" name="thisChecked"></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Todos os pagamentos-->
<div class="table-responsive small">
    <h5>Todos os pagamentos</h5>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">#</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM mockado order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>" class="tr-dash">
                 <td><input type="checkbox" name="thisChecked"></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Todos os blogs-->
<div class="table-responsive small">
    <h5>Todos os blogs</h5>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">#</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM mockado order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>" class="tr-dash">
                 <td><input type="checkbox" name="thisChecked"></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Todos os chats-->
<div class="table-responsive small">
    <h5>Todos os chats</h5>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">#</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM mockado order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>" class="tr-dash">
                 <td><input type="checkbox" name="thisChecked"></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Todos as promoções-->
<div class="table-responsive small">
    <h5>Todas as promoções</h5>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col"><input type="checkbox"></th>
                <th scope="col">#</th>
                <th scope="col">Header_1</th>
                <th scope="col">Header_2</th>
                <th scope="col">Header_3</th>
                <th scope="col">Header_4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                 
            $query = $pdo->query("SELECT * FROM mockado order by id asc ");

            $res = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }
                $id = $res[$i]['id'];
                $header_1 = $res[$i]['header_1'];
                $header_2 = $res[$i]['header_2'];
                $header_3 = $res[$i]['header_3'];
                $header_4 = $res[$i]['header_4'];
            ?>
            <tr data-id="<?php echo $id ?>" class="tr-dash">
                 <td><input type="checkbox" name="thisChecked"></td>
                <td><?php echo $id ?></td>
                <td><?php echo $header_1 ?></td>
                <td><?php echo $header_2 ?></td>
                <td><?php echo $header_3 ?></td>
                <td><?php echo $header_4 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> <!-- jQuery UI -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap -->

