const requireds = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

//funções úteis
function testaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
  if (strCPF == "00000000000") return false;

  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

  Soma = 0;
    for (var i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}

function maiorQue18(data) {
    const dataAtual = new Date()
    const dataMais18 = new Date(data.getUTCFullYear() + 18, data.getUTCMonth(), data.getUTCDate())

    return dataMais18 <= dataAtual
}


//lançar os erros
function setError(index){
    requireds[index].style.border = '2px solid #e63636';
    requireds[index].style.outlineColor = '#e63636';
    spans[index].style.display = 'block';
}

function removeError(index){
    requireds[index].style.border = '';
    requireds[index].style.outlineColor = '';
    spans[index].style.display = 'none';
}

function nameValidate(){
    if(requireds[0].value.length < 2){
        setError(0);
        document.querySelector('.botao-cadastro').disabled
    }else{
        removeError(0);
    }
}

function cpfValidate(){
    var strCPF = requireds[1].value;

    if(!testaCPF(strCPF)){
        setError(1);
    }else{
        removeError(1);
    }
}

function emailValidate(){
    if(!emailRegex.test(requireds[2].value)){
        setError(2);
    }else{
        removeError(2);
    }
}

function birthValidate(){
    const dataRecebida = new Date(requireds[3].value)

    if(!maiorQue18(dataRecebida)){
        setError(3);
    }else{
        removeError(3);
    }
}

function telValidate(){
    if(requireds[4].value.length < 8){
        setError(4);
    }else{
        removeError(4);
    }
}

function pswdValidate(){
    if(requireds[5].value.length < 8){
        setError(5);
    }else{
        removeError(5);
        comparePswd();
    }
}

function comparePswd(){
    if(requireds[5].value == requireds[6].value && requireds[6].value.length >= 8){
        removeError(6);
    }else{
        setError(6);
    }
}

export { nameValidate, cpfValidate, emailValidate, birthValidate, telValidate, pswdValidate, comparePswd }
