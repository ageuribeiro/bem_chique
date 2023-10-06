<?php
require_once("cabecalho.php");

session_start();
if (isset($_GET['add_to_cart'])) {
    $product_id = $_GET['add_to_cart'];

    echo $product_id;


   
}
?>
<!-- Shoping Cart Section Begin -->
<div class="center mt-5">
    <p class="text-center">Carrinho de Compras</p>
</div>
<section class="shoping-cart bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-sm table-striped caption-top ">
                        <caption> Lista do carrinho</caption>
                        <thead>
                            <tr class=" mx-center align-items-center justify-content-center">
                                <th class="shoping__product">Produtos</th>
                                <th>Valor</th>
                                <th>Quantidade</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/produtos/regata-masculina.jpg" alt="" width="100">
                                    <h5>Regata Masculina</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    $55.00
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    $110.00
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/produtos/regata-feminina.jpg" alt="" width="100">
                                    <h5>Regata Feminina</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    $39.00
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    $39.99
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/cart/cart-3.jpg" alt="">
                                    <h5>Organic Bananas</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    $69.00
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    $69.99
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">

                    <a href="lista-produtos.php" class="primary-btn cart-btn cart-btn-right bg-success text-light">
                        CONTINUE COMPRANDO</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Cupom de Desconto</h5>
                        <form action="#">
                            <input type="text" placeholder="Entre com o código do seu cupom">
                            <button type="submit" class="site-btn">APLICAR CUPOM</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Totais</h5>
                    <ul>
                        <li>Subtotal <span>$454.98</span></li>
                        <li>Total <span>$454.98</span></li>
                    </ul>
                    <a href="checkout.php" class="primary-btn">FINALIZAR COMPRA</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

<?php
require_once("rodape.php");
?>