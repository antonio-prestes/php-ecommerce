<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>PHP | Ecommerce</title>
    <!-- Stylesheets & Fonts -->
    <link href="../res/Ecommerce/css/plugins.css" rel="stylesheet">
    <link href="../res/Ecommerce/css/style.css" rel="stylesheet">
</head>

<body>


<!-- Body Inner -->
<div class="body-inner">

    <!-- Topbar -->
    <div id="topbar" class="d-none d-xl-block d-lg-block topbar-fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="top-menu">
                        <li><a href="/profile">Minha Conta</a></li>
                        <li><a href="#">Lista de Desejos</a></li>
                        <li><a href="/cart">Meu Carrinho</a></li>
                        <?php if( checkLogin(false) ){ ?>
                        <li><a href="/profile"><?php echo getusername(); ?></a></li>
                        <li><a href="/logout">Sair</a></li>
                        <?php }else{ ?>
                        <li><a href="/login">Login</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-6 d-none d-sm-block">
                    <div class="social-icons social-icons-colored-hover">
                        <ul>
                            <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Topbar -->

    <!-- Header -->
    <header id="header" data-fullwidth="true">
        <div class="header-inner">
            <div class="container">
                <!--Logo-->
                <div id="logo"> <a href="/"><span class="logo-default">POLO</span><span class="logo-dark">POLO</span></a> </div>
                <!--End: Logo-->
                <!--Navigation Resposnive Trigger-->
                <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                <!--end: Navigation Resposnive Trigger-->
                <!--Navigation-->
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/products">Produtos</a></li>
                                <li class="dropdown"><a href="#">Categorias</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="menu.html">Default</a></li>
                                        <li><a href="menu-lowercase.html">Lowercase</a></li>
                                        <li><a href="menu-split.html">Split Menu</a></li>
                                        <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                        <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                        <li><a href="menu-creative.html">Creative Menu</a></li>
                                        <li><a href="menu-lines.html">Lines Menu</a></li>
                                    </ul>
                                </li>
                                <li><a href="/cart">Carrinho</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--end: Navigation-->
            </div>
        </div>
    </header>
    <!-- end: Header -->