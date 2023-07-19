<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$nm_usuario = mysqli_real_escape_string($conexao, trim($_POST['nome_usuario']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf_usuario']));
$id_tipo = mysqli_real_escape_string($conexao, trim($_POST['id_tipo']));
$data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['dt_nascimento']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha_usuario']));
$confirma_senha = mysqli_real_escape_string($conexao, trim($_POST['confirma_senha_usuario']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$sexo = mysqli_real_escape_string($conexao, trim($_POST['genero']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$bairro = mysqli_real_escape_string($conexao, trim($_POST['nome_bairro']));
$numero = mysqli_real_escape_string($conexao, trim($_POST['numero_endereco']));
$complemento = mysqli_real_escape_string($conexao, trim($_POST['complemento']));

$sql_id_estado = "select id_estado from cidade where id_cidade = " . $cidade;
$result_id_estado = mysqli_query($conexao, $sql_id_estado);
$row_id_estado = mysqli_fetch_assoc($result_id_estado);
$id_estado = $row_id_estado['id_estado'];

$cpf = $_SESSION['cpf_validado'];

$sql_email = "SELECT COUNT(*) AS total FROM usuario1 WHERE email = '$email'";
$result_email = mysqli_query($conexao, $sql_email);
$row_email = mysqli_fetch_assoc($result_email);
$totalEmail = $row_email['total'];

$sql_usuario = "SELECT COUNT(*) AS total FROM usuario1 WHERE nm_usuario = '$nm_usuario'";
$result_usuario = mysqli_query($conexao, $sql_usuario);
$row_usuario = mysqli_fetch_assoc($result_usuario);
$totalUsuarios = $row_usuario['total'];

 $sql = "INSERT INTO usuario1 (nm_usuario,nome, cpf, dt_nascimento, telefone, email, senha_usuario, id_tipo,id_estado, id_cidade, sexo, endereco, nome_bairro, numero_endereco, complemento) 
         VALUES ('$nm_usuario','$nome', '$cpf', '$data_nascimento', '$telefone', '$email', '$senha','$id_tipo', '$id_estado','$cidade', '$sexo', '$endereco', '$bairro', '$numero', '$complemento')";

if($totalUsuarios == 0){
    if($totalEmail == 0){
        if(strlen($senha) >= 8){
            if($senha === $confirma_senha){
                if((date('Y-m-d') - $data_nascimento) >= 16 ){
                    if($conexao->query($sql) === TRUE) {
                        $_SESSION['status_cadastro'] = true;
                        echo '<script type="text/javascript">
                               alert("Cadastro realizado com sucesso!");
                               window.location.href = "loginsistema.php";
                              </script>';
                              exit;
                    } else {
                        echo "Erro ao cadastrar: " . $conexao->error;
                    }
                    $conexao->close();

                    header('Location: index.php');
                    exit;
                }else{
                    echo '<script type="text/javascript">
                        alert("Menores de 16 não podem votar.");
                        window.history.back(); // Voltar para a página anterior
                        location.reload();
                        location.reload();
                         </script>';
                }    
            }else{
                echo '<script type="text/javascript">
                alert("Senhas não coincidem.");
                window.history.back(); // Voltar para a página anterior
                location.reload();
                location.reload();
                 </script>';
            }
        }else{
            echo '<script type="text/javascript">
                alert("Senha precisa ter no mínimo 8 caracteres");
                window.history.back(); // Voltar para a página anterior
                location.reload();
                location.reload();
                 </script>';
        }
    }else{
        echo '<script type="text/javascript">
            alert("E-mail já cadastrado, insira outro.");
            window.history.back(); // Voltar para a página anterior
            location.reload();
            location.reload();
             </script>';
    }
}else{
    echo '<script type="text/javascript">
            alert("Nome de usuário já cadastrado, insira outro.");
            window.history.back(); // Voltar para a página anterior
            location.reload();
            location.reload();
             </script>';
}  

?>
