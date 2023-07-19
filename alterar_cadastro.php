<!DOCTYPE html>
<?php session_start(); 
include('conexao.php');

//Pegando Usuário
$sql_nm_usuario = "select nm_usuario from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_nm_usuario = mysqli_query($conexao, $sql_nm_usuario);
$row_nm_usuario = mysqli_fetch_assoc($result_nm_usuario);
$nm_usuario = $row_nm_usuario['nm_usuario'];
//código para pegar nm_usuario da sessão
$_SESSION['nm_usuario'] = "$nm_usuario";

//Pegando id_cidade
$sql_cidade = "select id_cidade from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_cidade = mysqli_query($conexao, $sql_cidade);
$row_cidade = mysqli_fetch_assoc($result_cidade);
$id_cidade = $row_cidade['id_cidade'];
//código para pegar id_cidade da sessão
$_SESSION['id_cidade'] = $id_cidade;           
           
//Pegando   nome_cidade
$sql_nome_cidade = "select nome_cidade from cidade inner join usuario1 on cidade.id_cidade = usuario1.id_cidade where id_usuario = " . $_SESSION['id_usuario'];
$result_nome_cidade = mysqli_query($conexao, $sql_nome_cidade);
$row_nome_cidade = mysqli_fetch_assoc($result_nome_cidade);
$nome_cidade = $row_nome_cidade['nome_cidade'];
//código para pegar   nome_cidade da sessão
$_SESSION['nome_cidade'] = $nome_cidade; 

//Pegando senha do usuário
$sql_senha = "select senha_usuario from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_senha = mysqli_query($conexao, $sql_senha);
$row_senha = mysqli_fetch_assoc($result_senha);
$senha_usuario = $row_senha['senha_usuario'];
//código para pegar senha_usuario da sessão
$_SESSION['senha_usuario'] = $senha_usuario; 

//Pegando nome do usuário
$sql_nome = "select nome from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_nome = mysqli_query($conexao, $sql_nome);
$row_nome = mysqli_fetch_assoc($result_nome);
$nome = $row_nome['nome'];
//código para pegar nome da sessão
$_SESSION['nome'] = $nome;  

//Pegando dt_nascimento do usuário
$sql_dt_nascimento = "select dt_nascimento from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_dt_nascimento = mysqli_query($conexao, $sql_dt_nascimento);
$row_dt_nascimento = mysqli_fetch_assoc($result_dt_nascimento);
$dt_nascimento = $row_dt_nascimento['dt_nascimento'];
//código para pegar dt_nascimento da sessão
$_SESSION['dt_nascimento'] = $dt_nascimento;

//Pegando email do usuário
$sql_email = "select email from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_email = mysqli_query($conexao, $sql_email);
$row_email = mysqli_fetch_assoc($result_email);
$email = $row_email['email'];
//código para pegar email da sessão
$_SESSION['email'] = $email;    

//Pegando telefone do usuário
$sql_telefone = "select telefone from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_telefone = mysqli_query($conexao, $sql_telefone);
$row_telefone = mysqli_fetch_assoc($result_telefone);
$telefone = $row_telefone['telefone'];
//código para pegar telefone da sessão
$_SESSION['telefone'] = $telefone;  

//Pegando nome_bairro do usuário
$sql_nome_bairro = "select nome_bairro from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_nome_bairro = mysqli_query($conexao, $sql_nome_bairro);
$row_nome_bairro = mysqli_fetch_assoc($result_nome_bairro);
$nome_bairro = $row_nome_bairro['nome_bairro'];
//código para pegar nome_bairro da sessão
$_SESSION['nome_bairro'] = $nome_bairro; 

//Pegando endereco do usuário
$sql_endereco = "select endereco from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_endereco = mysqli_query($conexao, $sql_endereco);
$row_endereco = mysqli_fetch_assoc($result_endereco);
$endereco = $row_endereco['endereco'];
//código para pegar endereco da sessão
$_SESSION['endereco'] = $endereco; 

//Pegando numero do usuário
$sql_numero = "select numero_endereco from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_numero = mysqli_query($conexao, $sql_numero);
$row_numero = mysqli_fetch_assoc($result_numero);
$numero = $row_numero['numero_endereco'];
//código para pegar numero da sessão
$_SESSION['numero_endereco'] = $numero; 

//Pegando complemento do usuário
$sql_complemento = "select complemento from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_complemento = mysqli_query($conexao, $sql_complemento);
$row_complemento = mysqli_fetch_assoc($result_complemento);
$complemento = $row_complemento['complemento'];
//código para pegar complemento da sessão
$_SESSION['complemento'] = $complemento; 
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika">
    <title>Alteração de Cadastro</title>

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

<div class="fixed-top d-flex justify-content-end" style="top: 10px; right: 20px;">
    <?php if(isset($_SESSION['usuario'])) { ?>
        <a href="home.php" class="btn btn-danger">SAIR</a>
	<?php } else { ?>
		<a href="home.php" class="btn btn-danger">SAIR</a>
        <!-- <a href="login.php" class="btn btn-primary">Entrar</a> -->
    <?php } ?>
