<?php
session_start();
include("conexao.php");

//Pegando CPF
$sql_cpf = "select cpf from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_cpf = mysqli_query($conexao, $sql_cpf);
$row_cpf = mysqli_fetch_assoc($result_cpf);
$cpf = $row_cpf['cpf'];
//código para pegar cpf da sessão

$id_funcao = $_SESSION['id_funcao'];
$cidade = $_SESSION['id_cidade'];


if($id_funcao == 1){
    $sql_id_estado = "select id_estado from cidade where id_cidade = " . $_SESSION['id_cidade'];
    $result_id_estado = mysqli_query($conexao, $sql_id_estado);
    $row_id_estado = mysqli_fetch_assoc($result_id_estado);
    $id_estado = $row_id_estado['id_estado'];

    $_SESSION['cpf'] = "$cpf";
    

    $candidato = mysqli_real_escape_string($conexao, trim($_POST['opt']));
    $observacao = mysqli_real_escape_string($conexao, trim($_POST['observacao']));
    $id_funcao = $_SESSION['id_funcao']; 

    $sql_cpf = "SELECT COUNT(*) AS total FROM cadastro_pesquisa WHERE cpf_usuario = '$cpf' and id_funcao = '$id_funcao' and id_cidade = '$cidade' and id_estado = '$id_estado'";
    $result_cpf = mysqli_query($conexao, $sql_cpf);
    $row_cpf = mysqli_fetch_assoc($result_cpf);
    $totalcpf = $row_cpf['total'];

}elseif($id_funcao == 2){  
    $candidato = mysqli_real_escape_string($conexao, trim($_GET['opt']));
    $observacao = mysqli_real_escape_string($conexao, trim($_GET['observacao']));

    $id_estado = $_SESSION['estado'];

    $sql_id_cidade = "select id_cidade from candidato where id_candidato ='$candidato' and id_estado = '" . $id_estado . "'";
    $result_id_cidade = mysqli_query($conexao, $sql_id_cidade);
    $row_id_cidade = mysqli_fetch_assoc($result_id_cidade);
    $cidade = $row_id_cidade['id_cidade'];

    $sql_cpf = "SELECT COUNT(*) AS total FROM cadastro_pesquisa WHERE cpf_usuario = '$cpf' and id_funcao = 2 and id_estado = '$id_estado'";
    $result_cpf = mysqli_query($conexao, $sql_cpf);
    $row_cpf = mysqli_fetch_assoc($result_cpf);
    $totalcpf = $row_cpf['total'];
    
}else{
    $candidato = mysqli_real_escape_string($conexao, trim($_POST['opt']));
    $observacao = mysqli_real_escape_string($conexao, trim($_POST['observacao']));

    $sql = "select id_cidade, id_estado from candidato where id_candidato ='$candidato'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);
    $cidade = $row['id_cidade'];
    $id_estado = $row['id_estado'];

    $sql_cpf = "SELECT COUNT(*) AS total FROM cadastro_pesquisa WHERE cpf_usuario = '$cpf' and id_funcao = 3";
    $result_cpf = mysqli_query($conexao, $sql_cpf);
    $row_cpf = mysqli_fetch_assoc($result_cpf);
    $totalcpf = $row_cpf['total'];
}

$sql = "INSERT INTO cadastro_pesquisa (id_candidato, id_funcao, obs, cpf_usuario, id_cidade, id_estado) 
         VALUES ('$candidato','$id_funcao', '$observacao','$cpf', '$cidade','$id_estado')";

$_SESSION['id_cidade'] = $cidade ;

if($totalcpf == 0){
    if($conexao->query($sql) === TRUE) {
        $_SESSION['status_cadastro'] = true;
        echo '<script type="text/javascript">
               window.location.href = "confirma_votacao.php?id_estado='.$id_estado.'";
              </script>';
        exit;
    } else {
    echo "Erro ao cadastrar: " . $conexao->error;
    }
}else{
    echo '<script type="text/javascript">
                               alert("Você só pode votar uma única vez.");
                               window.location.href = "home.php";
                              </script>';
                              exit;
}    
$conexao->close();

//header('Location: home.php');
exit;
                


 ?>
