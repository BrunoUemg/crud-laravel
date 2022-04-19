var form = document.getElementById('form')
var nome = document.querySelector('#nome')

function salvarNovoEvento(event){
    event.preventDefault();

    var valueName = nome.value;

    let modal = document.getElementById('modal')
    if(valueName == null){
        modal.innerHTML = "Ops, preencha todos os campos!<br> <small>Você será redirecionado</small> "
        modal.classList.add('modal-recusar')
    }else{
        modal.innerHTML = "Solicitação enviada com sucesso, obrigado por entrar em contato... <br> <small>Você será redirecionado</small> "
        modal.classList.add('modal-active')
    }

    setTimeout(()=> {
        window.location.href ="tecnologia"

    },4000)
}
form.addEventListener('submit', salvarNovoEvento)

