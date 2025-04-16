<?php
session_start();

$erro_login = '';
if (isset($_SESSION['erro_login'])) {
  $erro_login = $_SESSION['erro_login'];
  unset($_SESSION['erro_login']);
}

include('config.php');

if (isset($_POST['submit'])) {
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $senha = $_POST['senha'];
  $confirmarSenha = $_POST['Confirmpassword']; // Pegando campo de confirmação
  $genero = $_POST['genero'];

  // Verificar se as senhas coincidem
  if ($senha !== $confirmarSenha) {
    $_SESSION['register_error'] = 'As senhas não coincidem.';
    header("Location: login.php");
    exit;
  }

  // Só gera o hash se a senha for válida
  $senha = password_hash($senha, PASSWORD_DEFAULT);


  // Verificar se o e-mail já está cadastrado
  $stmtEmail = $conexao->prepare("SELECT id FROM usuarios WHERE email = ?");
  $stmtEmail->bind_param("s", $email);
  $stmtEmail->execute();
  $stmtEmail->store_result();

  if ($stmtEmail->num_rows > 0) {
    $_SESSION['register_error'] = 'Este e-mail já está cadastrado! Tente recuperar a senha ou usar outro e-mail.';
    header("Location: login.php");
    exit;
  }
  $stmtEmail->close();

  // Verificar se nome + sobrenome já existem
  $stmtName = $conexao->prepare("SELECT id FROM usuarios WHERE nome = ? AND sobrenome = ?");
  $stmtName->bind_param("ss", $nome, $sobrenome);
  $stmtName->execute();
  $stmtName->store_result();

  if ($stmtName->num_rows > 0) {
    $_SESSION['register_error'] = 'Esse nome de usuário já existe! Tente outro.';
    header("Location: login.php");
    exit;
  }
  $stmtName->close();

  // Inserir novo usuário
  $stmtInsert = $conexao->prepare("INSERT INTO usuarios (nome, sobrenome, email, tell, senha, gênero) VALUES (?, ?, ?, ?, ?, ?)");
  $stmtInsert->bind_param("ssssss", $nome, $sobrenome, $email, $telefone, $senha, $genero);

  if ($stmtInsert->execute()) {
    header("Location: login.php");
    exit;
  } else {
    $_SESSION['register_error'] = 'Erro ao cadastrar. Tente novamente.';
    header("Location: login.php");
    exit;
  }

  $stmtInsert->close();
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abel&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&family=Syne+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/registro.css" />

  <title>Formulário de Cadastro</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-image">
      <div class="toggle">
        <img src="./img/undraw_workspace_s6wf.svg" alt="" />
        <div class="toggle-panel toggle-left">
          <h1>Hello, friend!</h1>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <button class="hidden" id="login">Cadastre-se</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Welcome Back!</h1>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <button class="hidden" id="register">Entrar</button>
        </div>
      </div>
    </div>

    <div class="form sing-up form-container">
      <form name="form1" id="form1" method="POST" action="#">
        <div class="form-header">
          <div class="title">
            <h1>Register</h1>
          </div>

        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="firstname">Primeiro Nome</label>
            <input
              type="text"
              name="nome"
              id="nome"
              placeholder="Digite seu primeiro nome"
              required />
          </div>

          <div class="input-box sobrenome">
            <label for="lastname">Sobrenome</label>
            <input
              type="text"
              name="sobrenome"
              id="sobrenome"
              placeholder="Digite seu sobrenome"
              required />


          </div>
          <small id="verificacao-usuario" class="text-danger"></small>

          <div class="input-box">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Digite seu email"
              required />
          </div>

          <div class="input-box">
            <label for="number">Celular</label>
            <input
              type="tel"
              name="telefone"
              id="number"
              placeholder="(xx) xxxx-xxxx"
              required />
          </div>

          <div class="input-box">
            <label for="password">Senha</label>
            <input
              type="password"
              name="senha"
              id="password"
              placeholder="Digite sua senha"
              required />
          </div>

          <div class="input-box">
            <label for="Confirmpassword">Confirme sua senha</label>
            <input
              type="password"
              name="Confirmpassword"
              id="Confirmpassword"
              placeholder="Confirme sua senha"
              required />
          </div>
        </div>

        <div class="gender-inputs">
          <div class="gender-title">
            <h6>Gênero</h6>
          </div>
          <div class="gender-group">
            <div class="gender-input">
              <input type="radio" id="female" name="genero" value="Feminino" required />
              <label for="female">Feminino</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="male" name="genero" value="Masculino" />
              <label for="male">Masculino</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="none" name="genero" value="Prefiro não dizer" />
              <label for="none">Prefiro não dizer</label>
            </div>
          </div>

        </div>

        <div class="continue-button">
          <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </div>
        <?php if (!empty($_SESSION['register_error'])): ?>
  <div class="alert alert-danger text-center mt-3" role="alert">
    <?php
      echo $_SESSION['register_error'];
      unset($_SESSION['register_error']);
    ?>
  </div>
<?php endif; ?>

      </form>
    </div>


    <div class="form sing-in form-container">

      <form action="testLogin.php" method="POST" name="form1" id="form1">
        <div class="form-header-sing-in" id="login">
          <div class="title">
            <h1>Sing in</h1>
          </div>

        </div>
        <div class="input-box">
          <label for="email">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Digite seu email"
            required />
        </div>
        <div class="input-box">
          <label for="password">Senha</label>
          <input
            type="password"
            name="senha"
            id="password"
            placeholder="Digite sua senha"
            required />
        </div>
        <div class="link-recup-senha">
        <a href="solicitar_recuperacao.php">Esqueceu sua senha?</a>
        </div>
        <div class="continue-button">
          <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </div>
        <?php if (!empty($erro_login)): ?>
          <div class="alert alert-danger text-center mt-3" role="alert">
            <?php echo $erro_login; ?>
          </div>
        <?php endif; ?>
      </form>
    </div>

  </div>

  <script src="./js/login.js"></script>
  



</body>

</html>