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
        echo "<script> location = '../session/login.php' </script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/inDesign/styles/decorador.css">
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

<section class="header-login"> 
    <a class="_2header_p" href="./session/login.php">Login</a>
    <span class="_2header_p">|</span>
    <a class="_2header_p" href="./session/login.php">Cadastre-se</a>
</section>

<section class="profile-container">
    <article class="box1">
        <div class="user">
            <img class="default-pfp" src="/inDesign/img/default_pfp.png">
            <h2 class="nome"><?php echo $nome; ?></h2>
        </div>
        <div class="opcoes cadeado">
            <img src="/inDesign/img/mala roxa.svg">
            <a href="./index.php" class="active">Área do decorador</a>
        </div>
        <div class="opcoes">
            <img src="../../img/user avatar.svg">
            <a href="./perfil.php">Meu perfil</a>
        </div>
        <div class="opcoes">
            <img src="/inDesign/img/mini sofa.svg">
            <a href="./decoracoes.html">Minhas decorações</a>
        </div>
        <div class="opcoes">
            <img src="/inDesign/img/moeda.svg">
            <a href="./cobranca.html">Dados de cobrança</a>
        </div>
        <div class="opcoes cadeado">
            <img src="/inDesign/img/cadeado.svg">
            <a href="./seguranca.html">Senha e segurança</a>
        </div>
        <div class="cadeado" style="margin-top: 2rem;">
            <a class="alterar-dados" href="../session/logout.php">Sair</a>
        </div>
    </article>
    <article class="box6">
        <h1 class="meu-perfil">Área do decorador</h1><hr>
        <h2 class="subtexto">Olá, Decorador inDesign! Nessa área, você localiza as principais informações para a utilização da nossa ferramenta.</h2><hr>
        <div class="area-decorador">
            <div class="opcoes-decorador">
                <h3>Novo projeto</h3>
                <span>Inicie um novo projeto de decoração</span>
                <a class="botao-decorador" href="">Novo projeto</a>
            </div>
            <div class="opcoes-decorador">
                <h3>Minhas decorações</h3>
                <span>Inicie um novo projeto de decoração</span>
                <a class="botao-decorador" href="">Novo projeto</a>
            </div>
            <div class="opcoes-decorador">
                <h3>Redefinir senha</h3>
                <span>Inicie um novo projeto de decoração</span>
                <a class="botao-decorador" href="">Novo projeto</a>
            </div>
            <div class="opcoes-decorador">
                <h3>Ajuda</h3>
                <span>Inicie um novo projeto de decoração</span>
                <a class="botao-decorador" href="">Novo projeto</a>
            </div>
        </div>
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