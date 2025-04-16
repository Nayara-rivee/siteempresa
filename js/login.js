
const container = document.getElementById('container');
const loginButton = document.getElementById('login');
const registerButton = document.getElementById('register');

// Função para alternar a visibilidade dos botões
function toggleButtons() {
  if (container.classList.contains('active')) {
    // Se a classe "active" estiver presente, esconde o botão "Sign up"
    registerButton.style.display = 'none';
    loginButton.style.display = 'block';
  } else {
    // Se a classe "active" não estiver presente, esconde o botão "Sign in"
    loginButton.style.display = 'none';
    registerButton.style.display = 'block';
  }
}

// Adiciona eventos aos botões
loginButton.addEventListener('click', () => {
  container.classList.remove('active');
  toggleButtons(); // Atualiza a visibilidade dos botões
});

registerButton.addEventListener('click', () => {
  container.classList.add('active');
  toggleButtons(); // Atualiza a visibilidade dos botões
});

// Inicializa a visibilidade dos botões ao carregar a página
toggleButtons();


