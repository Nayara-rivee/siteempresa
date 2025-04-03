
<!DOCTYPE html>

<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">


    <title> Jogostech :: Instruções Enviadas</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/perfil.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/c2.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </head>
   <style>
    /* resolver trampo do css por não funcionar corretamente em forma de link */
    body{

  min-height: 100vh;
  align-items: center;
  justify-content: center;
  background: #4f4d61;
  position: relative;
}

.nav_cursos{
            border-radius: 30px;
            list-style: none;
            justify-content: space-between;
            align-items: center;
            display: flex;
            background: #ff4b2b;
            height: 80px;
        }
 .voltar{
            margin: 20px 15px ;
            color: #fff;
            background: #1fb840;
            border-radius: 10%;
            width: 80px;
            height: 30px;
            cursor: pointer;
        }
      
   </style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div>
  <a href="index.php"><button class="voltar" type="submit" >home</button></a>
</div>
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><b>Jogostech</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav flex-grow-1">
        <li class="nav-item">
          <a class="nav-link active text-black" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <div class="align-self-end">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a href="cadastro.php" class="nav-link text-black">Quero me cadastrar</a>
        </li>
        <li class="nav-item">
          <a href="login.php" class="nav-link text-black">Entrar</a>
        </li>
        <li class="nav-item">
          <span class="badge rounded-pill bg-black text-white position-absolute ms-4 mt-0" title="5 produto(s) no carrinho"><small>5</small></span>
          <a href="carrinho.php" class="nav-link">
        <i  class='bx bx-cart-alt' style="font-size:24px"></i>
          </a>
        </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<main class="flex-fill">
            <div class="container">
                <h1>Instruções Enviadas!</h1>
                <hr>
                <p>
                    Caro cliente,
                </p>
                <p>
                    As instruções para a realização de cadastro de uma nova senha foram enviadas para o e-mail <b>email@dominio.com.br</b>. Abra a mensagem que lhe enviamos e siga as instruções corretamente para cadastrar uma nova senha.
                </p>
                <p>
                    Agradecemos pela confiança em nossos serviços.
                </p>
                <p>
                    Cordialmente,<br>
                    Central de Relacionamento Quitanda Online
                </p>
                <p>
                    <a href="index.php" class="btn btn-lg btn-danger">Voltar à Página Principal</a>
                </p>
            </div>
        </main>

<!-- pergar texto -->

        <!-- <main class="flex-fill">
          <div class="container">
            <h1 class="text-white">Antes de tudo, verefique seu email!</h1>
            <hr>
            <p class="text-white">
              Caro cliente,
            </p>
            <p class="text-white">
              iremos te mandar uma mensagem de confirmação para seu email, para que esteja tudo certinho!
      
              <a href="login.php" style="text-decoration: none;"><b style="color: #fff;">clique aqui</b></a> para voltar a área de login.
            </p>
            <p class="text-white">
              Agradecemos pela confiança em nossos serviços.
            </p>
            <p class="text-white">
              Cordialmente,<br>
              AuroraIT
            </p>
          </div>
        </main> -->
      
</body>
</html>
