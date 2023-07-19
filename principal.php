<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Principal</title>

	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>

	<?php

		session_start();

		// Verifica se foi feito autenticação (login e senha válidos)
		if (isset($_SESSION['logado']) == false) {
			echo "<a href='login.php'>Ir para a página de login</a>";
			echo "<br><br>";
			die("Impossível prosseguir. Usuário não autorizado!");			
		}

	?>


	<div class="menu">
		<a href="principal.php" class="ativo">Menu Principal</a>
		<a href="cadastrar.php">Cadastrar</a>
		<a href="listar.php">Listar</a>
		<a href="cadastrar_projeto.php">Cadastrar Projeto</a>
		<a href="listar_projeto.php">Listar Projeto</a>
	</div>


	<div class="conteudo">
		
		<table width="100%" border="0">
			<tr>
				<td width="70%"><h1>MENU PRINCIPAL</h1></td>
				<td width="20%"><h4>Usuário: <?php echo $_SESSION['usuario']; ?></h4></td>
				<td width="10%"><h5><a href="logout.php">Logout</a></h5></td>
			</tr>
		</table>

	</div>


</body>
</html>