const formulario = document.querySelector('#cadastro-container');
const alerta = document.querySelector('.alerta');

formulario.addEventListener('submit', async (e) => {
    e.preventDefault();
    if(document.querySelector('#nome').value === ''){
        alerta.innerHTML = '<span>preenche a buceta do nome</span>'
    }else{
    
        const dadosForm = new FormData(formulario);
        dadosForm.append('add', 1);
    
        const dados = await fetch('cadastrar.php', {
            method: 'POST',
            body: dadosForm,
        });
    
        await dados.json();
    }
});