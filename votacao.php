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

  <title>Selecione a cidade do prefeito</title>
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
      margin-top: 200px;
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

        $id_funcao = $_GET['cargo'];

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
      <form method="get" id="formVota" action="valida_votacao.php">
        <div class="form-group">
          <label for="cidade">Cidade</label>
          <?php
            

            $conn = new PDO("mysql:host=$server;dbname=$DB", $username, $password);

            // Consulta para obter as cidades com seus nomes completos
            $query = "SELECT cidade.id_cidade, CONCAT(nome_cidade, ' (', nome_estado, ')') as nome_completo FROM cidade
                      INNER JOIN estado ON cidade.id_estado = estado.id_estado
                      ORDER BY nome_completo";
            $stmt = $conn->prepare($query);
            $stmt->execute();

            // Preencher o campo ListBox com as cidades
            echo "<select name='id_cidade' id='cidade' class='form-control' required>";
            echo "<option value=''>Selecione uma cidade</option>"; // Opção vazia
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $id_cidade = $row['id_cidade'];
              $nome_cidade = $row['nome_completo'];
              echo "<option value='$id_cidade'>" . htmlspecialchars($nome_cidade) . "</option>";
            }
            echo "</select>";

            // Campo oculto para enviar o id_funcao
            echo "<input type='hidden' name='id_funcao' value='$id_funcao'>";

            // Fechar a conexão com o banco de dados
            $conn = null;
          ?>
        </div>

        <!-- Restante do código do formulário -->

        <div style="display: flex; justify-content: space-between; margin-top: 10px;">
          <a href="home.php" class="btn btn-danger"><i class="bi bi-x-lg"></i></a>
          <button type="submit" class="btn btn-success"><i class="bi bi-caret-right-fill"></i></button>
        </div>
      </form>
    </div>
  </div>
  <!-- fim card -->

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
