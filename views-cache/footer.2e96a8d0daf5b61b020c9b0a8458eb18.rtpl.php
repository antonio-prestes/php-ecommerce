<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Footer -->
<footer id="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="widget">

                        <div class="widget-title">PHP - Ecommerce</div>
                        <p class="mb-5">Lorem ipsum dolor sit amet. Qui quibusdam dolorem aut enim voluptas et laboriosam quidem.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Categorias</div>
                                <ul class="list">
                                    <?php require $this->checkTemplate("categories-menu");?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Features</div>
                                <ul class="list">
                                    <li><a href="#">Layouts</a></li>
                                    <li><a href="#">Headers</a></li>
                                    <li><a href="#">Widgets</a></li>
                                    <li><a href="#">Footers</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Pages</div>
                                <ul class="list">
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Support</div>
                                <ul class="list">
                                    <li><a href="#">Help Desk</a></li>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center">&copy; 2021 PHP - Ecommerce - All Rights Reserved. </div>
        </div>
    </div>
</footer>
<!-- end: Footer -->

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