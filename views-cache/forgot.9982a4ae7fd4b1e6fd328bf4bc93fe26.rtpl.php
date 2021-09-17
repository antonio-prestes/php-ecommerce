<?php if(!class_exists('Rain\Tpl')){exit;}?><!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>PHP Ecommerce - Admin</title>
    <!-- Favicon -->
    <link rel="icon" href="../../res/argon-dashboard-master/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../../res/argon-dashboard-master/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet"
          href="../../res/argon-dashboard-master/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
          type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../../res/argon-dashboard-master/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-5 py-lg-5 pt-lg-5">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Welcome!</h1>
                        <p class="text-lead text-white">Use these awesome forms to login or create new account in your
                            project for free.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                 xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body px-lg-4 py-lg-4">
                        <div class="text-center text-muted mb-4">
                            <small>Digite seu e-mail e receba as instruções para redefinir a sua senha.</small>
                        </div>
                        <form role="form" action="/admin/forgot" method="post">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Email" type="email" name="email">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->

<div class="container">
    <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
                &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">PHP
                Ecommerce</a>
            </div>
        </div>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="../../res/argon-dashboard-master/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../../res/argon-dashboard-master/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../res/argon-dashboard-master/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="../../res/argon-dashboard-master/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="../../res/argon-dashboard-master/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="../../res/argon-dashboard-master/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>