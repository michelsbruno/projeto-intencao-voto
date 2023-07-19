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

  <title>Cargo Político</title>
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
      margin-top: 75px;
    }
  </style>

</head>
<body>
<br>
<br>
<br>
<!-- Card Formulário-->
<div class="card">
  <div class="card-header">
     Selecione o cargo: 
  </div>
  <div class="card-body">
    <!-- formulário -->
    <form id="formVota" method="get">
      <div class="form-check">
      <input class="form-check-input" type="radio" name="cargo" id="opt1" value="1" checked>
        <label class="form-check-label" for="opt1">
          PREFEITO
        </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="radio" name="cargo" id="opt2" value="2">
        <label class="form-check-label" for="opt2">
          GOVERNADOR
        </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="radio" name="cargo" id="opt3" value="3">
        <label class="form-check-label" for="opt3">
          PRESIDENTE
        </label>
      </div>
      <hr>
      <div style="display: flex; justify-content: space-between; margin-top: 10px;">
      <a href="home.php" class="btn btn-danger"><i class="bi bi-x-lg"></i></a>
      <button type="button" class="btn btn-success" onclick="enviarFormulario()"><i class="bi bi-caret-right-fill"></i></button>
        
      </div>
    </form>
    <!-- fim formulário -->
  </div>
  <!-- fim formulário -->
</div>
<!-- fim card -->

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
  function enviarFormulario() {
    var opcaoSelecionada = $('input[name=cargo]:checked').val();

    if (opcaoSelecionada === '1') {
      var cidadeSelecionada = $('select[name=cidade]').val();
      window.location.href = 'cidade_prefeito.php?cargo=1';
    } else if (opcaoSelecionada === '2') {
      window.location.href = 'estado_governador.php?cargo=2';
    } else if (opcaoSelecionada === '3') {
      window.location.href = 'parciais_presidente.php?cargo=3';
    }
  }
</script>


</body>
</html>
