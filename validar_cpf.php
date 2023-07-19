<?php
session_start();
include("conexao.php");


$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$cpf1 = mysqli_real_escape_string($conexao, trim($_POST['cpf']));

//
function validarCPF($cpf) {
    // Remover caracteres especiais
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    
    // Verificar se possui 11 dígitos
    if (strlen($cpf) !== 11) {
        return false;
    }
    
    // Verificar se todos os dígitos são iguais
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    
    // Calcular o primeiro dígito verificador
    $soma = 0;
    for ($i = 0; $i < 9; $i++) {
        $soma += (int)$cpf[$i] * (10 - $i);
    }
    $resto = $soma % 11;
    $digito1 = ($resto < 2) ? 0 : 11 - $resto;
    
    // Calcular o segundo dígito verificador
    $soma = 0;
    for ($i = 0; $i < 10; $i++) {
        $soma += (int)$cpf[$i] * (11 - $i);
    }
    $resto = $soma % 11;
    $digito2 = ($resto < 2) ? 0 : 11 - $resto;
    
    // Verificar se os dígitos verificadores são válidos
    if ($cpf[9] != $digito1 || $cpf[10] != $digito2) {
        return false;
    }
    
    return true;
}

if(validarCPF($cpf)) {
    session_start();

    $sql = "SELECT count(cpf) AS contador from valida_cpf where cpf = '$cpf' and valida_cpf.status ='ATIVO'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);
    $validacao = $row['contador'];

    if($validacao == 1){
        // Armazenar o valor do CPF na sessão
        $_SESSION['cpf_validado'] = "$cpf";

        // Redirecionar para a tela de cadastro

        $_SESSION['status_cadastro'] = true;
        //header('Location: cadastrar_usuarios_original.php');
        header("Location: cadastrar_usuarios_original.php");
    }else{
        echo '<script type="text/javascript">
            alert("CPF cancelado ou não cadastrado no banco de dados.");
            window.history.back(); // Voltar para a página anterior
            location.reload();
            location.reload();
          </script>';
    }

    
} else {
    echo '<script type="text/javascript">
            alert("CPF inválido!");
            window.history.back(); // Voltar para a página anterior
            location.reload();
            location.reload();
          </script>';
          //header("Location: cadastrar_cpf_tela.php");
}

$conexao->close();


exit;
?>
