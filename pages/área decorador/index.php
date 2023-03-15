<?php
    require '../session/conexao.php';
    
    session_start();
    
    if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
        require '../session/conexao.php';
        
        $decorador = $_SESSION['usuario'][1];
        $nome = $_SESSION['usuario'][0];
    }else{
        echo "<script> location = '../session/login.php' </script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bem vindo a área do decorador</title>
</head>
<body>
    <h2>olá, <?php $nome; ?></h2>
    <a href="../session/logout.php">sair</a>
</body>
</html>