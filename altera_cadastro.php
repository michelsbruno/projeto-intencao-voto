<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['novo_nome']));
$nm_usuario = mysqli_real_escape_string($conexao, trim($_POST['novo_nm_usuario']));
$data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['nova_dt_nascimento']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['novo_telefone']));
$email = mysqli_real_escape_string($conexao, trim($_POST['novo_email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['nova_senha_usuario']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['novo_endereco']));
$bairro = mysqli_real_escape_string($conexao, trim($_POST['novo_nome_bairro']));
$numero = mysqli_real_escape_string($conexao, trim($_POST['novo_numero_endereco']));
$complemento = mysqli_real_escape_string($conexao, trim($_POST['novo_complemento']));

if (!empty($cidade)) {
    $sql_id_estado = "select id_estado from cidade where id_cidade = " . $cidade;
    $result_id_estado = mysqli_query($conexao, $sql_id_estado);
    $row_id_estado = mysqli_fetch_assoc($result_id_estado);
    $id_estado = $row_id_estado['id_estado'];
}

if (!empty($email)) {
    $sql_email = "SELECT * FROM usuario1 WHERE email = '$email'";
    $result_email = mysqli_query($conexao, $sql_email);
    $row_email = mysqli_num_rows($result_email);

    if ($row_email == 1) {
        $_SESSION['usuario_existe'] = true;
        ?>
        <script type="text/javascript">
            alert("E-mail inserido já consta no Banco de Dados.");
            window.history.back(); // Voltar para a página anterior
        </script>
        <?php
        exit();
    }
}


// Verifica se cada campo foi preenchido e atualiza apenas os campos preenchidos
$sql = "UPDATE usuario1 SET ";
$valores = array();

if (!empty($nome)) {
    $valores[] = "nome = '$nome'";
}

if (!empty($nm_usuario)) {
    $valores[] = "nm_usuario = '$nm_usuario'";
}

if (!empty($data_nascimento)) {
    $valores[] = "dt_nascimento = '$data_nascimento'";
}

if (!empty($telefone)) {
    $valores[] = "telefone = '$telefone'";
}

if (!empty($email)) {
    $valores[] = "email = '$email'";
}

if (!empty($senha)) {
    $valores[] = "senha_usuario = '$senha'";
}

if (!empty($cidade)) {
    $valores[] = "id_cidade = '$cidade'";
    $valores[] = "id_estado = '$id_estado'";
}

if (!empty($endereco)) {
    $valores[] = "endereco = '$endereco'";
}

if (!empty($bairro)) {
    $valores[] = "nome_bairro = '$bairro'";
}

if (!empty($numero)) {
    $valores[] = "numero_endereco = '$numero'";
}

if (!empty($complemento)) {
    $valores[] = "complemento = '$complemento'";
}

$sql .= implode(", ", $valores);
$sql .= " WHERE id_usuario = " . $_SESSION['id_usuario'];

$result = mysqli_query($conexao, $sql);

if (!empty($data_nascimento)){
    // Converta as strings para objetos DateTime
    $dataAtual = new DateTime();
    $dataNascimento = DateTime::createFromFormat('Y-m-d', $data_nascimento);
    
    // Calcule a diferença entre as datas
    $idade = $dataAtual->diff($dataNascimento)->y;
}
if (!empty($data_nascimento)){
    if($idade >= 16 ){
        if ($result == 1) {
            $_SESSION['status_cadastro'] = true;
            echo '<script type="text/javascript">
                                       alert("Alteração realizada com sucesso! Faça seu login novamente para entrar no sistema.");
                                       window.location.href = "loginsistema.php";
                                      </script>';
    
        } else {
            echo "Erro ao atualizar: " . $conexao->error;
        }
    }else{
        echo '<script type="text/javascript">
            alert("Menores de 16 não podem votar.");
            window.history.back(); // Voltar para a página anterior
            location.reload();
            location.reload();
             </script>';
    }
}else{
    if ($result == 1) {
        $_SESSION['status_cadastro'] = true;
        echo '<script type="text/javascript">
                                   alert("Alteração realizada com sucesso! Faça seu login novamente para entrar no sistema.");
                                   window.location.href = "loginsistema.php";
                                  </script>';

    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
}


$conexao->close();
exit;
?>
