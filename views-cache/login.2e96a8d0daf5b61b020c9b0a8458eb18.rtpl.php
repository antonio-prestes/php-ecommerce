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
        <section>
            <div class="container-fluid d-flex flex-column">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 mx-auto">
                        <div class="mb-5 text-center">
                            <h6 class="h3 mb-1">Login</h6>
                            <p class="text-muted mb-0">Faça login na sua conta para continuar.</p>
                        </div><span class="clearfix"></span>
                        <form class="form-validate" action="/login" method="post">
                            <div class="form-group">
                                <label for="email">Endereço de Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="login" placeholder="Insira seu e-mail" required="">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password">Senha</label>
                                <div class="input-group show-hide-password">
                                    <input class="form-control" name="password" placeholder="Insira sua senha" type="password" required="">
                                    <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                </div>
                            </div>
                            <div class="mt-4"><button type="submit" class="btn btn-primary btn-block btn-primary">Entrar</button></div>
                        </form>
                        <div class="mt-4 text-center"><small>Não é registrado?</small> <a href="/register" class="small fw-bold">Crie uma conta</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
