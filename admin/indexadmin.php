<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/cursos.css">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/cards.css">
  <link rel="stylesheet" href="./css/sobremim.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/c2.css">
  <link rel="stylesheet" href="./css/inicio.css">
  <link rel="stylesheet" href="./css/slide.css">
  <link rel="stylesheet" href="./css/cardsinfo.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/navbar.css">

  <title>Bootstrap Example</title>

  <script src="mobile-navbar.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      background: rgb(21, 21, 65);
      background-image: url(fundo2.jpeg);
      background-repeat: no-repeat;
      background-position: center center;
      background-size: cover;
      width: 100%;
      min-height: 100vh;
      overflow-x: hidden;
    }



    .card img {
      width: 90px;
      height: 90px;
      align-items: center;
      justify-content: center;
    }



    .card-front,
    .card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      background: linear-gradient(to bottom right, #ff4b2b, #ff416c);
    }

    .card-back {
      background: linear-gradient(to bottom right, #502820, #ff416c);
      color: #fff;
      transform: rotateY(100deg);
    }

    /* irá ficar aqui mesmo */
    /* ajeitar botão */
    .login {
      margin: 20px 15px;
      color: #fff;
      background: #1fb840;
      position: relative;
      top: -20px;
      max-width: 50px;
      height: 35px;
      cursor: pointer;
    }


    .nav_cursos {
      border-radius: 30px;
      list-style: none;
      justify-content: space-between;
      align-items: center;
      display: flex;
      background: #ff4b2b;
      height: 80px;
    }

    .navbar {
      background: none;

    }

    .voltar {
      margin: 20px 15px;
      color: #fff;
      background: #1fb840;
      border-radius: 10%;
      width: 80px;
      height: 30px;
      cursor: pointer;
    }

    .container {
      max-width: 950px;
      width: 100%;
      overflow: hidden;
      padding: 80px 0;
    }

    .meu-card .card-sobre-mim .img {

      height: 411px;
      width: 411px;
      border-radius: 50%;
      padding: 3px;
      background: #1a31c5;
      margin-bottom: 114px;
    }

    .card-sobre-mim .img img {
      height: 100%;
      width: 100%;
      border: 3px solid #ffff;
      border-radius: 50%;
      object-fit: cover;

    }

    .meu-card .icons {
      margin-top: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .content2 {
      width: 100px;
      height: 100px;
    }

    .sobre-mim {
      background: rgb(42, 224, 51);
      height: 2000px;
      display: flex;
    }

    .meu-card {
      border-radius: 20%;
      background: #ff416c;
      height: 800px;
      padding: 100px;
      margin: 0 100px;
      margin-top: 300px;
      right: 500px;
      position: absolute;
      border: 6px solid #000000;
    }

    .card-sobre-mim .img img {
      height: 700px;
      width: 700px;
      top: 400px;
      position: relative;
      right: -1000px;
    }

    .sobre-mim h1 {
      font-size: 8pc;
      position: absolute;
      right: 590px;
      top: 3200px;
    }

    .card-sobre-mim .nome {
      font-size: 20px;
      font-weight: 700;
      color: #fff;
      position: absolute;
      right: 240px;
      top: 540px;
    }

    .card-sobre-mim .trab {
      font-size: 2pc;
      align-items: center;
      justify-content: center;
      color: #353d75;
      position: relative;
      margin: 100px;
      color: #fff;
      top: -200px;
    }

    /* parte do rodapé */
    .rodape-direitos {
      width: calc(100% - 0px);
      background-color: black;
      padding: 10px;
      margin: 0px;
      text-align: center;

    }

    .rodape-div {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      margin: auto;
      align-items: stretch;
      padding: 60px 110px 40px 110px;
    }

    .icons a {
      text-align: center;
      line-height: 33px;
      height: 70px;
      width: 70px;
      margin: 40px 12px;
      font-size: 14px;
      color: #FFF;
      border-radius: 50%;
      border: 2px solid transparent;
      background: #000000;
      transition: all 0.3s ease;
    }


    .icons a:hover {
      color: #000000;
      background-color: #fff;
      border-color: #000000;
    }

    .sessoes {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      margin: auto;
    }

    .card {
      display: flex;
      justify-content: center;
      width: 350px;
      height: 300px;
      position: relative;
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0px 35px 80px rgba(0, 0, 0, 0.15);
      transition: 0.5s;

    }


    .card .img-box {
      position: absolute;
      width: 250px;
      height: auto;
      top: 10px;
      transition: 0.5s;
      justify-content: center;
      display: flex;
      right: 50px;
    }

    .card:hover .img-box {
      top: -100px;
      scale: 0.75;
    }

    .card .img-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: flex;
      justify-content: center;
    }

    /* slide */

    .slider {
      display: flex;
      aspect-ratio: 16/9;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      scroll-behavior: smooth;
      box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
      border-radius: 0.5rem;
      overflow: hidden;
      right: -400px;
      position: relative;
      top: -700px;
    }

    .slider-nav {
      display: flex;
      column-gap: 1rem;
      position: absolute;
      bottom: 1.25rem;
      left: 73%;
      transform: translateX(-50%);
      z-index: 1;
      top: 640px;

    }

    .slider-nav a {
      width: 0.80rem;
      height: 0.80rem;
      border-radius: 50%;
      background-color: #b81c1c;
      opacity: 0, 75;
      transition: opacity ease 250ms;
    }

    .slider-nav a:hover {
      opacity: 1;
    }

    /* parte dos planos */
    .planos {
      color: #fff;
      display: flex;

      justify-content: center;
      align-items: center;
    }

    .planos-div {
      position: relative;
      justify-content: center;
      align-items: center;
      width: 300px;
      background: #1a31c5;
      border-radius: 50px;
      display: flex;
      right: -800px;
    }

    /* animação fundo início */
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap');


    .container2 {
      position: relative;
      width: 100px;
      height: 100px;
      overflow: hidden;


    }

    .bolhas {
      position: absolute;
      display: flex;
    }

    .bolhas span {
      display: block;
      width: 30px;
      height: 30px;
      background: #e5ff00;
      margin: 0 4px;
      border-radius: 50%;
      box-shadow: 0 0 0 10px #e5ff0044,
        0 0 50px #e5ff00,
        0 0 100px #e5ff00;
      animation: animar calc(150s / var(--i)) 5s linear infinite;
    }

    @keyframes animar {
      0% {
        transform: translateY(100vh) scale(0);
      }

      100% {
        transform: translateY(-10vh) scale(1);
      }
    }

    .bolhas span:nth-of-type(even) {
      background: #2dc3ff;
      box-shadow: 0 0 0 10px #0c192c,
        0 0 50px #2dc3ff,
        0 0 100px #2dc3ff;
    }






    .hero-section {
      height: 1px;
      display: flex;
      align-items: center;
      padding: 0 20px;

    }

    .hero-section .content2 {
      color: #fff;
      max-width: 1000px;
      width: 100%;
      margin: 0 auto;
      top: 400px;
      position: absolute;
      right: 500px;
    }

    .hero-section .content2 h1 {
      font-size: 3rem;
      max-width: 600px;
    }

    .hero-section .content2 p {
      font-weight: 300;
      margin-top: 15px;
      max-width: 600px;
    }

    .hero-section .content2 button {
      background: #fff;
      outline: none;
      border: none;
      font-size: 1rem;
      font-weight: 500;
      margin-top: 38px;
      padding: 12px 30px;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.2s ease;
    }

    .hero-section .content2 button:hover {
      color: #fff;
      background: #c06b3e;
    }

    /* icones */

    .card-sobre-mim .icons {
      margin-top: 30px;
      display: flex;
      top: 190px;
      right: -1230px;
      position: relative;

    }

    .icons a {
      text-align: center;
      line-height: 33px;
      height: 55px;
      width: 55px;
      margin: 0 4px;
      font-size: 14px;
      color: #FFF;
      border-radius: 50%;
      border: 2px solid transparent;
      background: #000000;
      transition: all 0.3s ease;
    }

    .icons i {
      text-align: center;
      line-height: 50px;
      height: 35px;
      width: 35px;
      font-size: 34px;
    }

    .icons a:hover {
      color: #000000;
      background-color: #fff;
      border-color: #000000;
    }

    .integrantes {
      background: #fff;
      height: 150vh;
    }

    .integrantes h1 {
      color: #fff;
    }

    .div-participantes h1 {
      position: relative;
      justify-content: center;
      align-items: center;
      width: 300px;
      background: #1a31c5;
      border-radius: 50px;
      display: flex;
      right: -720px;
      top: 10px;
    }

    .integrantes .participante {
      width: 40px;
      height: 40px;
      background: #0c192c;
      display: flex;

    }

    .container-card2 {
      display: flex;
      justify-content: space-between;
      position: relative;
      width: 100%;
      height: 80%;
      margin: 0 20px;
      align-items: center;


    }

    .wrapper2 {
      display: flex;
      width: 200vh;
      top: -450px;
      justify-content: space-between;
      position: relative;
      flex-direction: row;
    }

    .wrapper {
      display: flex;
      width: 70%;
      justify-content: space-between;
      position: relative;
      right: 900px;
      top: -600px;

    }

    /* icons participantes */
    .cards-sobre-mim .info .media-icons {
      margin-top: 10px;
      display: flex;

    }

    .media-icons {
      top: -12px;
      display: flex;
      position: relative;
    }

    .media-icons a {
      text-align: center;
      line-height: 33px;
      height: 35px;
      width: 35px;
      margin: 0 4px;
      font-size: 14px;
      color: #FFF;
      border-radius: 40%;
      border: 2px solid transparent;
      background: #000000;
      transition: all 0.3s ease;

    }

    .media-icons a:hover {
      color: #000000;
      background-color: #fff;
      border-color: #000000;
    }

    /* tamanho do inicio com as bolhas ajeitado */
    .container2 {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
      right: 10px;
    }


    .bolhas span {
      display: block;
      width: 30px;
      height: 30px;
      background: #e5ff00;
      margin: 0 4px;
      border-radius: 50%;
      box-shadow: 0 0 0 10px #e5ff0044,
        0 0 50px #e5ff00,
        0 0 100px #e5ff00;
      animation: animar calc(150s / var(--i)) linear infinite;
    }

    .container2 img {
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      position: relative;
      display: flex;

      top: 100px;


    }

    /* o que oferecemos */

    .card-front,
    .card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;

      background-repeat: no-repeat;
    }

    .card-front img {
      position: relative;
      top: -150px;
      width: 100%;
      height: 350px;
      z-index: 0;
    }

    .card-back {

      background-repeat: no-repeat;
      color: #fff;
      transform: rotateY(100deg);
      opacity: 0.75;
    }

    .card-back img {
      width: 100%;
      height: 350px;
    }

    .card1 {
      position: relative;
      max-width: 950px;
      justify-content: space-evenly;
      width: 200%;
      height: 350px;
      perspective: 1000px;
      display: flex;
      padding: 20px 0;
    }

    .card-text {
      text-align: justify;
      position: relative;
      top: -270px;
      display: flex;
    }

    .card1 h2 {
      font-size: 70px;
      margin: 0;
      padding: 20px;
      text-align: center;
      z-index: 1;
      position: relative;
      color: #fff;
    }

    .card1 .back {
      font-size: 70px;
      margin: 0;
      padding: 20px;
      text-align: center;
      top: -350px;
      position: relative;
    }

    .cursos .saiba-mais {
      position: relative;
      margin: 0;
      top: -155px;
      color: #fff;
      border-radius: 10px;
      right: -90px;
    }

    .card-back button {
      color: #ff416c;
      background: #1fb840;
      align-items: center;
    }

    .card1 h5 {
      position: relative;
      top: -350px;
      font-size: 30px;
      margin: 0;
      padding: 90px;
      text-align: center;
      color: #fff;
    }

    .card-header {
      color: #fff;
      background: #222;
      z-index: 2;
      position: relative;

    }

    /* menu para telas menores */
    .menu {
      display: flex;
      color: #fff;
      margin: 8px;
      cursor: pointer;
    }

    @media (max-width: 999px) {
      .nav-list {
        position: relative;


        width: 50vh;
        height: 92vh;
        background: #0c192c;
        flex-direction: column;
        z-index: 4;
      }
    }

    /* novo navbar */
    .logo {
      width: 500px;
      display: flex;
    }

    .logo img {
      position: relative;
      top: -20px;
    }

    .navbar {
      height: 80px;
    }

    .nomesite {
      color: #fff;
      text-decoration: none;
      position: relative;
      top: 10px;
    }

    .acesso {
      position: relative;
      right: -900px;
    }

    .container-card .cards-sobre-mim {
      position: relative;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 0 30px;

    }

    .cards-sobre-mim {
      width: 400px;
      position: relative;
      height: 400px;
      top: 200px;
    }

    .wrapper3{
      display: flex;
      width: 200vh;
      top: -700px;
      justify-content: space-between;
      position: relative;
      flex-direction: row;
      right: -20px;
    }
  </style>
