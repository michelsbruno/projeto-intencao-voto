<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Voto já confirmado</title>

  <!-- Importação dos arquivos CSS e JavaScript do SweetAlert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

  <!-- Estilo personalizado para a notificação -->
  <style>
    .custom-alert {
      font-family: "Arial", sans-serif;
    }

    /* Ajuste de cor do ícone de ponto de interrogação */
    .swal2-icon-question {
    color: #198754 !important; /* Altere a cor do ícone de interrogação para azul */
  }

    .swal2-confirm {
    background-color: #198754 !important; /* Altere a cor de fundo do botão "SIM" */
  }
    
  .swal2-cancel {
    background-color: #e4605e !important; /* Altere a cor de fundo do botão "NÃO" */
  }

    body{
      background-color: #b1caa9;
    }
  </style>
</head>
<body>
  <?php
  $id_funcao = $_GET['id_funcao'];
  $id_estado = $_GET['id_estado'];
  $id_cidade = $_GET['id_cidade'];

  // Verifica se o formulário foi enviado
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a resposta do usuário
    $resposta = $_POST["resposta"];

    // Exibe a resposta do usuário
    echo "Resposta do usuário: " . $resposta;
  }
  ?>

  <script>
    const queryString = window.location.search;

    // Cria um objeto URLSearchParams com a query string
    const params = new URLSearchParams(queryString);
    
    // Obtém o valor da variável 'id_funcao'
    const idFuncao = params.get('id_funcao');
    // Obtém o valor da variável 'id_estado'
    const idEstado = params.get('id_estado');

    // Obtém o valor da variável 'id_cidade'
    const idCidade = params.get('id_cidade');
    // Função personalizada de confirmação com rótulos personalizados
    function confirmar(mensagem) {
      return Swal.fire({
        title: mensagem,
        icon: '',
        showCancelButton: true,
        confirmButtonText: 'SIM',
        cancelButtonText: 'NÃO',
        customClass: {
          popup: 'custom-alert'
        },
        imageUrl: 'img/grafico.png', // Substitua pelo caminho correto da sua imagem de ícone personalizada
        imageWidth: 200, // Substitua pelo valor da largura da sua imagem de ícone
        imageHeight: 200 
      }).then((result) => {
        return result.isConfirmed;
      });
    }

    // Exemplo de uso
    confirmar("Você já votou nesse cargo. Deseja conferir as parciais dos votos até o momento?").then((escolha) => {
      if (escolha) {
        if(idFuncao == 1){
          window.location.href = "parciais_prefeito_usuario.php?id_funcao=" + idFuncao + "&id_cidade=" + idCidade + "&id_estado=" + idEstado;
        }else if(idFuncao == 2){
          window.location.href = "parciais_governador_usuario.php?id_funcao=" + idFuncao + "&id_cidade=" + idCidade + "&id_estado=" + idEstado;
        }else{
          window.location.href = "parciais_presidente_usuario.php?id_funcao=" + idFuncao + "&id_cidade=" + idCidade + "&id_estado=" + idEstado;
        }
        
      } else {
        window.location.href = "home.php";
      }
    });
  </script>
</body>
</html>
