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
    <a class="a_header" href="../meu perfil/index.php">Perfil</a>
    <a class="a_header" href="#">Quiz</a>
    <div class="container">
        <form action="" class="search-bar">
            <input type="text" placeholder="Pesquise aqui" name="q">
            <button type="submit"><img src="/inDesign/img/lupa.png"></button>
        </form>
    </div>
</header>

<section id="main_section_login">
    <form id="login-container" method="POST" action="./logar.php">
        <p class="titulo_login_cadastro">Login</p>
            <div class="login_form1">
                <div class="inputs">
                    <label for="e-mail">E-mail<span>*</span>:</label><br>
                    <input type="text" size="20px" id="e-mail" name="e-mail">
                </div>

                <div class="inputs">
                    <label for="pswd">Senha<span>*</span>:</label><br>
                    <input type="password" size="20px" id="pswd" name="pswd">
                </div>
            </div>

        <div class="botao">
        <input type="submit" value="Entrar" class="botao-login">
        </div>
    </form>

<form method="POST" id="cadastro-container">
    <p class="titulo_cadastro_cadastro">Cadastre-se</p>
    <div class="cadastro_form1">
        <div class="inputs">
            <label for="nome">Nome completo<span>*</span>:</label><br>
            <input id="nome" name="nome" type="text" size="20px"><br>
            <span class="alerta-nome alertas"></span>
        </div>

        <div class="inputs">
            <label for="cpf">CPF<span>*</span>:</label><br>
            <input id="cpf" name="cpf" type="text" size="10px">
            <span class="alerta-cpf alertas"></span>
        </div>

        <div class="inputs">
            <label for="email">E-mail<span>*</span>: </label><br>
            <input id="email" name="email" type="text" size="25px">
            <span class="alerta-email alertas"></span>
        </div>

        <div class="inputs">
            <label for="nascimento">Data de Nascimento<span>*</span>: </label><br>
            <input id="nascimento" name="nascimento" type="date" id="data_nascimento_input">
            <span class="alerta-nascimento alertas"></span>
        </div>
        
        <div class="inputs">
            <label for="telefone">Telefone Celular<span>*</span>:</label><br>
            <input id="telefone" name="telefone" type="text">
            <span class="alerta-tel alertas"></span>
        </div>
        
        <div class="inputs">
            <label for="senha">Senha<span>*</span>: </label><br>
            <input id="senha" name="senha" type="password" size="15px">
            <span class="alerta-pswd alertas"></span>
        </div>

        <div class="inputs">
            <label for="conf-senha">Confirmar Senha<span>*</span>: </label><br>
            <input id="conf-senha" name="conf-senha" type="password">
        </div>

    </div>
    <span class="alerta-user alertas"></span>

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
<script src="/inDesign/js/fetch.js"></script>
</body>
</html>