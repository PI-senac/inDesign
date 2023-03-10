const formulario = document.querySelector('#cadastro-container');

if(formulario){
    formulario.addEventListener('submit', async (e) => {
        e.preventDefault();

        const dadosForm = new FormData(formulario);
        
        const dados = await fetch('cadastrar.php', {
            method: 'POST',
            body: dadosForm,
        });
        const resposta = await dados.json();

        console.log(resposta);
    });
}

// https://dev.to/codeanddeploy/check-if-email-address-is-already-exists-in-the-database-4jf7