import { nameValidate, cpfValidate, emailValidate, birthValidate, telValidate, pswdValidate, comparePswd } from "./validacoes.js";


const formulario = document.querySelector('#cadastro-container');
const span = document.querySelector('.span-required')
/* const nome = document.querySelector('.nome-cad');
const cpf = document.querySelector('.cpf');
const email = document.querySelector('.email-cad');
const nascimento = document.querySelector('.nasc');
const telefone = document.querySelector('.tel');
const senha = document.querySelector('.pswd');
const confSenha = document.querySelector('.conf-pswd'); */

formulario.addEventListener('submit', async (e) => {
    e.preventDefault();
    
/*     if(nome.value || cpf.value || email.value || nascimento.value || telefone.value || senha.value || confSenha.value == ''){
        nameValidate();
        cpfValidate();
        emailValidate();
        birthValidate();
        telValidate();
        pswdValidate();
        comparePswd();

        return; */
    if(nome.value == ''){
        span.style.display = 'block';
    }else{
        const dadosForm = new FormData(formulario);
        dadosForm.append('add', 1);
    
        const dados = await fetch('cadastrar.php', {
            method: 'POST',
            body: dadosForm,
        });
    
        const resposta = await dados.json();
    
        if(resposta['erro']){
            document.querySelector('.alerta-user').innerHTML = resposta['msg'];
        }else{
            document.querySelector('.alerta-user').innerHTML = resposta['msg'];
            formulario.reset();
        }

    }
});
    