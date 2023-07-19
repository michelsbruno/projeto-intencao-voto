<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons-->
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Escolha o candidato</title>
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
      margin-top: 150px;
    }
  </style>
</head>
<body>
  <!-- Card Formulário -->
  <div class="card">
    <div class="card-header">
      <?php 
        session_start();
        include('conexao.php');

        // Verifica se a conexão com o banco de dados foi estabelecida corretamente
        if ($conexao->connect_error) {
            die("Falha na conexão: " . $conexao->connect_error);
        }

        $id_funcao = $_GET['id_funcao'];

        if($id_funcao == 1){
          echo "Vote para Prefeito";
        }elseif($id_funcao == 2){
          echo "Vote para Governador";  
        }else{
          echo "Vote para Presidente";
        }

        $sql_cargo = "select id_funcao from funcao where id_funcao = " . $id_funcao;
        $result_cargo = mysqli_query($conexao, $sql_cargo);
        $row_cargo = mysqli_fetch_assoc($result_cargo);
        $cargo = $row_cargo['id_funcao'];
        //código para pegar id_funcao da sessão
        $_SESSION['id_funcao'] = $cargo; 

      ?>
    </div>
    <div class="card-body">
      <!-- formulário -->
      <form action="votar.php" method="post" id="formVota">
        <?php
        

        // Executa a consulta SQL para obter o candidato com o ID selecionado
        $sql = "SELECT c.*, p.nm_partido as partido_nome FROM candidato c
                INNER JOIN partido p ON c.id_partido = p.id_partido
                WHERE id_funcao = 3";
        $result = $conexao->query($sql);

        // Verifica se há resultados
        if ($result->num_rows > 0) {
          // Exibe todos os candidatos encontrados
          while ($row = $result->fetch_assoc()) {
            echo '<div class="form-check">';
            echo '<input class="form-check-input" type="radio" name="opt" id="opt' . $row["id_candidato"] . '" value="' . $row["id_candidato"] . '">';
            echo '<label class="form-check-label" for="opt' . $row["id_candidato"] . '">';
            echo '<strong>' . $row["nome"] . '</strong>' . ' (' . $row["partido_nome"] . ')';
            echo '</label>';
            echo '</div>';
          }
      } else {
          echo "<p>Candidato não encontrado.</p>";
      }

        // Fecha a conexão com o banco de dados
        $conexao->close();
        ?>

        <hr>

        <div class="mb-3">
          <label for="observacao" class="form-label">Por que você votará nesse candidato?(Opcional)</label>
          <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
        </div>

        <div style="display: flex; justify-content: space-between; margin-top: 10px;">
        <a href="home.php" class="btn btn-danger"><i class="bi bi-x-lg"></i></a>
        <button type="submit" class="btn btn-success" id="btnEnviar" style="display: none;"><i class="bi bi-cursor-fill"></i> ENVIAR</button>
          
        </div>

        <script>
           // Obtenha todos os elementos de opção de candidato
           const radioCandidatos = document.querySelectorAll('input[name="opt"]');

           // Obtenha o botão de enviar
           const btnEnviar = document.getElementById('btnEnviar');

           // Adicione um evento de mudança para cada opção de candidato
           radioCandidatos.forEach(function(radio) {
             radio.addEventListener('change', function() {
               // Verifique se algum candidato está selecionado
               if (document.querySelector('input[name="opt"]:checked')) {
                 // Exiba o botão de enviar
                 btnEnviar.style.display = 'block';
               } else {
                 // Oculte o botão de enviar
                 btnEnviar.style.display = 'none';
               }
             });
           });
        </script>

      </form>

      <!-- fim formulário -->
    </div>
    <!-- fim formulário -->
  </div>
  <!-- fim card -->

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
