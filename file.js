function clique(){
    alert("Recebemos sua mensagem, em breve retornaremos o contato! Obrigadx!");
}

/*function countCharacters(){
    document.forms[0].elements[5].value=
    document.forms[0].elements[4].value.length-1;
}*/
function limite_textarea(valor) {
    quant = 300;
    total = valor.length
    console.log(total)
    if(total <= quant) {
        resto = quant - total;
        document.getElementById('cont').innerHTML = resto;
    } else {
        document.getElementById('texto').value = valor.substr(0,quant);
    }
}