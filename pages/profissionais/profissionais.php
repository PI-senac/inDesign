<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conheça os profissionais</title>
    <link rel="stylesheet" href="/inDesign/styles/profissionais.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<header>
        <img src="/inDesign/img/Wireframe PI 1.png" width="20%">
        <a class="a_header" href="../index.html">Início</a>
        <a class="a_header active" href="./profissionais.php">Profissionais</a>
        <a class="a_header" href="../sobre.html">Sobre</a>
        <a class="a_header" href="../meu perfil/index.php">Perfil</a>
        <a class="a_header" href="#">Quiz</a>
        <div class="container">
            <form action="" class="search-bar">
                <input type="text" placeholder="Pesquise aqui..." name="q">
                <button type="submit"><img src="/inDesign/img/lupa.png"></button>
            </form>
        </div>
</header>
<section class="header-login"> 
    <a class="_2header_p" href="#">Login</a>
    <a class="_2header_p">|</a>
    <a class="_2header_p" href="#">Cadastre-se</a>
</section>

<!-- Body - Taci -->
    <section>
        <h1 class="titulo_estilo">Aqui estão os profissionais especializados no seu estilo!</h1>
            <div class="subtitulos">
                <div class="seu-estilo">
                    <p class="parag">Seu estilo:</p>
                    <span>Rústico</span>
                </div>
                <span></span>
                <div class="ordenar">
                    <p class="parag">Ordenar por:</p>
                        <select size="1">
                            <option value="">Selecione o estilo</option>
                            <option value="1">Melhor Avaliação</option>
                            <option value="2">Contemporâneo</option>
                            <option value="3">Rústico</option>
                            <option value="4">Clássico</option>
                            <option value="5">Moderno</option>
                        </select>
                </div>
            </div>
    </section>
    <section class="decoradores">
        <article class="container-decorador">
            <div class="superior">
                <img src="/inDesign/img/user avatar.svg" alt="">
                <h3 class="nome-decorador">Yuri Martins</h3>
                <img src="/inDesign/img/4 estrelas.svg" alt="">
            </div>
            <div class="inferior">
                <span>"Faça o que ama e não trabalhará um dia sequer"</span>
                <p class="infos-decorador">Designer desde: 2018</p>
                <p class="infos-decorador">Especialidades: Estilo Rústico</p>
                <p class="infos-decorador">Decorações realizadas: 54</p>
            </div>
            <a href="./contatar-profissional.html" class="botao">Saiba mais</a>
        </article>
        <article class="container-decorador">
        <div class="superior">
                <img src="/inDesign/img/user avatar.svg" alt="">
                <h3 class="nome-decorador">Rafael Serafim</h3>
                <img src="/inDesign/img/4 estrelas.svg" alt="">
            </div>
            <div class="inferior">
                <span class="frase">"Faça o que ama e não trabalhará um dia sequer"</span>
                <p>Designer desde: 2018</p>
                <p>Especialidades: Estilo Rústico</p>
                <p>Decorações realizadas: 54</p>
            </div>
            <a href="./contatar-profissional.html" class="botao">Saiba mais</a>
        </article>
        <article class="container-decorador">
        <div class="superior">
                <img src="/inDesign/img/user avatar.svg" alt="">
                <h3 class="nome-decorador">Samille Andrade</h3>
                <img src="/inDesign/img/4 estrelas.svg" alt="">
            </div>
            <div class="inferior">
                <span>"Faça o que ama e não trabalhará um dia sequer"</span>
                <p>Designer desde: 2018</p>
                <p>Especialidades: Estilo Rústico</p>
                <p>Decorações realizadas: 54</p>
            </div>
            <a href="./contatar-profissional.html" class="botao">Saiba mais</a>
        </article>
    </section>
<!-- Fecha Body - Taci -->    
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
<script src="/inDesign/js/select.js"></script>
<script src="/inDesign/js/active-header.js"></script>
</body>
</html>     