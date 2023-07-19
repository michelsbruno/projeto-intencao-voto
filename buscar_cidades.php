<?php
session_start();
include("conexao.php");

// Verificar a conexão
if (mysqli_connect_errno()) {
  echo "Falha na conexão com o MySQL: " . mysqli_connect_error();
  exit();
}

// Receber o estado selecionado via parâmetro GET
$estado = $_GET['estado'];

// Executar a consulta para buscar as cidades correspondentes
$consulta = "SELECT nome_cidade FROM cidade WHERE id_estado = '$estado'";
$resultado = mysqli_query($conexao, $consulta);

// Criar um array para armazenar as cidades
$cidades = array();

// Iterar sobre o resultado da consulta e adicionar as cidades ao array
while ($row = mysqli_fetch_assoc($resultado)) {
  $cidades[] = $row['nome_cidade'];
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);

// Retornar as cidades como um JSON
echo json_encode($cidades);
?>
