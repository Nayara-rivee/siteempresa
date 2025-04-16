<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/planos.css">
  <title>Document</title>

  <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/responsive3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</head>

<body>


  <nav class="navbar navbar-expand-lg bg-body-primary bg-dark">
    <div>
      <a href="index.php"><button class="voltar" type="submit">home</button></a>
    </div>

    <div class="container3 container-fluid">
      <a class="navbar-brand" href="index.php"><b class="text-white">AuroraIT</b></a>
      <ul class="itens">
        <li class="nav_itens">
          <a href="#">cupons</a>
        </li>
        <li class="nav_itens">
          <a href="#">já adquiridos</a>
        </li>
      </ul>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav flex-grow-1">
        </ul>
        <div class="align-self-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="login.php" class="nav-link text-black text-white">
                <p>Entrar</p>
              </a>
            </li>
            <li class="nav-item">
              <span class="badge rounded-pill bg-white text-white position-relative ms-4 mt-0 "
                title="5 produto(s) no carrinho"><small class="text-black">5</small></span>
              <a href="carrinho.php" class="nav-link text-white">
                <i class='bx bxs-cart-alt'></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </nav>

  <div class="nossos-planos">
    <h1> Planos e Produtos</h1>
    <p>Templates e preços</p>
  </div>
  <div class="cursos">
    <div class="carrossel">
      <!-- Slides -->
      <div class="slides">
        <div class="slide ativo">Slide 1</div>
        <div class="slide">Slide 2</div>
        <div class="slide">Slide 3</div>
      </div>

      <!-- Botões de navegação -->
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>


    <!-- Carrossel -->



    <!-- <div id="planos">
      <div id="plano" class="row row-cols-1 row-cols-md-3 g-4">
        <div id="plano1" class=" col">
          <div class="card h-100">
            <img src="./img/imagem-fundo.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class=" rounded-lg p-6 max-w-xs plano">
                <h3 class="text-xl font-semibold">Business plan</h3>
                <p class="text-2xl font-bold mt-2">$29/mo
                  <span class="text-sm font-normal">or $299 yearly</span>
                </p>
                <br>
                <div id="itens-plano" class="mt-4">

                  <div id="beneficios" class="flex items-center">
                    <span class="ml-2"><i class='bx bx-check'></i>Feature text goes here</span>
                  </div>
                  <div id="beneficios" class="flex items-center">
                    <span class="ml-2"><i class='bx bx-check'></i>Feature text goes here</span>
                  </div>
                  <div id="beneficios" class="flex items-center">
                    <span class="ml-2"><i class='bx bx-check'></i>Feature text goes here</span>
                  </div>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary btn-lg"><a href="planos.php">Adquirir plano</a></button>
            </div>
          </div>
        </div>
        <div id="plano2" class="col">
          <div class="card h-100">
            <img src="./img/imagem-fundo.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class=" rounded-lg p-6 max-w-xs plano">
                <h3 class="text-xl font-semibold">Business plan</h3>
                <p class="text-2xl font-bold mt-2">$29/mo
                  <span class="text-sm font-normal">or $299 yearly</span>
                </p>
                <br>
                <div id="itens-plano" class="mt-4">

                  <div id="beneficios" class="flex items-center">
                    <span class="ml-2"><i class='bx bx-check'></i>Feature text goes here</span>
                  </div>
                  <div id="beneficios" class="flex items-center">
                    <span class="ml-2"><i class='bx bx-check'></i>Feature text goes here</span>
                  </div>
                  <div id="beneficios" class="flex items-center">
                    <span class="ml-2"><i class='bx bx-check'></i>Feature text goes here</span>
                  </div>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary btn-lg"><a href="planos.php">Adquirir plano</a></button>
            </div>
          </div>
        </div>
        <div id="plano3" class="col">
          <div class="card h-100">
            <img src="./img/imagem-fundo.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class=" rounded-lg p-6 max-w-xs plano">
                <h3 class="text-xl font-semibold">Business plan</h3>
                <p class="text-2xl font-bold mt-2">$29/mo
                  <span class="text-sm font-normal">or $299 yearly</span>
                </p>
                <br>
                <div id="itens-plano" class="mt-4">

                  <div id="beneficios" class="flex items-center">
                    <span class="ml-2"><i class='bx bx-check'></i>Feature text goes here</span>
                  </div>
                  <div id="beneficios" class="flex items-center">
                    <span class="ml-2"><i class='bx bx-check'></i>Feature text goes here</span>
                  </div>
                  <div id="beneficios" class="flex items-center">
                    <span class="ml-2"><i class='bx bx-check'></i>Feature text goes here</span>
                  </div>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary btn-lg"><a href="planos.php">Adquirir plano</a></button>
            </div>
          </div>
        </div> -->
  </div>


  </div>

  </div>



  <div class="vendas">
    <h1>Nossas ofertas e descontos</h1>
    <p>Aproveite para achar nossas ofertas e descontas da semana!</p>


    <div class="lista">
      <div class="item">
        <img src="./img/computador.png" alt="...">
        <div class="info">
          <div>
            <h5>Sites dinamicos</h5>
            <div class="btc">
              <i class='bx bxl-bitcoin'></i>
              <p>0.29 btc</p>
            </div>
          </div>
        </div>
        <div class="oferta">
          <p>2h 28min 1s</p>
          <a href="">
            <p>Oferta</p>
          </a>
        </div>
      </div>
      <div class="item">
        <img src="./img/computador.png" alt="...">
        <div class="info">
          <div>
            <h5>Sites dinamicos</h5>
            <div class="btc">
              <i class='bx bxl-bitcoin'></i>
              <p>0.29 btc</p>
            </div>
          </div>
        </div>
        <div class="oferta">
          <p>2h 28min 1s</p>
          <a href="">
            <p>Oferta</p>
          </a>
        </div>
      </div>
      <div class="item">
        <img src="./img/computador.png" alt="...">
        <div class="info">
          <div>
            <h5>Sites dinamicos</h5>
            <div class="btc">
              <i class='bx bxl-bitcoin'></i>
              <p>0.29 btc</p>
            </div>
          </div>
        </div>
        <div class="oferta">
          <p>2h 28min 1s</p>
          <a href="">
            <p>Oferta</p>
          </a>
        </div>
      </div>
      <div class="item">
        <img src="./img/computador.png" alt="...">
        <div class="info">
          <div>
            <h5>Sites dinamicos</h5>
            <div class="btc">
              <i class='bx bxl-bitcoin'></i>
              <p>0.29 btc</p>
            </div>
          </div>
        </div>
        <div class="oferta">
          <p>2h 28min 1s</p>
          <a href="">
            <p>Oferta</p>
          </a>
        </div>
      </div>
    </div>

  </div>

  <br><br><br><br><br>

  <div class="atendimento">
    <img src="./img/obrigado.png" alt="">
    <h1>Área de livre criatividade só aqui</h1>
    <p>Se você deseja criar seu website sem que haja barreiras e diversas limitações, aqui você é livre para escolher o
      que quiser para brincar com a criatividade</p>
    <div class="faleconosco">
      <p>atendimento:[dias e horas]</p>
      <p>Para maiores informações fale conosco</p>
      <button><a href="faleconosco.php">Fale conosco</a></button>
    </div>

  </div>


  </main>
  </div>

  <!--tipo dos sites -->

  <div class="container2 ">
    <h2>Brinque com a criatividade aqui mesmo!</h2>
    <div class="cards-sites">
      <h3>Site dinamico</h3>
      <!-- Card -->
      <div class="card2">
        <!-- Header -->
        <header>
          <h1>logo</h1>
        </header>

        <!-- Body -->
        <div class="body">
          <div class="div-lateral"></div>
          <div class="div-grande"></div>
          <div class="divs1"></div>
          <div class="divs2"></div>
          <div class="divs3"></div>
        </div>

        <!-- Footer -->
        <footer>&copy; 2023 Mini Layout</footer>



      </div>

      <!-- Quadradinhos de cores -->

      <div class="color-options">
        <label for="colorInput">Escolha uma cor:</label>
        <div class="color-option" data-color="#ff6b6b"></div>
        <div class="color-option" data-color="#6b5b95"></div>
        <div class="color-option" data-color="#4ecdc4"></div>
        <div class="color-option" data-color="#ffd166"></div>
      </div>
      <!-- Input de cor personalizada -->
      <div class="custom-color">
        <label for="colorInput">Escolha uma cor:</label>
        <input type="color" id="colorInput" value="#ff6b6b" />
      </div>
      <!-- Botões fixos para trocar o fundo -->
      <div class="background-buttons">
        <label for="colorInput">Escolha uma cor de fundo:</label>
        <button data-bg="white">Branco</button>
        <button data-bg="gray">Cinza</button>
        <button data-bg="black">Preto</button>
      </div>

      <a href="sitedinamico.php" class="link1">Saiba mais</a>

    </div>

    <div class="cards-sites">

      <h1>Site dinamico</h1>
      <div class="card2">
        <!-- Header -->
        <header>
          <h1>logo</h1>
        </header>

        <!-- Body -->
        <div class="body">
          <div class="div-lateral"></div>
          <div class="div-grande"></div>
          <div class="divs1"></div>
          <div class="divs2"></div>
          <div class="divs3"></div>
        </div>

        <!-- Footer -->
        <footer>&copy; 2023 Mini Layout</footer>



      </div>

      <!-- Quadradinhos de cores -->

      <div class="color-options2">
        <label for="colorInput">Escolha uma cor:</label>
        <div class="color-option" data-color="#ff6b6b"></div>
        <div class="color-option" data-color="#6b5b95"></div>
        <div class="color-option" data-color="#4ecdc4"></div>
        <div class="color-option" data-color="#ffd166"></div>
      </div>
      <!-- Input de cor personalizada -->
      <div class="custom-color2">
        <label for="colorInput">Escolha uma cor:</label>
        <input type="color" id="colorInput" value="#ff6b6b" />
      </div>
      <!-- Botões fixos para trocar o fundo -->
      <div class="background-buttons2">
        <label for="colorInput">Escolha uma cor de fundo:</label>
        <button data-bg="white">Branco</button>
        <button data-bg="gray">Cinza</button>
        <button data-bg="black">Preto</button>
      </div>

      <a href="sitedinamico copy.php" class="link2">Saiba mais</a>
    </div>

    <div class="cards-sites">
      <h3>Site dinamico</h3>
      <div class="card2">
        <!-- Header -->
        <header>
          <h1>logo</h1>
        </header>

        <!-- Body -->
        <div class="body">
          <div class="div-lateral"></div>
          <div class="div-grande"></div>
          <div class="divs1"></div>
          <div class="divs2"></div>
          <div class="divs3"></div>
        </div>

        <!-- Footer -->
        <footer>&copy; 2023 Mini Layout</footer>



      </div>

      <!-- Quadradinhos de cores -->

      <div class="color-options">
        <label for="colorInput">Escolha uma cor:</label>
        <div class="color-option" data-color="#ff6b6b"></div>
        <div class="color-option" data-color="#6b5b95"></div>
        <div class="color-option" data-color="#4ecdc4"></div>
        <div class="color-option" data-color="#ffd166"></div>
      </div>
      <!-- Input de cor personalizada -->
      <div class="custom-color">
        <label for="colorInput">Escolha uma cor:</label>
        <input type="color" id="colorInput" value="#ff6b6b" />
      </div>
      <!-- Botões fixos para trocar o fundo -->
      <div class="background-buttons">
        <label for="colorInput">Escolha uma cor de fundo:</label>
        <button data-bg="white">Branco</button>
        <button data-bg="gray">Cinza</button>
        <button data-bg="black">Preto</button>
      </div>

      <a href="sitedinamico copy 2.php" class="link1">Saiba mais</a>
    </div>

    <div class="cards-sites">

      <h1>Site dinamico</h1>
      <div class="card2">
        <!-- Header -->
        <header>
          <h1>logo</h1>
        </header>

        <!-- Body -->
        <div class="body">
          <div class="div-lateral"></div>
          <div class="div-grande"></div>
          <div class="divs1"></div>
          <div class="divs2"></div>
          <div class="divs3"></div>
        </div>

        <!-- Footer -->
        <footer>&copy; 2023 Mini Layout</footer>



      </div>

      <!-- Quadradinhos de cores -->

      <div class="color-options2">
        <label for="colorInput">Escolha uma cor:</label>
        <div class="color-option" data-color="#ff6b6b"></div>
        <div class="color-option" data-color="#6b5b95"></div>
        <div class="color-option" data-color="#4ecdc4"></div>
        <div class="color-option" data-color="#ffd166"></div>
      </div>
      <!-- Input de cor personalizada -->
      <div class="custom-color2">
        <label for="colorInput">Escolha uma cor:</label>
        <input type="color" id="colorInput" value="#ff6b6b" />
      </div>
      <!-- Botões fixos para trocar o fundo -->
      <div class="background-buttons2">
        <label for="colorInput">Escolha uma cor de fundo:</label>
        <button data-bg="white">Branco</button>
        <button data-bg="gray">Cinza</button>
        <button data-bg="black">Preto</button>
      </div>

      <a href="sitedinamico copy 3.php" class="link2">saiba mais</a>
    </div>
  </div>
  <script src="./js/planoseprodutos.js"></script>
</body>

</html>