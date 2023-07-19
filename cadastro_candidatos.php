<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['dt_nascimento']));
$estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$partido = mysqli_real_escape_string($conexao, trim($_POST['partido']));
$funcao = mysqli_real_escape_string($conexao, trim($_POST['id_funcao']));

$sql_id_cidade = "SELECT id_cidade FROM cidade WHERE nome_cidade LIKE '%" . $cidade . "%' AND id_estado = '$estado'";
$result_id_cidade = mysqli_query($conexao, $sql_id_cidade);
$row_id_cidade = mysqli_fetch_assoc($result_id_cidade);
$id_cidade = $row_id_cidade['id_cidade'];


 $sql = "select id_partido from partido where nm_partido = '$partido'";
 $result = mysqli_query($conexao, $sql);

 $row = mysqli_fetch_assoc($result);
 $id_partido = $row['id_partido'];

 $sql = "INSERT INTO candidato (nome, dt_nascimento,id_cidade, id_estado, id_partido, id_funcao) 
         VALUES ('$nome', '$data_nascimento', '$id_cidade','$estado','$id_partido','$funcao')";

echo '<script>';
echo 'var valorJS = ' . json_encode($id_cidade) . ';'; // Armazena o valor da variável PHP em uma variável JavaScript
echo '</script>';


    
if ($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
    echo '<script type="text/javascript">
            alert("Cadastro realizado com sucesso!");
            window.location.href = "home.php"; // Redirecionar para home.php
         </script>';
} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}

$conexao->close();
exit;

        


?>
