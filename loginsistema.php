<?php
session_start();
?>

<!DOCTYPE html>
<html>
   

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika">
    <title>Login</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->


    <title><?php echo $language["Login"]; ?>Pesquisa Eleitoral</title>

    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>
</head>

<body>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Preload -->
    
    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->

 
    <!-- End Header -->

    


    
    <div class="cd-overlay-nav">
        <span></span>
    </div>
    <!-- cd-overlay-nav -->

    <div class="cd-overlay-content">
        <span></span>
    </div>
    <!-- cd-overlay-content -->

<!--    <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a> -->
<!-- coloco o body do sistema -->
    
    
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="auth-page">

<?php include 'layouts/body.php'; ?>
<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <img src="img/login_img" alt="200" height="280"> 
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">Seja bem-vindo!</h5>
                                    <p class="text-muted mt-2">Entre com sua conta</p>
                                </div>
                                <form method="post" action="login.php">
                                <label for="input-username">Usuário</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control " id="usuario" name="usuario"  required>
                                    </div>

                                    <label for="input-password">Senha</label>
                                    <div class="form-group">
                                        <input type="password" class="form-control pe-5" id="senha" name="senha"  required>
                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                         <!--   <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>  -->
                                        </button>

                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-success w-100 waves-effect waves-light" type="submit">Iniciar</button>
                                    </div>
                                </form>
                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0">Não possui uma conta? <a href="cadastrar_cpf_tela.php" class="text-success fw-semibold"> Cadastre-se </a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-5 col-md-7">
                <div class="auth-bg pt-md-15 p-15 d-flex">
                    <!-- Adicione a imagem aqui -->
                    <img src="assets/images/profile-bg.jpg" alt="Imagem de Login">
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- fechar o codigo do body do sistema --> 

    <!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="js/jquery-3.6.1.min.js"></script>
    <!-- Common script -->
    <script src="js/common_scripts_min.js"></script>
    <!-- Wizard script -->
    <script src="js/registration_wizard_func.js"></script>
    <!-- Menu script -->
    <script src="js/velocity.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Theme script -->
    <script src="js/functions.js"></script>
                
</body>

</html>