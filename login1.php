<?php
session_start();
include('conexao.php');

// if (empty($_POST['usuario']) || empty($_POST['senha'])) {
// 	header('Location: home.php');
// 	exit();
// }

$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, $_POST['senha_usuario']);
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));

// $query = "select nm_usuario from usuario where nm_usuario = '{$usuario}' and senha_usuario = md5('{$senha}')";
$query = "select * from usuario1 where nm_usuario = '{$usuario}' and senha_usuario = {$senha}";
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row === 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('Location: home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: teste.php');
	exit();
}
