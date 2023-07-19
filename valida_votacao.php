<?php
session_start();
include("conexao.php");

//Pegando CPF
$sql_cpf = "select cpf from usuario1 where id_usuario = " . $_SESSION['id_usuario'];
$result_cpf = mysqli_query($conexao, $sql_cpf);
$row_cpf = mysqli_fetch_assoc($result_cpf);
$cpf = $row_cpf['cpf'];
//código para pegar cpf da sessão

$id_funcao = $_GET['id_funcao'];



if($id_funcao == 1){
  $cidade = $_GET['id_cidade'];

    $sql_id_estado = "select id_estado from cidade where id_cidade = " . $cidade;
    $result_id_estado = mysqli_query($conexao, $sql_id_estado);
    $row_id_estado = mysqli_fetch_assoc($result_id_estado);
    $id_estado = $row_id_estado['id_estado'];

    $_SESSION['cpf'] = "$cpf";


    $sql_cpf = "SELECT COUNT(*) AS total FROM cadastro_pesquisa WHERE cpf_usuario = '$cpf' and id_funcao = '$id_funcao' and id_cidade = '$cidade' and id_estado = '$id_estado'";
    $result_cpf = mysqli_query($conexao, $sql_cpf);
    $row_cpf = mysqli_fetch_assoc($result_cpf);
    $totalcpf = $row_cpf['total'];

}elseif($id_funcao == 2){
  $id_estado = $_GET['estado'];

    $sql_cpf = "SELECT COUNT(*) AS total FROM cadastro_pesquisa WHERE cpf_usuario = '$cpf' and id_funcao = 2 and id_estado = '$id_estado'";
    $result_cpf = mysqli_query($conexao, $sql_cpf);
    $row_cpf = mysqli_fetch_assoc($result_cpf);
    $totalcpf = $row_cpf['total'];

}else{
    $sql_cpf = "SELECT COUNT(*) AS total FROM cadastro_pesquisa WHERE cpf_usuario = '$cpf' and id_funcao = 3";
    $result_cpf = mysqli_query($conexao, $sql_cpf);
    $row_cpf = mysqli_fetch_assoc($result_cpf);
    $totalcpf = $row_cpf['total'];
}

//$_SESSION['id_cidade'] = $cidade ;

if($totalcpf == 0){
  if ($id_funcao == 1) {
    // Redirecionamento para votar_prefeito.php
    echo '<script type="text/javascript">
      window.location.href = "votar_prefeito.php?id_estado='.$id_estado.'&id_cidade='.$cidade.'&id_funcao='.$id_funcao.'";
    </script>';
    exit;
  } elseif ($id_funcao == 2) {
    // Redirecionamento para votar_governador.php
    echo '<script type="text/javascript">
      window.location.href = "votar_governador.php?id_estado='.$id_estado.'&id_funcao='.$id_funcao.'";
    </script>';
    exit;
  } else {
    // Redirecionamento para votacao_presidente.php
    echo '<script type="text/javascript">
      window.location.href = "votacao_presidente.php?id_estado='.$id_estado.'&id_cidade='.$cidade.'&id_funcao='.$id_funcao.'";
    </script>';
    exit;
  }
}else{
    echo '<script type="text/javascript">

                               window.location.href = "verifica_votos.php?id_funcao='.$id_funcao.'&id_cidade='. $cidade.'&id_estado='.$id_estado.'";
                              </script>';
                              exit;
}
$conexao->close();

//header('Location: home.php');
exit;



 ?>