</head>

<body>

  <nav class="navbar">

    <div class="logo">
      <a class="navbar-brand" href="#">
        <img src="logo.gif" alt="Bootstrap" width="90" height="90">
      </a>
      <a class="nomesite" href="#">AuroraIT</a>
    </div>
    <ul class="nav-links-desktop">
      <li><a href="produtos.php">Produtos</a></li>
      <li><a href="faleconosco.php">Fale Conosco</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          opções
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item text-black" href="#">Códigos</a></li>
          <li><a class="dropdown-item text-black" href="#">Tutorial jogos</a></li>
          <li><a class="dropdown-item text-black" href="#">Produtos</a></li>
        </ul>
      </li>

      <li class="nav-item acesso">
        <a href="cliente.php" class="nav-link text-white">Acesso à minha conta</a>
      </li>

    </ul>



    <div class="mobile-menu" id="mobileMenu">
      <button class="close" id="closeButton">
        <i class='bx bx-x'></i>
      </button>
      <ul class="nav-links-mobile">
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="faleconosco.php">Fale Conosco</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            opções
          </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-black" href="#">Códigos</a></li>
            <li><a class="dropdown-item text-black" href="#">Tutorial jogos</a></li>
            <li><a class="dropdown-item text-black" href="#">Produtos</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <button class="hamburger" id="hamburgerButton">
      <i class='bx bx-menu'></i>
    </button>

    <div>
      <a href="login.php"><button class="login" type="submit">login</button></a>
    </div>
  </nav>

  <div class="container2">

    <div class="bolhas">

      <span style="--i:11"></span>
      <span style="--i:17"></span>
      <span style="--i:25"></span>
      <span style="--i:14"></span>
      <span style="--i:9"></span>
      <span style="--i:2"></span>
      <span style="--i:28"></span>
      <span style="--i:16"></span>
      <span style="--i:22"></span>
      <span style="--i:4"></span>
      <span style="--i:27"></span>
      <span style="--i:17"></span>
      <span style="--i:9"></span>
      <span style="--i:15"></span>
      <span style="--i:24"></span>
      <span style="--i:12"></span>
      <span style="--i:26"></span>
      <span style="--i:13"></span>
      <span style="--i:11"></span>
      <span style="--i:17"></span>
      <span style="--i:25"></span>
      <span style="--i:14"></span>
      <span style="--i:9"></span>
      <span style="--i:2"></span>
      <span style="--i:28"></span>
      <span style="--i:16"></span>
      <span style="--i:22"></span>
      <span style="--i:4"></span>
      <span style="--i:27"></span>
      <span style="--i:17"></span>
      <span style="--i:9"></span>
      <span style="--i:15"></span>
      <span style="--i:24"></span>
      <span style="--i:12"></span>
      <span style="--i:26"></span>
      <span style="--i:13"></span>
      <span style="--i:2"></span>
      <span style="--i:28"></span>
      <span style="--i:16"></span>
      <span style="--i:22"></span>
      <span style="--i:4"></span>
      <span style="--i:27"></span>
      <span style="--i:17"></span>
      <span style="--i:9"></span>
      <span style="--i:15"></span>
      <span style="--i:24"></span>
      <span style="--i:12"></span>
      <span style="--i:26"></span>
      <span style="--i:13"></span>
      <span style="--i:17"></span>
      <span style="--i:9"></span>
      <span style="--i:15"></span>
      <span style="--i:24"></span>
      <span style="--i:12"></span>
      <span style="--i:26"></span>
      <span style="--i:13"></span>
      <span style="--i:24"></span>
      <span style="--i:12"></span>
      <span style="--i:26"></span>
      <span style="--i:13"></span>
      <span style="--i:17"></span>
      <span style="--i:9"></span>
      <span style="--i:15"></span>
      <span style="--i:24"></span>
      <span style="--i:12"></span>
      <span style="--i:26"></span>
      <span style="--i:13"></span>
    </div>
  </div>


  <!-- melhorar esse inicio -->
  <section class="hero-section">

    <div class="content2">
      <h1>sla</h1>
      <p>
        sla2
      </p>
      <button>view more</button>
    </div>
  </section>



  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text>
        </svg>
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text>
        </svg>
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text>
        </svg>
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <br><br>

  <!-- AJEITAR POR CONTA DO HEIGHT(PRODUZIR POR SI SÓ INSPIRADO NESSES CARDS) -->
  <!-- <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="curso.png" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="cursos.php"><button>
              <h5 class="card-title">cursos</h5>
            </button></a>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body"> -->
  <!-- levar para área da comunidade na pagina do index -->
  <!-- <a href="#"><button>
              <h5 class="card-title">Comunidade</h5>
            </button></a>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <a href="cursos.php"><button>
              <h5 class="card-title">E-books</h5>
            </button></a>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <a href="cursos.php"><button>
              <h5 class="card-title">Professores</h5>
            </button></a>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div> -->
  <div class="planos-div">
    <h1 class="planos">Planos</h1>
  </div>
  <br><br><br>
  <div class="sessoes">
    <div class="card">
      <div class="img-box">
        <img src="agenda.png">
      </div>
      <div class="content">
        <h2>Agenda</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Temporibus molestias minus porro. Deserunt dolore eligendi sapiente hic totam.
        </p>
        <a href="planos.php" class="read-more">
          Read more
        </a>
      </div>
    </div>


    <div class="card">
      <div class="img-box">
        <img src="agenda.png">
      </div>
      <div class="content">
        <h2>Lorem ipsum</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Temporibus molestias minus porro. Deserunt dolore eligendi sapiente hic totam.
        </p>
        <a href="planos.php" class="read-more">
          Read more
        </a>
      </div>
    </div>

    <div class="card">
      <div class="img-box">
        <img src="agenda.png">
      </div>
      <div class="content">
        <h2>Lorem ipsum</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Temporibus molestias minus porro. Deserunt dolore eligendi sapiente hic totam.
        </p>
        <a href="planos.php" class="read-more">
          Read more
        </a>
      </div>
    </div>


  </div>


  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <div class="cursos">
    <h1>O que oferecemos?</h1>
    <div class="card1" style="max-width: 18rem;">
      <div class="card-inner">
        <div class="card-front">
          <div class="card-header">Header</div>
          <h2>Front</h2>
          <img src="imagem2.jpeg" alt="">
          <h5>Curso 1</h5>
        </div>
        <div class="card-back">
          <img src="imagem1.jpeg" alt="">
          <h2 class="back">Back</h2>
          <a href="cursos.php"><button class="saiba-mais">saiba mais</button></a>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <div class="card1" style="max-width: 18rem;">
      <div class="card-inner">
        <div class="card-front">
          <div class="card-header">Header</div>
          <h2>Front</h2>
          <img src="imagem2.jpeg" alt="">
          <h5>Curso 1</h5>
        </div>
        <div class="card-back">
          <img src="imagem1.jpeg" alt="">
          <h2 class="back">Back</h2>
          <a href="cursos.php"><button class="saiba-mais">saiba mais</button></a>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <div class="card1" style="max-width: 18rem;">
      <div class="card-inner">
        <div class="card-front">
          <div class="card-header">Header</div>
          <h2>Front</h2>
          <img src="imagem2.jpeg" alt="">
          <h5>Curso 1</h5>
        </div>
        <div class="card-back">
          <img src="imagem1.jpeg" alt="">
          <h2 class="back">Back</h2>
          <a href="cursos.php"><button class="saiba-mais">saiba mais</button></a>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <div class="card1" style="max-width: 18rem;">
      <div class="card-inner">
        <div class="card-front">
          <div class="card-header">Header</div>
          <h2>Front</h2>
          <img src="imagem2.jpeg" alt="">
          <h5>Curso 1</h5>
        </div>
        <div class="card-back">
          <img src="imagem1.jpeg" alt="">
          <h2 class="back">Back</h2>
          <a href="cursos.php"><button class="saiba-mais">saiba mais</button></a>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>

  <br><br><br><br><br><br><br>

  <div class="sobre-mim">

    <h1 class="text-white">Sobre nós</h1>

    <div class="card-sobre-mim">

      <div class="img">
        <img src="perfil2-removebg-preview.png" alt="">
      </div>
      <div class="details">

        <div class="trab">Olá, somos a empresa [nome da empresa] e trabalhamos com [com oq trabalhamos] e nosso objetivo é [objetivo]</div>
      </div>
      <div class="icons">
        <a href="#"><i class='bx bxl-facebook-circle'></i></a>
        <a href="#"><i class='bx bxl-github'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
      </div>

    </div>


    <!-- informações -->

    <div class="container-card">
      <div class="wrapper">
        <div class="cards-sobre-mim">
          <img src="imagem1.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>

          </div>
        </div>

        <div class="cards-sobre-mim">
          <img src="imagem2.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>

          </div>
        </div>

        <div class="cards-sobre-mim">
          <img src="imagem3.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>
            <a href="#" class="btn2">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br>
  <!-- integrantes empresa -->
  <div class="integrantes">
    <div class="div-participantes">
      <h1>Participantes</h1>
    </div>
    <div class="container-card2">
      <div class="wrapper2">

        <div class="cards-sobre-mim">
          <img src="imagem1.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>
            <div class="media-icons">
              <a href="#"><i class='bx bxl-facebook-circle'></i></a>
              <a href="#"><i class='bx bxl-github'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            
          </div>
        </div>

        <div class="cards-sobre-mim">
          <img src="imagem3.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>
            <div class="media-icons">
              <a href="#"><i class='bx bxl-facebook-circle'></i></a>
              <a href="#"><i class='bx bxl-github'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            
          </div>
        </div>

        <div class="cards-sobre-mim">
          <img src="imagem3.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>
            <div class="media-icons">
              <a href="#"><i class='bx bxl-facebook-circle'></i></a>
              <a href="#"><i class='bx bxl-github'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            
          </div>
        </div>

        <div class="cards-sobre-mim">
          <img src="imagem1.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>
            <div class="media-icons">
              <a href="#"><i class='bx bxl-facebook-circle'></i></a>
              <a href="#"><i class='bx bxl-github'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            
          </div>
        </div>
      </div>

      

    </div>

    <div class="wrapper3">

      <div class="cards-sobre-mim">
          <img src="imagem3.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>
            <div class="media-icons">
              <a href="#"><i class='bx bxl-facebook-circle'></i></a>
              <a href="#"><i class='bx bxl-github'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            
          </div>
        </div>

        <div class="cards-sobre-mim">
          <img src="imagem3.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>
            <div class="media-icons">
              <a href="#"><i class='bx bxl-facebook-circle'></i></a>
              <a href="#"><i class='bx bxl-github'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            
          </div>
        </div>

        <div class="cards-sobre-mim">
          <img src="imagem3.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>
            <div class="media-icons">
              <a href="#"><i class='bx bxl-facebook-circle'></i></a>
              <a href="#"><i class='bx bxl-github'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            
          </div>
        </div>

        <div class="cards-sobre-mim">
          <img src="imagem3.jpeg" alt="">
          <div class="info">
            <h2>Conteúdo</h2>
            <p>descrição do conteúdo do card</p>
            <div class="media-icons">
              <a href="#"><i class='bx bxl-facebook-circle'></i></a>
              <a href="#"><i class='bx bxl-github'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            
          </div>
        </div>

      </div>

  </div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <footer class="rodape" id="contato">
    <div class="rodape-div">

      <div class="rodape-div-1">
        <div class="rodape-div-1-coluna">
          <!-- elemento -->
          <span><b>LOGO</b></span>
          <p>SIA Trecho 5 lote 000 bloco z sala 900 - Guará, Brasília - DF, 70000-010</p>
        </div>
      </div>

      <div class="rodape-div-2">
        <div class="rodape-div-2-coluna">
          <!-- elemento -->
          <span><b>Contatos</b></span>
          <p>contato@na.na</p>
          <p>+55 63 99200-0000</p>
        </div>
      </div>

      <div class="rodape-div-3">
        <div class="rodape-div-3-coluna">
          <!-- elemento -->
          <span><b>Links</b></span>
          <p><a href="#servicos">Serviços</a></p>
          <p><a href="#empresa">Empresa</a></p>
          <p><a href="#sobre">Sobre</a></p>
        </div>
      </div>

      <div class="rodape-div-4">
        <div class="rodape-div-4-coluna">
          <!-- elemento -->
          <span><b>Outros</b></span>
          <p>Políticas de Privacidade</p>
        </div>
      </div>

    </div>
    <p class="rodape-direitos">Informações sobre o site</p>
  </footer>

  <script src="scripts.js"></script>
</body>

</html>