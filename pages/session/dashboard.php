<?php
    require ('./conexao.php');

    session_start();

    if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
        require ('./conexao.php');

        $decorador = $_SESSION['usuario'][1];
        $nome = $_SESSION['usuario'][0];
    }else{
        echo "<script> location = '../meu perfil/index.php' </script>";
    }
?>
<html>
<head>
    <title>dashboard - <?php echo $nome; ?></title>
</head>
<body>
    <?php if($decorador): ?>
    <table>
        <thead>
            <tr>
                <td>e-mail</td>
                <td>senha</td>
                <td>nome</td>
                <td>adm</td>
                <td>id</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = $conn->prepare("SELECT * FROM users");
                $query->execute();
                
                $users = $query->fetchAll(PDO::FETCH_ASSOC);

                for($i = 0; $i < sizeof($users); $i++):
                    $usuarioAtual = $users[$i];
            ?>
            <tr>
                <td><?php echo $usuarioAtual["email"]; ?></td>
                <td><?php echo $usuarioAtual["senha"]; ?></td>
                <td><?php echo $usuarioAtual["nome"]; ?></td>
                <td><?php echo $usuarioAtual["decorador"]; ?></td>
                <td><?php echo $usuarioAtual["id"]; ?></td>
            </tr>
            <?php endfor; ?>
        </tbody>            
    </table>
    <?php endif; ?>

    <a href="./logout.php">sair</a>
</body>
</html>