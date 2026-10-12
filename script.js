function mudarSala(evt, idSala) {
    const conteudos = document.querySelectorAll('.conteudo-sala');
    conteudos.forEach(conteudo => {
        conteudo.style.display = 'none';
        
    });
    const botoes = document.querySelectorAll('.tab-btn');
    botoes.forEach(botao => {
        botao.classList.remove('active');
    })
    const salaSelecionada = document.getElementById(idSala);
    if (salaSelecionada) {
        salaSelecionada.style.display = 'block';
    }
    evt.currentTarget.classList.add('active');

    
}