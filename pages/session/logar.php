<?php
    require_once('./conexao.php');

    if(isset($_POST['e-mail']) && isset($_POST['pswd']) && $conn != null){
        $query = $conn->prepare("SELECT * FROM users WHERE email = ? AND senha = ?");
        $query->execute(array($_POST['e-mail'], $_POST['pswd']));
        $email = $_POST['e-mail'];
        $decorador = $_POST['e-mail'];
        
        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
            $conexao = new mysqli('localhost', 'root', '', 'teste_indesign');
            
            session_start();
            $_SESSION['usuario'] = array($user['nome'], $user['decorador']);
            $consultaId =  "SELECT decorador FROM users where email = '$email'";
            $result = $conexao->query($consultaId);
            $row = mysqli_fetch_array($result);
            $aaa = $row[0] +0;
            
            if($aaa == 1){
/*                 var_dump($row);
                echo 'if'; */
                header("location: ../área decorador/index.php");
            }else{
/*                 var_dump($row);
                echo 'else'; */
               // var_dump($consultaId);
                header("location: ../meu perfil/index.php");
            }

        }else{
            echo "<script>location = './login.php' </script>";
        }
    }else{
        echo "<script>location = './login.php' </script>";
    }
?>