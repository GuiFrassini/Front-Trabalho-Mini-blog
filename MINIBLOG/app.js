function validaUsuarioLogado() {
    let estaLogado = document.getElementById('logado').value;
    if (sessionStorage.getItem('estaLogado') === null && estaLogado !== '{LOGADO}') {
        sessionStorage.setItem('estaLogado', estaLogado);
    }
    if (sessionStorage.getItem('estaLogado') === 'true') {
        sessionStorage.setItem('estaLogado', estaLogado);
    } else {
        alert('Ops... Parece que você não esta logado...')
        window.location.href = '/pagina-nao-logada.html';
    }
}

validaUsuarioLogado();