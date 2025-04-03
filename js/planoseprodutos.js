// Seleciona os quadradinhos de cores e o input de cor
const colorOptions = document.querySelectorAll(".color-option");
const colorInput = document.getElementById("colorInput");

// Seleciona o header e o footer
const header = document.querySelector("header");
const footer = document.querySelector("footer");
const divlateral = document.querySelector(".div-lateral");
const divgrande = document.querySelector(".div-grande");

const divs1 = document.querySelector(".divs1");
const divs2 = document.querySelector(".divs2");
const divs3 = document.querySelector(".divs3");

// Função para mudar as cores do header e footer
function changeColors(color) {
  header.style.setProperty("--header-color", color); // Altera a cor do header
  footer.style.setProperty("--footer-color", color); // Altera a cor do footer
  document
    .querySelector(".div-lateral")
    .style.setProperty("--divlateral-color", color);
  document
    .querySelector(".div-grande")
    .style.setProperty("--divgrande-color", color);

  document
    .querySelector(".divs1")
    .style.setProperty("--divs1-color", color);
  document
    .querySelector(".divs2")
    .style.setProperty("--divs2-color", color);
  document
    .querySelector(".divs3")
    .style.setProperty("--divs3-color", color);
}

// Adiciona evento de clique a cada quadradinho de cor
colorOptions.forEach((option) => {
  option.addEventListener("click", () => {
    const selectedColor = option.getAttribute("data-color"); // Pega a cor do quadradinho
    changeColors(selectedColor); // Aplica a cor ao header e footer
    colorInput.value = selectedColor; // Atualiza o input de cor
  });
});

// Adiciona evento de input ao input de cor
colorInput.addEventListener("input", () => {
  const selectedColor = colorInput.value; // Pega a cor escolhida
  changeColors(selectedColor); // Aplica a cor ao header e footer
});

// Seleciona os botões de fundo
const backgroundButtons = document.querySelectorAll(
  ".background-buttons button"
);

// Função para mudar o fundo do card
function changeBackground(color) {
  document.querySelector(".card2").style.setProperty("--card-bg", color); // Altera o fundo do card
  document.querySelector(".body").style.setProperty("--body-bg", color); // Altera o fundo do body
}

// Adiciona evento de clique a cada botão de fundo
backgroundButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const bgColor = button.getAttribute("data-bg"); // Pega a cor do fundo
    switch (bgColor) {
      case "white":
        changeBackground("#fff"); // Fundo branco
        break;
      case "gray":
        changeBackground("#ccc"); // Fundo cinza
        break;
      case "black":
        changeBackground("#333"); // Fundo preto
        break;
    }
  });
});



// carrousel 

 // Seleciona os elementos do carrossel
 const slidesContainer = document.querySelector('.slides');
 const slides = document.querySelectorAll('.slide');
 const prevButton = document.querySelector('.carrossel button.prev');
 const nextButton = document.querySelector('.carrossel button.next');

 let slideIndex = 0; // Índice do slide atual

 // Função para mostrar o slide atual
 function mostrarSlide(index) {
     // Remove a classe "ativo" de todos os slides
     slides.forEach(slide => slide.classList.remove('ativo'));

     // Adiciona a classe "ativo" ao slide atual
     slides[index].classList.add('ativo');

     // Move o container dos slides para a posição correta
     slidesContainer.style.transform = `translateX(-${index * 100}%)`;
 }

 // Evento para o botão "Anterior"
 prevButton.addEventListener('click', () => {
     slideIndex = (slideIndex > 0) ? slideIndex - 1 : slides.length - 1;
     mostrarSlide(slideIndex);
 });

 // Evento para o botão "Próximo"
 nextButton.addEventListener('click', () => {
     slideIndex = (slideIndex < slides.length - 1) ? slideIndex + 1 : 0;
     mostrarSlide(slideIndex);
 });

 // Inicializa o carrossel com o primeiro slide ativo
 mostrarSlide(slideIndex);