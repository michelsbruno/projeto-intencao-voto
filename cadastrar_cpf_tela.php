<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika">
    <title>Cadastre-se</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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

    <title><?php echo $language["Login"]; ?> Artur / Bruno</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

</head>

<body>
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0 justify-content-center align-items-center">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="index.php" class="d-block auth-logo">
                                        <img src="img/icone" alt="" height="28">
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Antes de realizar seu cadastro...</h5>
                                        <p class="text-muted mt-2">Informe seu CPF</p>
                                    </div>
                                    <br>
                                    <br>
                                    <form class="needs-validation custom-form mt-4 pt-2" action="validar_cpf.php" method="post">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="cpf" class="form-control cpf-input" placeholder="CPF">
                                            </div>
                                        </div>
                                        <!-- Restante do formulário -->
                                        <div class="mb-3">
                                            <button class="btn btn-success w-100 waves-effect waves-light" type="submit">Validar CPF</button>
                                        </div>
                                    </form>
                                    <div class="mt-5 text-center">
                                        <p class="text-muted mb-0">Já tem uma conta? <a href="loginsistema.php" class="text-success fw-semibold"> Login </a> </p>
                                    </div>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>
                                            document.write(new Date().getFullYear())
                                        </script> Artur / Bruno</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'layouts/vendor-scripts.php'; ?>
    <!-- Fechando a tag body do sistema -->

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

    <!-- Máscara de CPF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.cpf-input').mask('000.000.000-00', {
                reverse: true
            });
        });
    </script>
</body>

</html>
