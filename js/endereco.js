const botao = document.querySelector('.alterar-dados');
const inputs = document.querySelectorAll('.formulario');
const ceeep = document.querySelector('.cep')

botao.addEventListener('click', () => {
    inputs.forEach((inputs) => {
        inputs.disabled = false;
    });
});

$('#edit').click(function() {
    $(this).hide();
    $('#save, #cancel').show();
});

$('#cancel').click(function() {
    $('#edit').show();
    $('#save, #cancel').hide();
});

$('#save').click(function() {
    $(this).hide();
    $('#cancel').hide();
    $('#edit').show();
});

ceeep.addEventListener("keypress", (e) => {
    const onlyNumbers = /[0-9]|\./;
    const key = String.fromCharCode(e.keyCode);
  
    // allow only numbers
    if (!onlyNumbers.test(key) || ceeep == 8) {
      e.preventDefault();
      return;
    }
  });

$(".cep").keyup(function(){
    $.ajax({
        url: 'https://viacep.com.br/ws/'+$(this).val()+'/json',
        dataType: 'json',
        success: function(resposta){
            $(".address").val(resposta.logradouro);
            $(".cidade").val(resposta.localidade);
            $(".estado").val(resposta.uf);
            $(".house-number").focus();
        }
    });
});