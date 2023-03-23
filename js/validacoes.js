const form = document.querySelector('.edit-dados');
const requireds = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
const submit = document.querySelector('#save');

function setError(index){
    requireds[index].style.border = '2px solid #e63636';
    requireds[index].style.outlineColor = '#e63636';
    spans[index].style.display = 'block';
    submit.disabled == true;
}

function removeError(index){
    requireds[index].style.border = '';
    requireds[index].style.outlineColor = '';
    spans[index].style.display = 'none';
}

function nameValidate(){
    if(requireds[0].value.length < 2){
        setError(0);
    }else{
        removeError(0);
    }
}

function emailValidate(){
    if(emailRegex.test(requireds[2].value)){
        setError(2);
    }else{
        removeError(2);
    }
}