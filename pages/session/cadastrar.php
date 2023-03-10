<?php

include_once './conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $query_usuario = "INSERT INTO users (nome, cpf, nascimento, email, telefone, senha) VALUES (:nome, :cpf, :nascimento, :email, :telefone, :senha)";

    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':nome', $dados['nome']);
    $cad_usuario->bindParam(':cpf', $dados['cpf']);
    $cad_usuario->bindParam(':nascimento', $dados['nascimento']);
    $cad_usuario->bindParam(':email', $dados['email']);
    $cad_usuario->bindParam(':telefone', $dados['telefone']);
    $cad_usuario->bindParam(':senha', $dados['senha']);

    $cad_usuario->execute();
?>