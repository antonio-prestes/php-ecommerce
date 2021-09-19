<?php if(!class_exists('Rain\Tpl')){exit;}?>
<body>
<!-- Body Inner -->
<div class="body-inner">
    <!-- Section -->
    <section class="pt-5 pb-5">
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center min-vh-100">
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <h3>Register New Account</h3>
                    <p>Create an account by entering the information below. If you are a returning customer please login
                        at the top of the page.</p>
                    <form id="form1" class="form-validate mt-5" action="/register" method="post">
                        <div class="h5 mb-4">Account details</div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="username">Nome Completo</label>
                                <input type="text" class="form-control" name="name" placeholder="Insira seu nome"
                                       required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telephone">Telefone</label>
                                <input class="form-control" type="tel" name="phone"
                                       placeholder="Enter your Telephone number" required="">
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Insira seu e-mail"
                                       required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="password">Senha</label>
                                <div class="input-group show-hide-password">
                                    <input class="form-control" name="password" placeholder="Insira a senha" type="text"
                                           required="">
                                    <span class="input-group-text"><i class="icon-eye" aria-hidden="true"
                                                                      style="cursor: pointer;"></i></span>

                                </div>
                            </div>
                            <!-- confirmação de senha
                            <div class="form-group col-md-6">
                                <label for="password2">Confirme sua senha</label>
                                <div class="input-group show-hide-password">
                                    <input class="form-control" name="password2" placeholder="Insira a senha" type="password" required="">
                                    <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                </div>
                            </div>
                             -->
                        </div>
                        <button type="submit" class="btn m-t-30 mt-3">Criar Conta</button>
                    </form>
                    <div class="mt-4"><small>Já possui uma conta?</small> <a href="/login"
                                                                                 class="small fw-bold">Login</a>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</section>
<!-- end: Section -->
