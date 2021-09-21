<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>POLO | The Multi-Purpose HTML5 Template</title>
    <!-- Stylesheets & Fonts -->
    <link href="../res/Ecommerce/css/plugins.css" rel="stylesheet">
    <link href="../res/Ecommerce/css/style.css" rel="stylesheet">
</head>

<body>
        <!-- SHOP CART -->
        <section id="shop-cart">
            <div class="container">
                <div class="shop-cart">
                    <div class="table table-sm table-striped table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-remove"></th>
                                    <th class="cart-product-thumbnail"></th>
                                    <th class="cart-product-name">Produto</th>
                                    <th class="cart-product-price">Preço</th>
                                    <th class="cart-product-quantity">Quantidade</th>
                                    <th class="cart-product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $counter1=-1;  if( isset($product) && ( is_array($product) || $product instanceof Traversable ) && sizeof($product) ) foreach( $product as $key1 => $value1 ){ $counter1++; ?>
                                <tr>
                                    <td class="cart-product-remove">
                                        <a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/remove"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td class="cart-product-thumbnail">
                                        <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                            <img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Bolt Sweatshirt">
                                        </a>
                                        <div class="cart-product-thumbnail-name">Bolt Sweatshirt</div>
                                    </td>
                                    <td class="cart-product-description">
                                        <p><span><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
                                        </p>
                                    </td>
                                    <td class="cart-product-price">
                                        <span class="amount">R$<?php echo formatPrice($value1["vlprice"]); ?></span>
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="quantity">
                                            <input type="button" class="minus" value="-" onclick="window.location.href = '/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/minus'">
                                            <input type="text" class="qty" value="<?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="quantity">
                                            <input type="button" class="plus" value="+" onclick="window.location.href = '/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add'">
                                        </div>
                                    </td>
                                    <td class="cart-product-subtotal">
                                        <span class="amount">R$<?php echo formatPrice($value1["vltotal"]); ?></span>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <hr class="space">
                        <div class="col-lg-6">
                            <h4>Cálculo de Frete</h4>
                            <form class="row">
                                <div class="col-lg-6 p-r-10 form-group">
                                    <input type="text" class="form-control" placeholder="00000-000" value="" id="cep" name="zipcode">
                                    <input type="submit" class="btn icon-left float-right mt-2" formmethod="post" formaction="/cart/freight" value="Cálcular">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 p-r-10">
                            <div class="table-responsive">
                                <h4>Subtotal</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart-product-name">
                                                <strong>Subtotal</strong>
                                            </td>
                                            <td class="cart-product-name text-end">
                                                <span class="amount">R$<?php echo formatPrice($cart["vlsubtotal"]); ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart-product-name">
                                                <strong>Frete</strong>
                                            </td>
                                            <td class="cart-product-name  text-end">
                                                <span class="amount">R$<?php echo formatPrice($cart["vlfreight"]); ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart-product-name">
                                                <strong>Total</strong>
                                            </td>
                                            <td class="cart-product-name text-end">
                                                <span class="amount color lead"><strong>R$<?php echo formatPrice($cart["vltotal"]); ?></strong></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <input type="submit" value="Finalizar Compra" name="proceed" class="btn icon-left float-right">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: SHOP CART -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="../res/Ecommerce/js/jquery.js"></script>
    <script src="../res/Ecommerce/js/plugins.js"></script>
    <!--Template functions-->
    <script src="../res/Ecommerce/js/functions.js"></script>
</body>

</html>