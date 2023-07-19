<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <title>Enquete</title>
    <style type="text/css">
        body {
            width: 680px;
            margin-top: 30px;
            margin-right: auto;
            margin-left: auto;
            background-color: #f9f9f9;
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

        .card {
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        .card-header {
            background-color: green;
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
            background-color: #77dd77;
        }

        .progress-text {
            color: green;
        }
    </style>
</head>
<body>
    <div class="fixed-top">
        <a href="home.php" class="btn btn-sair">SAIR</a>
    </div>    

    <!-- Card Formulário-->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Resultados - PREFEITO</h5>
        </div>
        <div class="card-body">
            <?php
            // Código de conexão ao banco de dados
            session_start();
            include("conexao.php");

            $sql = "SELECT c.nome, COUNT(p.id_candidato) AS total_votos, pa.nm_partido as nome_partido,
                    (COUNT(p.id_candidato) / (SELECT COUNT(*) FROM cadastro_pesquisa WHERE id_funcao = 1)) * 100 AS porcentagem
                    FROM candidato c
                    LEFT JOIN cadastro_pesquisa p ON c.id_candidato = p.id_candidato
                    LEFT JOIN partido pa ON c.id_partido = pa.id_partido
                    WHERE c.id_funcao = 1
                    GROUP BY c.id_candidato";
            $resultado = $conexao->query($sql);

            // Exibir os resultados dos candidatos
            while ($row = $resultado->fetch_assoc()) {
                $nomeCandidato = $row['nome'];
                $porcentagem = $row['porcentagem'];
                $totalVotos = $row['total_votos'];
                $nome_partido = $row['nome_partido'];
            ?>
                <h4><?php echo $nome_partido;?></h4>
                <h5><?php echo $nomeCandidato;?> - Votos: <?php echo $totalVotos; ?></h5>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentagem;?>%;" aria-valuenow="<?php echo $porcentagem; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <span class="progress-text" style="font-weight: bold;"><?php echo number_format($porcentagem, 2); ?>%</span>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Resultados - GOVERNADOR</h5>
        </div>
        <div class="card-body">
            <?php
            $sql = "SELECT c.nome, COUNT(p.id_candidato) AS total_votos, pa.nm_partido as nome_partido,
                    (COUNT(p.id_candidato) / (SELECT COUNT(*) FROM cadastro_pesquisa WHERE id_funcao = 2)) * 100 AS porcentagem
                    FROM candidato c
                    LEFT JOIN cadastro_pesquisa p ON c.id_candidato = p.id_candidato
                    LEFT JOIN partido pa ON c.id_partido = pa.id_partido
                    WHERE c.id_funcao = 2
                    GROUP BY c.id_candidato";
            $resultado = $conexao->query($sql);

            // Exibir os resultados dos candidatos
            while ($row = $resultado->fetch_assoc()) {
                $nomeCandidato = $row['nome'];
                $porcentagem = $row['porcentagem'];
                $totalVotos = $row['total_votos'];
                $nome_partido = $row['nome_partido'];
            ?>
                <h4><?php echo $nome_partido;?></h4>
                <h5><?php echo $nomeCandidato;?> - Votos: <?php echo $totalVotos; ?></h5>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentagem;?>%;" aria-valuenow="<?php echo $porcentagem; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <span class="progress-text" style="font-weight: bold;"><?php echo number_format($porcentagem, 2); ?>%</span>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Resultados - PRESIDENTE</h5>
        </div>
        <div class="card-body">
            <?php
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
                $nome_partido = $row['nome_partido'];
            ?>
                <h4><?php echo $nome_partido;?></h4>
                <h5><?php echo $nomeCandidato;?> - Votos: <?php echo $totalVotos; ?></h5>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentagem;?>%;" aria-valuenow="<?php echo $porcentagem; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    <span class="progress-text" style="font-weight: bold;"><?php echo number_format($porcentagem, 2); ?>%</span>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-BF6cZL/Ka9ttsskDw2b9KL0Wo6s+Z59l0xBmZ+iu9vDOrJmBgvgR1lA0t2b7Jy9v" crossorigin="anonymous"></script>
</body>
</html>
