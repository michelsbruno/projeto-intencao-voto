<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika">
    <title>Relatório de Candidatos</title>

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
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: green;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color : green;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: greenyellow;
        }
    </style>
    <title>Relatório de Candidatos</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <div class="fixed-top d-flex justify-content-end" style="top: 10px; right: 20px;">
    <?php if(isset($_SESSION['usuario'])) { ?>
        <a href="home.php" class="btn btn-danger"><i class="bi bi-x-lg"></i></a>
	<?php } else { ?>
		<a href="home.php" class="btn btn-danger"><i class="bi bi-x-lg"></i></a>
        <!-- <a href="login.php" class="btn btn-primary">Entrar</a> -->
    <?php } ?>
</div>
</head>

<body>

<h2>Dados dos Candidatos</h2>

<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Estado</th>
        <th>Cidade</th>
        <th>Partido</th>
        <th>Cargo</th>
    </tr>
    <?php
    session_start(); 
    include('conexao.php');

    // Verifica se a conexão com o banco de dados foi estabelecida corretamente
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    // Executa a consulta SQL corrigida
    $sql = "SELECT c.id_candidato, c.nome, c.dt_nascimento, es.nome_estado AS nome_estado, ci.nome_cidade AS nome_cidade, p.nm_partido AS nome_partido,f.nome_funcao AS nome_funcao
            FROM candidato c
            INNER JOIN estado es ON c.id_estado = es.id_estado
            INNER JOIN cidade ci ON c.id_cidade = ci.id_cidade
            INNER JOIN partido p ON c.id_partido = p.id_partido
            INNER JOIN funcao f ON c.id_funcao = f.id_funcao ORDER BY f.nome_funcao asc";
    $result = $conexao->query($sql);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        // Loop através dos resultados e exibe os dados dentro das células da tabela
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_candidato"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . date('d/m/Y', strtotime($row["dt_nascimento"])) . "</td>";
            echo "<td>" . $row["nome_estado"] . "</td>";
            echo "<td>" . $row["nome_cidade"] . "</td>";
            echo "<td>" . $row["nome_partido"] . "</td>";
            echo "<td>" . $row["nome_funcao"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Nenhum candidato encontrado.</td></tr>";
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
    ?>
</table>

</body>
</html>