</div>

<body>
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-1 mb-md-1 text-center">
                                    <a href="index.php" class="d-block auth-logo">
                                        <img src="img/alteracao_cadastro" alt="" height="28">
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Alteração de Cadastro</h5>
                                    </div>
                                    <form class="needs-validation custom-form mt-4 pt-2" action="altera_cadastro.php" method="post">
                                    <label for="input-username"><strong>Usuário:</strong> <?php echo $_SESSION['nm_usuario'];  ?> </label>
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="text"  class="form-control" id="novo_nm_usuario" name="novo_nm_usuario" placeholder="Novo nome de usuário">
                                            <div class="invalid-feedback">
                                                Entre com seu usuario
                                            </div>
                                        </div>
                                
                                        <label for="input-username"><strong>Nome:</strong> <?php echo $_SESSION['nome'];  ?></label>
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="text"  class="form-control" id="novo_nome" name="novo_nome" placeholder="Novo nome">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!---->
                                                <div class="form-group">
                                                    <label for="dt_nascimento"><strong>Data de Nascimento:</strong> <?php echo date('d/m/Y', strtotime($_SESSION['dt_nascimento'])) ?></label>
                                                    <input type="date" class="form-control"  id="nova_dt_nascimento" name="nova_dt_nascimento" placeholder="Nova data de Nascimento">
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label for = 'email'><strong>E-mail:</strong> <?php echo $_SESSION['email'];  ?> </label>
                                                    <input type="email" name="novo_email" class="form-control required" placeholder="Novo Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label for="telefone"><strong>Telefone:</strong> <?php echo $_SESSION['telefone'];  ?></label>
                                                    <input type="text" name="novo_telefone" class="form-control" placeholder="Novo Telefone">
                                                </div>
                                            </div>
                                        </div>
                                        <label for="input-password">Senha</label>
                                        <div class="form-floating form-floating-custom mb-2">
                                            <input type="password" class="form-control" id="senha_usuario" name="senha_usuario" disabled value="<?php echo $_SESSION['senha_usuario']; ?>">
                                            <button type="button" onclick="togglePasswordVisibility('senha_usuario')" class="eye-button">
                                              <i id="eye-icon-senha_usuario" class="fas fa-eye"></i>
                                            </button>

                                            <script>
                                              function togglePasswordVisibility(inputId) {
                                                var senhaInput = document.getElementById(inputId);
                                                var eyeIcon = document.getElementById("eye-icon-" + inputId);

                                                if (senhaInput.type === "password") {
                                                  senhaInput.type = "text";
                                                  eyeIcon.classList.remove("fa-eye");
                                                  eyeIcon.classList.add("fa-eye-slash");
                                                } else {
                                                  senhaInput.type = "password";
                                                  eyeIcon.classList.remove("fa-eye-slash");
                                                  eyeIcon.classList.add("fa-eye");
                                                }
                                              }
                                            </script>
                                            <input type="text" class="form-control" id="nova_senha_usuario" name="nova_senha_usuario" placeholder="Nova Senha">
                                        </div>
                                <div class="col-md-12">
                                    </div>
                                </div>
                                <!-- /step-->
                                <div class="step">
                                    <div class="row"> 
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="id_cidade">Cidade: <?php echo $_SESSION['nome_cidade'];  ?></label>
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
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for = 'bairro'><strong>Bairro:</strong> <?php echo $_SESSION['nome_bairro'];  ?> </label>
                                                <input type="text" name="novo_nome_bairro" class="form-control required" placeholder="Bairro">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for = 'endereco'><strong>Endereço:</strong> <?php echo $_SESSION['endereco'];  ?> </label>
                                                <input type="text" name="novo_endereco" class="form-control required" placeholder="Endereço">
                                            </div>
                                        </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for = 'numero'><strong>Número:</strong> <?php echo $_SESSION['numero_endereco'];  ?> </label>
                                                    <input type="text" name="novo_numero_endereco" class="form-control" placeholder="Nº">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for = 'complemento'><strong>Complemento:</strong> <?php echo $_SESSION['complemento'];  ?> </label>
                                                <input type="text" name="novo_complemento" class="form-control required" placeholder="Complemento">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->
                                    
                                    <!-- /row -->
                                    <!-- <div class="mb-4">
                                        <p class="mb-0">Obrigado por se registrar <a href="#" class="text-primary">Termos de uso</a></p>
                                    </div> -->
                                    <div class="mb-3">
                                        <button class="btn btn-success w-100 waves-effect waves-light" type="submit">Alterar Cadastro</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>
                                            document.write(new Date().getFullYear())
                                        </script> Artur / Bruno</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                    <div class="col-xxl-9 col-lg-8 col-md-7 d-none d-md-block">
                    <div class="auth-bg">
                        <div class="authentication-bg-overlay"></div>
                    </div>
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