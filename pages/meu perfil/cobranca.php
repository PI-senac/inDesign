<?php
if(isset($_POST['alterar'])){
    include_once('conexao.php');
    $cep= $_POST['cep'];
    $estado= $_POST['estado'];
    $cidade= $_POST['cidade'];
    $rua = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];

    $sql= "INSERT INTO cadastro(cep, estado, cidade, endereço, numero, complemento) VALUES ('$cep', '$estado', '$cidade', '$rua', '$numero', '$complemento')";
    $query= mysqli_query($conexao, $sql);

    if($query){
        echo "<script>
        location.replace('perfil.html');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/inDesign/styles/cobranca.css">
    <title>Meu perfil</title>
</head>
<body>
<header>
    <img src="/img/Wireframe PI 1.png" width="20%">
    <a class="a_header" href="../index.html">Início</a>
    <a class="a_header" href="#">Profissionais</a>
    <a class="a_header" href="#">Sobre</a>
    <a class="a_header active" href="./perfil.html">Perfil</a>
    <a class="a_header" href="#">Quiz</a>
    <div class="container">
        <form action="" class="search-bar">
            <input type="text" placeholder="Pesquise aqui" name="q">
            <button type="submit"><img src="/img/lupa.png"></button>
        </form>
    </div>
</header>

<section id="_2header"> 
    <a class="_2header_p" href="#">Login</a>
    <a class="_2header_p">|</a>
    <a class="_2header_p" href="#">Cadastre-se</a>
</section>

<section class="profile-container">
    <article class="box1">
        <div class="user">
            <img class="default-pfp" src="/img/default_pfp.png">
            <h2 class="nome">Yuri gostoso sexo</h2>
        </div>
        <div class="opcoes">
            <img src="../../img/user avatar.svg">
            <a href="./perfil.html">Meu perfil</a>
        </div>
        <div class="opcoes">
            <img src="/img/mini sofa.svg">
            <a href="./decoracoes.html">Minhas decorações</a>
        </div>
        <div class="opcoes">
            <img src="/img/moeda roxa.svg">
            <a href="./cobranca.html" class="active">Dados de cobrança</a>
        </div>
        <div class="opcoes cadeado">
            <img src="/img/cadeado.svg">
            <a href="./seguranca.html">Senha e segurança</a>
        </div>
    </article>
    <article class="box6">
        <h1>Dados de cobrança</h1>
        <form class="form-dados" method="post">
            <div class="input">
                <label>CEP</label><span class="obrigatorio">*</span><br>
                <input type="text" name="cep" class="formulario cep" disabled required>
            </div>
            <div class="input">
                <label>Estado</label><span class="obrigatorio">*</span><br>
                <input type="text" name="estado" class="estado" disabled>
            </div>
            <div class="input">
                <label>Cidade</label><span class="obrigatorio">*</span><br>
                <input type="text" name="cidade" class="cidade" disabled>
            </div>
            <div class="input">
                <label>Endereço</label><span class="obrigatorio">*</span><br>
                <input type="text" name="logradouro" class="address" disabled>
            </div>
            <div class="input">
                <label>Número</label><span class="obrigatorio">*</span><br>
                <input type="number" name="numero" class="formulario house-number" required disabled>
            </div>
            <div class="input">
                <label>Complemento</label><br>
                <input type="text" name="complemento" class="formulario complemento" disabled>
            </div>
            <button type="button" class="alterar-dados" value="edit" id="edit">Alterar endereço</button>
            <button type="submit" class="salvar-dados" value="save" id="save" >Salvar</button>
            <button type="button" class="cancelar-dados" value="cancel" id="cancel" >Cancelar</button>
        </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/inDesign/js/active-header.js"></script>
<script src="/inDesign/js/endereco.js"></script>
</body>
</html>