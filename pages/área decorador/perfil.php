<?php
    require '../session/conexao.php';
    
    session_start();
    
    if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
        require '../session/conexao.php';
        $nome = $_SESSION['usuario'][0];
        $cpf = $_SESSION['usuario'][1];
        $nasc = $_SESSION['usuario'][2];
        $email = $_SESSION['usuario'][3];
        $telefone = $_SESSION['usuario'][4];
    }else{
        header("location: ../session/login.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/inDesign/styles/perfil.css">
    <title>Meu perfil</title>
</head>
<body>
<header>
    <img src="/inDesign/img/Wireframe PI 1.png" width="20%">
    <a class="a_header" href="../index.html">Início</a>
    <a class="a_header" href="#">Profissionais</a>
    <a class="a_header" href="../sobre.html">Sobre</a>
    <a class="a_header active" href="./index.php">Perfil</a>
    <a class="a_header" href="#">Quiz</a>
    <div class="container">
        <form action="" class="search-bar">
            <input type="text" placeholder="Pesquise aqui" name="q">
            <button type="submit"><img src="/inDesign/img/lupa.png"></button>
        </form>
    </div>
</header>

<section class="profile-container">
    <article class="box1">
        <div class="user">
            <img class="default-pfp" src="/inDesign/img/default_pfp.png">
            <h2 class="nome"><?php echo $nome; ?></h2>
        </div>
        <div class="opcoes cadeado">
            <img src="/inDesign/img/mala.svg">
            <a href="./index.php">Área do decorador</a>
        </div>
        <div class="opcoes">
            <img src="/inDesign/img/user avatar roxo.svg">
            <a href="./perfil.php" class="active">Meu perfil</a>
        </div>
        <div class="opcoes">
            <img src="/inDesign/img/mini sofa.svg">
            <a href="./decoracoes.php">Minhas decorações</a>
        </div>
        <div class="opcoes">
            <img src="/inDesign/img/moeda.svg">
            <a href="./recebimento.php">Dados de recebimento</a>
        </div>
        <div class="cadeado" style="margin-top: 2rem;">
            <a class="alterar-dados" href="../session/logout.php">Sair</a>
        </div>
    </article>
    <article class="box2">
        <h1 class="meu-perfil">Meu perfil</h1>
        <div class="opcoes cadeado">
            <img src="/inDesign/img/cpf icon.svg">
            <p><?php echo $cpf; ?></p>
        </div><hr>
        <div class="opcoes">
            <img src="/inDesign/img/bolo.svg">
            <p><?php echo $nasc; ?></p>
        </div><hr>
        <div class="opcoes">
            <img src="/inDesign/img/email.svg">
            <p><?php echo $email; ?></p>
        </div><hr>
        <div class="opcoes">
            <img src="/inDesign/img/celular.svg" class="celular">
            <p><?php echo $telefone; ?></p>
        </div><hr>
        <button class="alterar-dados">Altere seus dados</button>
    </article>
    <article class="box3">
        <h1 class="meu-estilo">Meu estilo</h1>
        <img src="/inDesign/img/default_pfp.png">
        <h1 class="estilo">estilo</h1>
        <p>Não é preciso estar no campo para poder adicionar um toque rústico ao décor da casa. A seleção de ambientes abaixo prova que o estilo, se bem dosado, é capaz de trazer aconchego a qualquer espaço. A dica é combinar elementos de toque natural ou estruturas expostas com peças ou revestimentos de estética oposta, criando, assim, um contraste interessante para a madeira na decoração.
        </p>
    </article>
</section>

<footer>
    <section class="footer-container">
        <article class="side">
            <h2>Empresa</h2>
            <a href="#">Sobre a inDesign</a>
            <a href="#">Dúvidas Frequentes</a>
            <a href="#">Contato</a>
            <a href="#">Termos de Uso</a>
            <a href="#">Política de Privacidade</a>
        </article>

        <article class="side">
            <h2>Conheça</h2>
            <a href="#">Como funciona</a>
            <a href="#">Depoimentos</a>
            <a href="#">Teste de estilo</a>
            <a href="#">Preço</a>
        </article>

        <article class="side">
            <h2>Vem com a gente!</h2>
            <div class="icons">
                <a href="https://br.pinterest.com/" target="_blank"><img class="img_footer" src="/inDesign/img/pin.png"></a>
                <a href="https://www.instagram.com/" target="_blank"><img class="img_footer" src="/inDesign/img/instagram.png"></a>
                <a href="https://pt-br.facebook.com/" target="_blank"><img class="img_footer" src="/inDesign/img/face.png"></a>
            </div>
        </article>

        <article class="side">
            <h2>Precisa de ajuda?</h2>
            <div class="img-span">
                <img class="zap" src="/inDesign/img/logo_whats.png" width="18%">
                <span class="whats">(41)98736-9496</span>
            </div>
            <p class="horario">Disponível em horário comercial</p>
        </article>
    </section>
</footer>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="/inDesign/js/active-header.js"></script>
</body>
</html>