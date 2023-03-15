const formulario = document.querySelector('#cadastro-container');
const alertas = document.querySelectorAll('.alertas');

formulario.addEventListener('submit', async (e) => {
    e.preventDefault();

    alertas.forEach(alerta => alerta.addEventListener('keyup', tiraAlerta));

    if(document.querySelector('#nome').value === ''){
        document.querySelector('.alerta-nome').innerHTML = 'o campo nome é obrigatório';

    }else if(document.querySelector('#email').value === ''){
        document.querySelector('.alerta-email').innerHTML = 'o campo email é obrigatório';
    
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

function tiraAlerta(){
    alertas.innerHTML = '';
}
