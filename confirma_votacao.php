<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika">
    <title>Votação Confirmada</title>

    <!-- Favicons-->
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">  

    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- BASE CSS -->
    
    <link href="css/menu.css" rel="stylesheet">
    

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->

    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 0;
    }

    .image-container {
      max-width: 500px;
      max-height: 500px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .text-successs {
      font-size: large;
      font-family: Arial, Helvetica, sans-serif;
      text-transform: uppercase;
      font-weight: bold;
      text-align: center;
    }
    .highlight {
      color: green;
    }
  </style>
</head>

<body>
<div class="fixed-top" style="top: 10px; left: 20px;">
        <a href="home.php" class="btn btn-danger d-inline-block"><i class="bi bi-x-lg"></i></a>
    </div>
  <div class="image-container">
    <!-- Substitua a URL abaixo pela URL da imagem desejada -->
    <img src="img/correto.png" alt="Imagem">
    <p class="text-successs">Pesquisa realizada com <span class="highlight">SUCESSO!</span></p>
    <?php session_start();
        include("conexao.php");

        $id_funcao = $_SESSION['id_funcao']; 
        $cidade = $_SESSION['id_cidade'];
        $estado = $_GET['id_estado'];

        if($id_funcao == 1){
          echo '<a href="parciais_prefeito_usuario.php?id_cidade='.$cidade.'" class="btn btn-success">CONFERIR PARCIAIS</a>';
        }elseif($id_funcao == 2){
          echo '<a href="parciais_governador_usuario.php?id_estado='.$estado.'" class="btn btn-success">CONFERIR PARCIAIS</a>';
        }else{
          echo '<a href="parciais_presidente_usuario.php" class="btn btn-success">CONFERIR PARCIAIS</a>';
        }
        ?>
    
  </div>
</body>
</html>