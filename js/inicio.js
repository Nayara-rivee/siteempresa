// Seleciona todos os botões e modais
const botao = document.querySelectorAll('.botao');
const modals = document.querySelectorAll('.modal');
const closeButtons = document.querySelectorAll('.close');

// Adiciona evento de clique para cada botão
botao.forEach((botao, index) => {
    botao.addEventListener('click', () => {
        const videoId = `video${index + 1}`; // modal1, modal2, etc.
        const modal = document.getElementById(videoId);
        modal.classList.add('show'); // Abre o modal correspondente
    });
});

// Adiciona evento de clique para cada botão de fechar
closeButtons.forEach(closeButton => {
    closeButton.addEventListener('click', () => {
        const videoId = closeButton.getAttribute('data-modal'); // Pega o modal associado
        const modal = document.getElementById(videoId);
        modal.classList.remove('show'); // Fecha o modal
        const iframe = modal.querySelector('iframe');
        iframe.src = iframe.src; // Reinicia o vídeo
    });
});


// participantes
const section = document.querySelector("main"),
      hireBtn = section.querySelector("#hireBtn"),
      closeBtn = section.querySelectorAll("#close");

      hireBtn.addEventListener("click" , () =>{
        section.classList.add("show");
      });

      closeBtn.forEach(cBtn => {
        cBtn.addEventListener("click" , () =>{
            section.classList.remove("show");
        })
      })

    // planos


  document.addEventListener("DOMContentLoaded", function () {
    const botoes = document.querySelectorAll(".selecionar-plano");
    const planos = document.querySelectorAll(".plano");

    botoes.forEach((botao, index) => {
      botao.addEventListener("click", function (e) {
        e.preventDefault();

        // Remove destaque anterior
        planos.forEach(plano => plano.classList.remove("selecionado"));
        botoes.forEach(btn => btn.textContent = "Escolher");

        // Adiciona destaque ao plano clicado
        planos[index].classList.add("selecionado");
        botao.textContent = "Selecionado";
      });
    });
  });

// login
 // Se o usuário estiver logado, mostra "Minha conta"
 if (localStorage.getItem("usuarioLogado") === "true") {
    const minhaConta = document.getElementById("minhaConta");
    if (minhaConta) {
      minhaConta.style.display = "block";
    }
  }


