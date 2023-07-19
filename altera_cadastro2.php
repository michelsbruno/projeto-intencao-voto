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
    <title>Alteração de cadastro</title>

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
    </script>
    <style>
    body{
            background-color: #b1caa9;
            /*#198754 - cor do botão*/ 
        }
    
        .auth-page .auth-full-page-content {
        margin-top: 25px;
        margin-bottom: 25px;
    }    
    
</style>   
</head>

<body>
    <div class="fixed-top" style="top: 10px; left: 20px;">
        <a href="home.php" class="btn btn-danger d-inline-block"><i class="bi bi-x-lg"></i></a>
    </div>

    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5 m-auto">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                            <div class="mb-1 mb-md-5 text-center">
                                <img src="img/alteracao_cadastro.png" alt="" height="28" class="mx-auto">
                            </div>
                            <div class="text-center">
                                <h5 class="mb-0">Alteração de Cadastro</h5>
                                <p class="text-muted mt-2">Preencha os campos que deseja que seja alterado:</p>
                            </div>
                                <div class="auth-content my-auto">
                                    <form action="altera_cadastro.php" method="post">
                                    <label for="input-username"><strong>Usuário:</strong> <?php echo $_SESSION['nm_usuario'];  ?> </label>
                                        <div class="form-group">
                                            <input type="text"  class="form-control" id="novo_nm_usuario" name="novo_nm_usuario" placeholder="Novo nome de usuário" onkeydown="bloquearEspaco(event)">
                                            <div class="invalid-feedback">
                                                Entre com seu usuario
                                            </div>
                                        </div>
                                        <label for="input-username"><strong>Nome:</strong> <?php echo $_SESSION['nome'];  ?></label>
                                        <div class="form-group">
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
                                        <input type="password" class="form-control" id="senha_usuario" name="senha_usuario" disabled value="<?php echo $_SESSION['senha_usuario']; ?>">
                                            <button type="button" onclick="togglePasswordVisibility('senha_usuario')" class="eye-button">
                                              <i id="eye-icon-senha_usuario" class="fas fa-eye"></i>
                                            </button>
                                            <input type="text" class="form-control" id="nova_senha_usuario" name="nova_senha_usuario" placeholder="Nova Senha">
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
                                            
                                        </div>
                                    
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                <label for="telefone"><strong>Telefone:</strong> <?php echo $_SESSION['telefone'];  ?></label>
                                                    <input type="text" name="novo_telefone" class="form-control telefone-input" placeholder="Novo Telefone">
                                                </div>
                                                
                                                <div class="form-group">
                                                <label for="id_cidade"><strong>Cidade:</strong> <?php echo $_SESSION['nome_cidade'];  ?></label>
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
                                                    echo "<select name='cidade' id='cidade' class='form-control'>";
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
                                                <div class="form-group">
                                            <label for = 'bairro'><strong>Bairro:</strong> <?php echo $_SESSION['nome_bairro'];  ?> </label>
                                                <input type="text" name="novo_nome_bairro" class="form-control required" placeholder="Bairro">
                                            </div>
                                            <div class="form-group">
                                                <label for = 'endereco'><strong>Endereço:</strong> <?php echo $_SESSION['endereco'];  ?> </label>
                                                <input type="text" name="novo_endereco" class="form-control required" placeholder="Endereço">
                                            </div>
                                            <div class="form-group">
                                                    <label for = 'numero'><strong>Número:</strong> <?php echo $_SESSION['numero_endereco'];  ?> </label>
                                                    <input type="text" name="novo_numero_endereco" class="form-control" placeholder="Nº">
                                                </div>
                                            <div class="form-group">
                                                <label for = 'complemento'><strong>Complemento:</strong> <?php echo $_SESSION['complemento'];  ?> </label>
                                                <input type="text" name="novo_complemento" class="form-control required" placeholder="Complemento">
                                            </div>    
                                            </div>

                                            <div class="step">

                                              
                                            
                                                
                                        
                                        <div class="row">
                                        
                                    </div>
                                    
                                        
                                            </div>
                                        </div>
                                        </div>
                                        
                                            
                                        <button type="submit" class="btn btn-success btn-block"><i class="bi bi-pencil-fill"></i> ALTERAR CADASTRO</button>
                                            
                                        
                                    </form>
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
        function bloquearEspaco(event) {
          if (event.keyCode === 32) {
            event.preventDefault();
          }
        }
    </script>

</body>

</html>
