<?php
function logar($email){
    require_once './conexao.php';
    $conexao = conectar();
    $email = strval("$email");

    $sql = "SELECT * FROM adm WHERE email = '$email'";


    $resposta = mysqli_query($conexao, $sql) or die("Erro ao conectar");

    return $resposta;

      
}
?>