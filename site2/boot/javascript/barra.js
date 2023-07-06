const progresso = document.querySelector('.barra div');
const input = document.querySelector('.input-barra');

const alterarProgresso = ()=>{
    if(input.value > 100){
        input.value = 100;
    }
    if(input.value < 0){
        input.value = 0;
    }
    progresso.setAttribute('style', 'width: ' +input.value+ '%');
}