<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons-->
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- MENU -->
<?php require('menu.php'); ?>

<!-- Conteúdo central -->

<?php require('home_centro.php'); ?>

<!-- Botões de login e logout -->
<div class="fixed-top d-flex justify-content-end" style="top: 10px; right: 20px;">
    <?php if(isset($_SESSION['usuario'])) { ?>
        <a href="loginsistema.php" class="btn btn-danger"><i class="bi bi-x-lg"></i></a>
	<?php } else { ?>
		<a href="loginsistema.php" class="btn btn-danger"><i class="bi bi-x-lg"></i></a>
        <!-- <a href="login.php" class="btn btn-primary">Entrar</a> -->
    <?php } ?>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
</body>
</html>
