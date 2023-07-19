<!DOCTYPE html>
<?php session_start(); 

//código para pegar id da sessão
$CPF10 = $_SESSION['cpf_validado'];

//echo "$CPF10 "           
           

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika">
    <title>Cadastre-se</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

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

    <script>
        function validarSenha() {
            var senha = document.getElementById("senha_usuario").value;
            var senhaInput = document.getElementById("senha_usuario");
            var mensagemErro = document.getElementById("mensagem_erro");

            if(senha.length > 0) {
                if (senha.length < 8) {
                    senhaInput.classList.add("is-invalid");
                    mensagemErro.style.display = "block";
                } else {
                    senhaInput.classList.remove("is-invalid");
                    mensagemErro.style.display = "none";
                }
            }
        }
        function bloquearEspaco(event) {
          if (event.keyCode === 32) {
            event.preventDefault();
          }
        }
    </script>
</head>

<body>
    <div class="fixed-top" style="top: 10px; left: 20px;">
        <a href="loginsistema.php" class="btn btn-danger d-inline-block"><i class="bi bi-x-lg"></i></a>
    </div>

    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5 m-auto">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                            <div class="mb-1 mb-md-5 text-center">
                                <img src="img/correto.png" alt="" height="28" class="mx-auto">
                            </div>
                            <div class="text-center">
                                <h5 class="mb-0">CPF VALIDADO!</h5>
                                <p class="text-muted mt-2">Preencha as informações restantes abaixo:</p>
                            </div>
                                <div class="auth-content my-auto">
                                    <form action="cadastrar1.php" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">Usuário</label>
                                            <input type="text" class="form-control" name="nome_usuario" required onkeydown="bloquearEspaco(event)">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">CPF</label>
                                            <input type="text" class="form-control" name="cpf_usuario" value="<?php echo $CPF10; ?>" required readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">E-mail</label>
                                            <input type="email" class="form-control" name="email" required placeholder="exemplo@gmail.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Senha</label>
                                            <input type="password" class="form-control" id="senha_usuario" name="senha_usuario" oninput="validarSenha()" required placeholder="Digite sua senha" >
                                        <div id="mensagem_erro" style="display: none; color: red;">A senha deve ter no mínimo 8 caracteres.</div>
                                            <input type="password" class="form-control" id="confirma_senha_usuario" name="confirma_senha_usuario" required placeholder="Confirme a senha">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group radio_input">
                                                <label><input type="radio" value="usuario" checked name="id_tipo" class="icheck">Usuário</label>
                                                <label><input type="radio" value="ADM" name="id_tipo" class="icheck">ADM</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="nome" class="form-control" placeholder="Nome">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="telefone" class="form-control telefone-input" placeholder="Seu Telefone">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <!---->
                                                <div class="form-group">
                                                    <label for="dt_nascimento">Data de Nascimento</label>
                                                     <input type="date" class="form-control"  id="dt_nascimento" name="dt_nascimento" required>
                                                </div>
                                                <!---->
                                            </div>

                                            <div class="col-md-6">
                                            <label for="dt_nascimento">Gênero</label>
                                                <div class="form-group radio_input">
                                                
                                                    <label><input type="radio" value="Masc" checked name="genero" class="icheck">Masc</label>
                                                    <label><input type="radio" value="Fem" name="genero" class="icheck">Fem</label>
                                                </div>
                                            </div>
                                            <div class="step">

                               
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <?php
                                                    // Conexão com o banco de dados
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "projeto_titulo_eleitoral";

                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                                                    // Consulta para obter as cidades com seus nomes completos
                                                    $query = "SELECT cidade.id_cidade, CONCAT(nome_cidade, ' (', nome_estado, ')') as nome_completo FROM cidade
                                                              INNER JOIN estado ON cidade.id_estado = estado.id_estado
                                                              ORDER BY nome_completo";
                                                    $stmt = $conn->prepare($query);
                                                    $stmt->execute();


                                                    // Preencher o campo ListBox com as cidades
                                                    echo "<select name='cidade' id='cidade' class='form-control' required>";
                                                    echo "<option value=''>Selecione uma cidade</option>"; // Opção vazia
                                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                        $id_cidade = $row['id_cidade'];
                                                        $nome_cidade = $row['nome_completo'];
                                                        echo "<option value='$id_cidade'>" . htmlspecialchars($nome_cidade) . "</option>";

                                                    }
                                                    echo "</select>";

                                                    // Fechar a conexão com o banco de dados
                                                    $conn = null;
                                                    ?>
                                                </div>
                                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="nome_bairro" class="form-control required" placeholder="Bairro">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="endereco" class="form-control required" placeholder="Endereço">
                                            </div>
                                        </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="numero_endereco" class="form-control" placeholder="Nº">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="complemento" class="form-control required" placeholder="Complemento">
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                            
                                        <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
                                            
                                        
                                    </form>
                                </div>
                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0">Já possui uma conta? Faça seu <a href="loginsistema.php" class="text-success fw-semibold">Login </a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>                                                
    <script>
        $(document).ready(function() {
          $('.telefone-input').mask('(00) 0 0000-0000');
        });
    </script>

</body>

</html>
