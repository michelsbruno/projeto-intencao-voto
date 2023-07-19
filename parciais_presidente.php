<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <title>Parciais - Presidente</title>
    <style type="text/css">
        body {
      /* display: flex; */
      align-items: center;
      justify-content: center;
      width: 680px;
      margin-top: 30px;
      margin-right: auto;
      margin-left: auto;
      background-color: #b1caa9;
    }
    
    .card {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      margin-top: 100px;
    }

        .fixed-top {
            position: fixed;
            top: 10px;
            left: 20px;
        }

        .btn-sair {
            background-color: #dc3545;
            color: white;
        }

        .card-header {
            background-color: #198754;
            color: white;
            padding: 10px;
        }

        .card-title {
            margin-bottom: 0;
            font-size: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .progress-bar {
            background-color: #198754;
        }

        .progress-text {
            color: #198754;
            font-weight: bold;
        }

        .black{
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="fixed-top" style="top: 10px; left: 20px;">
        <a href="home.php" class="btn btn-danger d-inline-block"><i class="bi bi-x-lg"></i></a>
    </div>
    <br>
    <br>    
    <div class="card">
    <?php
        // Código de conexão ao banco de dados
        session_start();
        include("conexao.php");

        echo '<div class="card-header">
            <h5 class="card-title">Possíveis resultados para <span class="black">presidente</span> do <span class="black">Brasil</span></h5>
        </div>';

        ?>
        
        <div class="card-body">
            <?php
            $id_funcao = $_SESSION['id_funcao'];
            // $id_cidade = $_SESSION['id_cidade'];

            

            // Consulta SQL para obter os resultados dos candidatos e suas porcentagens
            $sql = "SELECT c.nome, COUNT(p.id_candidato) AS total_votos, pa.nm_partido as nome_partido,
            (COUNT(p.id_candidato) / (SELECT COUNT(*) FROM cadastro_pesquisa WHERE id_funcao = 3)) * 100 AS porcentagem
            FROM candidato c
            LEFT JOIN cadastro_pesquisa p ON c.id_candidato = p.id_candidato
            LEFT JOIN partido pa ON c.id_partido = pa.id_partido
            WHERE c.id_funcao = 3
            GROUP BY c.id_candidato";

            $resultado = $conexao->query($sql);

            // Exibir os resultados dos candidatos
            while ($row = $resultado->fetch_assoc()) {
                $nomeCandidato = $row['nome'];
                $porcentagem = $row['porcentagem'];
                $totalVotos = $row['total_votos'];
                $nomePartido = $row['nome_partido'];
            ?>
                <h5><?php echo $nomeCandidato .' (' . $nomePartido .')' ; ?></h5>
                <p>Total de votos: <?php echo $totalVotos; ?></p>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentagem; ?>%;" aria-valuenow="<?php echo $porcentagem; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <span class="progress-text"><?php echo number_format($porcentagem, 2); ?>%</span>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
    


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
