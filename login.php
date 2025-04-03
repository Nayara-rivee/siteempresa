
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/login.css" />
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
          <button class="hidden" id="login">Register</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Welcome Back!</h1>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <button class="hidden" id="register">Sign in</button>
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
              name="firstname"
              id="firstname"
              placeholder="Digite seu primeiro nome"
              required />
          </div>

          <div class="input-box">
            <label for="lastname">Sobrenome</label>
            <input
              type="text"
              name="lastname"
              id="lastname"
              placeholder="Digite seu sobrenome"
              required />
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
            <label for="number">Celular</label>
            <input
              type="tel"
              name="number"
              id="number"
              placeholder="(xx) xxxx-xxxx"
              required />
          </div>

          <div class="input-box">
            <label for="password">Senha</label>
            <input
              type="password"
              name="password"
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
              <input type="radio" id="female" name="gender" />
              <label for="female">Feminino</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="male" name="gender" />
              <label for="male">Masculino</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="others" name="gender" />
              <label for="others">Outros</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="none" name="gender" />
              <label for="none">Prefiro não dizer</label>
            </div>
          </div>
        </div>

        <div class="continue-button">
          <button><a href="index.php">Continuar</a></button>
        </div>
      </form>
    </div>


    <div class="form sing-in form-container">
      <form name="form1" id="form1" method="POST" action="#">
        <div class="form-header">
          <div class="title">
            <h1>Sing in</h1>
          </div>
          <!-- <div class="login-button">
                  <button><a href="#">Entrar</a></button>
                </div> -->
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="firstname">Primeiro Nome</label>
            <input
              type="text"
              name="firstname"
              id="firstname"
              placeholder="Digite seu primeiro nome"
              required />
          </div>

          <div class="input-box">
            <label for="lastname">Sobrenome</label>
            <input
              type="text"
              name="lastname"
              id="lastname"
              placeholder="Digite seu sobrenome"
              required />
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
            <label for="number">Celular</label>
            <input
              type="tel"
              name="number"
              id="number"
              placeholder="(xx) xxxx-xxxx"
              required />
          </div>

          <div class="input-box">
            <label for="password">Senha</label>
            <input
              type="password"
              name="password"
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

        <div class="link-recup-senha">
          <a href="#">Esqueceu sua senha?</a>
        </div>

        <div class="gender-inputs">
          <div class="gender-title">
            <h6>Gênero</h6>
          </div>
          <div class="gender-group">
            <div class="gender-input">
              <input type="radio" id="female" name="gender" />
              <label for="female">Feminino</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="male" name="gender" />
              <label for="male">Masculino</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="others" name="gender" />
              <label for="others">Outros</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="none" name="gender" />
              <label for="none">Prefiro não dizer</label>
            </div>
          </div>
        </div>

        <div class="continue-button">
          <button><a href="index.php">Continuar</a></button>
        </div>
      </form>
    </div>

  </div>

  <script src="./js/login.js"></script>



</body>

</html>