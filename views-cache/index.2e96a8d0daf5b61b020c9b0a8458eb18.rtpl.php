<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Inspiro Slider -->
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360" data-autoplay="2600" data-animate-in="fadeIn"
     data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">
    <!-- Slide 1 -->
    <div class="slide" style="background-image:url('../res/Ecommerce/images/shop-v3/images/1.jpg');">
        <div class="container">
            <div class="slide-captions text-end">
                <!-- Captions -->
                <h2 class="text-lg">THE MOST<br/>POPULAR BRAND</h2>
                <a class="btn btn-light" href="#">Shop Now</a>
                <a class="btn btn-light btn-outline"
                   href="http://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923">View
                    Collection</a>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    <!-- end: Slide 1 -->
    <!-- Slide 2 -->
    <div class="slide" style="background-image:url('homepages/shop-v3/images/2.jpg');">
        <div class="container">
            <div class="slide-captions">
                <!-- Captions -->
                <h2 class="text-lg text-dark">BIG SALE<br/>UP TO 50%</h2>
                <a class="btn btn-dark" href="#">Shop Now</a>
                <a class="btn btn-dark btn-outline"
                   href="http://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923">View
                    Collection</a>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    <!-- end: Slide 2 -->
</div>
<!--end: Inspiro Slider -->

<!-- SUMMER SALE -->
<section class="section-pattern p-t-60 p-b-30 text-center" style="background: url(../res/Ecommerce/images/pattern/pattern22.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-start">
                <h2 class="text-medium">Summer Sale</h2>
                <p>Order more than 60$ and you will get free shippining Worldwide. <a href="#" class="read-more">More
                    info</a></p>
            </div>
            <div class="col-lg-7">
                <div class="countdown medium" data-countdown="2021/09/19 11:34:51"
                     data-animate="animate__fadeInUp"></div>
            </div>
        </div>
    </div>
</section>
<!-- end: SUMMER SALE -->

<!-- Shop products -->
<section>
    <div class="container">

        <div class="heading m-b-40">
            <h4>Featured products</h4>
        </div>

        <!--Product list-->
        <div class="shop">
            <div class="row">

                <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><img alt="Shop product image!" src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </a>
                            <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><img alt="Shop product image!" src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </a>
                            <span class="product-new">NEW</span>
                            <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                            <div class="product-overlay">
                                <a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" >Adicionar ao Carrinho</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Women</div>
                            <div class="product-title">
                                <h3><a href="#">Bolt Sweatshirt</a></h3>
                            </div>
                            <div class="product-price">
                                <ins>R$<?php echo formatPrice($value1["vlprice"]); ?></ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">6 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- end: Shop products -->

<!-- DELIVERY INFO -->
<section class="background-grey p-t-40 p-b-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-gift"></i></a>
                    </div>
                    <h3>Free shipping on orders $60+</h3>
                    <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-plane"></i></a>
                    </div>
                    <h3>Worldwide delivery</h3>
                    <p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-history"></i></a>
                    </div>
                    <h3>60 days money back guranty!</h3>
                    <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: DELIVERY INFO -->

<!-- end: SHOP CATEGORIES -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-text heading-line text-center">
                    <h4>Browser our categories </h4>
                </div>

            </div>
        </div>

        <div class="shop-category">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="../res/Ecommerce/images/shop/shop-category/1.jpg">
                            <div class="shop-category-box-title text-center">
                                <h6>Women</h6><small>64 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="../res/Ecommerce/images/shop/shop-category/2.jpg">
                            <div class="shop-category-box-title text-center">
                                <h6>Wallet's</h6><small>36 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="../res/Ecommerce/images/shop/shop-category/3.jpg">
                            <div class="shop-category-box-title text-center">
                                <h6>Man</h6><small>25 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="../res/Ecommerce/images/shop/shop-category/4.jpg">
                            <div class="shop-category-box-title text-center">
                                <h6>Socks</h6><small>80 products</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: SHOP CATEGORIES -->

