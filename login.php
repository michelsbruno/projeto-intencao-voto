<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nm_usuario from usuario1 where BINARY nm_usuario = '{$usuario}' and senha_usuario = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row === 1) {
	$sql_tipo = "select id_tipo from usuario1 where nm_usuario = '{$usuario}' and senha_usuario = '{$senha}'";
	$result_tipo = mysqli_query($conexao, $sql_tipo);
 	$row_tipo = mysqli_fetch_assoc($result_tipo);
 	$id_tipo = $row_tipo['id_tipo'];

	$sql_usuario = "select nm_usuario from usuario1 where nm_usuario = '{$usuario}' and senha_usuario = '{$senha}'";
	$result_usuario = mysqli_query($conexao, $sql_usuario);
	$row_usuario = mysqli_fetch_assoc($result_usuario);
	$nm_usuario = $row_usuario['nm_usuario'];

	$sql_id = "select id_usuario from usuario1 where nm_usuario = '{$usuario}' and senha_usuario = '{$senha}'";
	$result_id = mysqli_query($conexao, $sql_id);
	$row_id = mysqli_fetch_assoc($result_id);
	$id_usuario = $row_id['id_usuario'];

	$_SESSION['id_tipo'] = "$id_tipo";			//tipo
	$_SESSION['nm_usuario'] = "$nm_usuario";	//usuario
	$_SESSION['id_usuario'] = "$id_usuario";	//id

	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('Location: home.php');
	exit();
} else {
	echo '<script type="text/javascript">
            alert("Senha ou usuário incorretos.");
            window.history.back(); // Voltar para a página anterior
            location.reload();
            location.reload();
             </script>';
	exit();
}

?>