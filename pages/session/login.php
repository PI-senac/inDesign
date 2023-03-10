<?php
    include_once './conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cadastro</title>
    <link rel="stylesheet" href="/inDesign/styles/login.css">
</head>
<body>
    <header>
    <img src="/inDesign/img/Wireframe PI 1.png" width="20%">
    <a class="a_header" href="../index.html">Início</a>
    <a class="a_header" href="#">Profissionais</a>
    <a class="a_header" href="../sobre.html">Sobre</a>
    <a class="a_header" href="../meu perfil/perfil.html">Perfil</a>
    <a class="a_header" href="#">Quiz</a>
    <div class="container">
        <form action="" class="search-bar">
            <input type="text" placeholder="Pesquise aqui" name="q">
            <button type="submit"><img src="/inDesign/img/lupa.png"></button>
        </form>
    </div>
</header>

<section id="main_section_login">
    <div id="login-container">
        <div id="login-container2"> 
        <p class="titulo_login_cadastro">Login</p>
            <div id="login_form1">
            <label for="">E-mail<span>*</span>:</label><br>
            <input type="text" size="20px"><br>
            </div>

            <div id="login_form1">
            <label for="">Senha<span>*</span>:</label><br>
            <input type="password" size="20px" >
            </div>
        <div id="div_botao_entrar"><a id="botao_login" href="#">Entrar</a></div>

        </div>

    </div>

<form id="cadastro-container">
    <p class="titulo_cadastro_cadastro">Cadastre-se</p>
    <div class="cadastro_form1">
        <div class="inputs">
            <label for="nome">Nome completo<span>*</span>:</label><br>
            <input id="nome" name="nome" type="text" size="20px"><br>
            <span class="alerta"></span>
        </div>

        <div class="inputs">
            <label for="cpf">CPF<span>*</span>:</label><br>
            <input id="cpf" name="cpf" type="text" size="10px">
        </div>

        <div class="inputs">
            <label for="email">E-mail<span>*</span>: </label><br>
            <input id="email" name="email" type="text" size="25px">
        </div>

        <div class="inputs">
            <label for="nascimento">Data de Nascimento<span>*</span>: </label><br>
            <input id="nascimento" name="nascimento" type="date" id="data_nascimento_input">
        </div>
        
        <div class="inputs">
            <label for="telefone">Telefone Celular<span>*</span>:</label><br>
            <input id="telefone" name="telefone" type="text">
        </div>
        
        <div class="inputs">
            <label for="senha">Senha<span>*</span>: </label><br>
            <input id="senha" name="senha" type="password" size="15px">
        </div>

        <div class="inputs">
            <label for="conf-senha">Confirmar Senha<span>*</span>: </label><br>
            <input id="conf-senha" name="conf-senha" type="password">
        </div>
    </div>

    <div class="botao">
        <input type="submit" value="Cadastre-se" class="botao-cadastro">
    </div>
</form>

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
                <a href="https://br.pinterest.com/" target="_blank"><img class="img_footer" src="/img/pin.png"></a>
                <a href="https://www.instagram.com/" target="_blank"><img class="img_footer" src="/img/instagram.png"></a>
                <a href="https://pt-br.facebook.com/" target="_blank"><img class="img_footer" src="/img/face.png"></a>
            </div>
        </article>

        <article class="side">
            <h2>Precisa de ajuda?</h2>
            <div class="img-span">
                <img class="zap" src="/img/logo_whats.png" width="18%">
                <span class="whats">(41)98736-9496</span>
            </div>
            <p class="horario">Disponível em horário comercial</p>
        </article>
    </section>
</footer>
<script src="/inDesign/js/fetch-cadastro.js"></script>
</body>
</html>