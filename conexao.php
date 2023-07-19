<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'projeto_titulo_eleitoral');

$username = 'root';
$password='';
$DB='projeto_titulo_eleitoral';
$server='localhost';

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');
