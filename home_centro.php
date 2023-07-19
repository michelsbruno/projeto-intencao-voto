<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <title>Página de exemplo</title>
    <style type="text/css">
        /* Estilos personalizados */

        body{
            background-color: #b1caa9;
            /*#198754 - cor do botão*/ 
        }

        .aviso{
            text-align: center;
            margin-top: 200px;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <br>
        <h3>Bem-vindo(a)
        <?php
            // Verifica se o id_tipo é igual a "ADM"
            if ($_SESSION['id_tipo'] === 'ADM') {
                echo ' ADM ' . $_SESSION['nm_usuario'];
            }
            else{
                echo $_SESSION['nm_usuario'];
            }
        ?>
        </h3>
        <hr>
        <br>
        <div class="d-flex justify-content-center">
        <?php 
            // Verifica se o id_tipo é igual a "ADM"
            if ($_SESSION['id_tipo'] === 'ADM') {
                echo '<a href="verifica_cargo.php" class="btn btn-success btn-lg mx-2"><i class="bi bi-search"></i> Verificar Parciais</a>';
                echo '<a href="relatorio_candidatos.php" class="btn btn-success btn-lg mx-2"><i class="bi bi-book"></i> Relatório de Candidatos</a>';
            }else{
                echo '<a href="verifica_candidato.php" class="btn btn-success btn-lg mx-2"><i class="bi bi-clipboard-data"></i> Realizar Pesquisa</a>';
                echo '<a href="altera_cadastro2.php" class="btn btn-success btn-lg mx-2"><i class="bi bi-pencil-fill"></i> Alterar Cadastro</a>';
                
            }
        ?>

        <?php
            // Verifica se o id_tipo é igual a "ADM"
            if ($_SESSION['id_tipo'] === 'ADM') {
                echo '<a href="cadastrar_candidatos.php" class="btn btn-success btn-lg mx-2"><i class="bi bi-person-plus"></i> Cadastrar Candidatos</a>';
            }
        ?>
        </div>
    </div>
    <?php
        // Verifica se o id_tipo é igual a "ADM"
        if ($_SESSION['id_tipo'] !== 'ADM') {
            echo "<p class='aviso'>É <b>IMPORTANTE</b> enfatizar que o propósito deste projeto é oferecer as intenções de votos de cada eleitor mais próxima do resultado real de uma eleição.</p>";
        }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
