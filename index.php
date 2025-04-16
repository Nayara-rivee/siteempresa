<?php
session_start();
$usuarioLogado = isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/homesite.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/gh/codeOpacity/op_icons@main/op_icons.all.min.css" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/responsive.css">


</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="./img/logo.png" alt="Logo" width="280" height="120" class="d-inline-block align-text-top" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produtos e Planos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="planoseprodutos.php">Planos</a></li>
              <li><a class="dropdown-item" href="planoseprodutos.php">Produtos</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Recursos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#redes">Redes</a></li>
              <li><a class="dropdown-item" href="planoseprodutos.php">Modelos</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="faleconosco.php">Fale conosco</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#div-empresa">Sobre a embresa</a>
          </li>
          <?php if ($usuarioLogado): ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cliente.php">Minha conta</a>
            </li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
    <div class="button">
      <div class="ball"></div>
    </div>

    <?php if ($usuarioLogado): ?>
  <div>
    <a href="sair.php"><button class="logout" type="submit">Desconectar-se</button></a>
  </div>
<?php else: ?>
  <div>
    <a href="login.php"><button class="cadastrar" type="submit">Cadastrar-se</button></a>
  </div>
  <div>
    <a href="login.php"><button class="login" type="submit">Login</button></a>
  </div>
<?php endif; ?>

  </nav>
  <div class="introducao">
    <div class="texto">
      <h1>Crie seu prórpio website e comece no mundo da tecnologia hoje</h1>
      <p>
        Monte seu prórpio website e ingresse no mundo da tecnologia sem litimes
      </p>
      <a href="planoseprodutos.php"><button>Criar website</button></a>
    </div>
    <div class="img-introducao">
      <img src="./img/undraw_designer_efwz.svg" alt="" />
    </div>
  </div>
  <br /><br /><br />
  <div class="oferecimento">
    <h1>Construa seu futuro no mundo virtual agora!</h1>
    <p>
      Crie um site e monte seu futuro desde do zero á vendas internacionais
    </p>

    <br /><br /><br />
    <div class="main">
      <div class="video1">
        <button class="botao" id="play"><span class="op-play"></span></button>

        <div class="modal" id="video1">
          <div class="modal_container">
            <span class="close" data-modal="video1">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="./img/2025-03-21 16-24-0.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="video2">
        <button class="botao" id="play2">
          <span class="op-play"></span>
        </button>

        <div class="modal" id="video2">
          <div class="modal_container">
            <span class="close" data-modal="video2">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="./img/2025-03-21 16-06-1.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br>


  <!-- Serviços -->
  <div class="divs">

    <div class="div1">
      <div class="titulo-div">
        <h5>Seja livre para criar o que quiser!</h5>
      </div>
      <div class="descricao-div1">
        <p>
          Separe um tempinho do seu dia para aprender conosco! Além de aprender,
          em seus projetos você que dará seu toque pessoal, registrando sua
          marca, um pedaçinho de si mesmo naquele trabalho que talvez tenha uma
          dificuldade no que fazer
        </p>
      </div>
      <img src="./img/folhinha.png" alt="">
    </div>
    <div class="div2">
      <h5>Sem criatividade?</h5>
      <p>Geralmente o bloqueio criativo se da pela:</p>
    </div>
    <div class="div3">
      <h1>Como melhorar essa situação?</h1>
      <h5>
        Praticar cada vez mais sua criatividade, é mais uma etapa de se
        crescer!
      </h5>
    </div>
  </div>
  <!-- <section id="servicos" class="secao-servicos">
  <h3 class="titulo-secao">Nossos Serviços</h3>
  <div class="grid-servicos">
    <div class="servico">
      <h4 class="titulo-servico">🚀 Criação de Sites Profissionais</h4>
      <p>Sites rápidos, seguros e adaptáveis a qualquer dispositivo.</p>
    </div>
    <div class="servico">
      <h4 class="titulo-servico">🎨 Design Responsivo</h4>
      <p>Layout moderno e exclusivo para sua marca se destacar.</p>
    </div>
    <div class="servico">
      <h4 class="titulo-servico">🔗 Integração com redes sociais</h4>
      <p>Conecte seu site com Instagram, WhatsApp, Facebook e mais.</p>
    </div>
    <div class="servico">
      <h4 class="titulo-servico">🛠 Suporte Técnico</h4>
      <p>Acompanhamento e manutenção para que tudo funcione bem sempre.</p>
    </div>
  </div>
</section> -->
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <section id="portfolio" class="secao-portfolio">
    <h2 class="titulo-secao">Nosso Portfólio</h2>
    <div class="grid-portfolio">
      <div class="projeto">
        <img src="img/imagem1.jpeg" alt="Projeto 1">
        <h3>Site para Restaurante</h3>
        <p>Layout moderno, cardápio dinâmico e integração com WhatsApp.</p>
      </div>
      <div class="projeto">
        <img src="img/imagem2.jpeg" alt="Projeto 2">
        <h3>Loja Virtual</h3>
        <p>Site de e-commerce com carrinho, pagamento e painel administrativo.</p>
      </div>
    </div>
  </section>


  <!-- Planos -->
  <section id="planos" class="secao-planos">
    <h3 class="titulo-secao">Nossos Planos</h3>
    <div class="grid-planos">
      <!-- Plano Básico -->
      <div class="plano">
        <h4 class="titulo-plano">Plano Básico</h4>
        <p class="preco-plano">R$499</p>
        <ul class="lista-beneficios">
          <li><span class="check">✔</span> 1 Página</li>
          <li><span class="check">✔</span> Design Responsivo</li>
          <li><span class="check">✔</span> Integração com WhatsApp</li>
          <li><span class="nao">✖</span> SEO</li>
          <li><span class="nao">✖</span> Suporte Mensal</li>
        </ul>
        <a href="#contato" class="botao-escolher">Escolher</a>
      </div>

      <!-- Plano Profissional -->
      <div class="plano">
        <h4 class="titulo-plano">Plano Profissional</h4>
        <p class="preco-plano">R$899</p>
        <ul class="lista-beneficios">
          <li><span class="check">✔</span> Até 5 Páginas</li>
          <li><span class="check">✔</span> Design Responsivo</li>
          <li><span class="check">✔</span> Integração com Redes Sociais</li>
          <li><span class="check">✔</span> SEO Básico</li>
          <li><span class="check">✔</span> Suporte de 1 mês</li>
        </ul>
        <a href="#contato" class="botao-escolher">Escolher</a>
      </div>

      <!-- Plano Premium -->
      <div class="plano">
        <h4 class="titulo-plano">Plano Premium</h4>
        <p class="preco-plano">R$1499</p>
        <ul class="lista-beneficios">
          <li><span class="check">✔</span> Páginas Ilimitadas</li>
          <li><span class="check">✔</span> Design Exclusivo</li>
          <li><span class="check">✔</span> Integração completa</li>
          <li><span class="check">✔</span> SEO Avançado</li>
          <li><span class="check">✔</span> Suporte por 6 meses</li>
        </ul>
        <a href="#contato" class="botao-escolher">Escolher</a>
      </div>
    </div>
  </section>




  <br /><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <!-- categorias -->
  <div class="categorias">
    <h1>
      Conheça as diferentes formas de você criar um site e suas categorias
    </h1>
    <p>
      Conheça as diferentes categorias que você pode escolher para começar a
      cronstruir seu próprio website
    </p>
  </div>

  <div class="categorias-sites">
    <div class="main2">
      <div class="video3">
        <div class="bg-button">
          <button class="botao" id="play3">
            <span class="op-play"></span>
          </button>
        </div>
        <div class="modal" id="video3">
          <div class="modal_container">
            <span class="close" data-modal="video3">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="./img/2024-11-29 16-43-52.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="descricao">
          <h1>Site dinâmico</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Dignissimos libero harum corporis porro laboriosam quibusdam
            consequatur nam iure sit perspiciatis consectetur officia enim
            repellendus asperiores, dolorem hic sint facere at!
          </p>
        </div>
      </div>

      <div class="video4">
        <div class="bg-button">
          <button class="botao" id="play4">
            <span class="op-play"></span>
          </button>
        </div>
        <div class="modal" id="video4">
          <div class="modal_container">
            <span class="close" data-modal="video4">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="./img/2024-11-29 19-46-56.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="descricao">
          <h1>Site dinâmico</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Dignissimos libero harum corporis porro laboriosam quibusdam
            consequatur nam iure sit perspiciatis consectetur officia enim
            repellendus asperiores, dolorem hic sint facere at!
          </p>
        </div>
      </div>

      <div class="video5">
        <div class="bg-button">
          <button class="botao" id="play5">
            <span class="op-play"></span>
          </button>
        </div>
        <div class="modal" id="video5">
          <div class="modal_container">
            <span class="close" data-modal="video5">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="./img/2024-11-29 16-43-52.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="descricao">
          <h1>Site dinâmico</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Dignissimos libero harum corporis porro laboriosam quibusdam
            consequatur nam iure sit perspiciatis consectetur officia enim
            repellendus asperiores, dolorem hic sint facere at!
          </p>
        </div>
      </div>

      <div class="video6">
        <div class="bg-button">
          <button class="botao" id="play6">
            <span class="op-play"></span>
          </button>
        </div>
        <div class="modal" id="video6">
          <div class="modal_container">
            <span class="close" data-modal="video6">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="./img/2024-11-29 19-46-56.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="descricao">
          <h1>Site dinâmico</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Dignissimos libero harum corporis porro laboriosam quibusdam
            consequatur nam iure sit perspiciatis consectetur officia enim
            repellendus asperiores, dolorem hic sint facere at!
          </p>
        </div>
      </div>
    </div>
  </div>

  <br />

  <div class="contato">
    <img src="./img/comunidade.svg" alt="" />
    <h1>Venha ser parte de nossa comunidade e ficar por dentro de tudo!</h1>
    <form name="form1" id="form1" method="POST" action="#">
      <div class="name">
        <label for="name">Nome</label>
        <input type="text" name="firstname" id="firstname" placeholder="Digite seu primeiro nome" required />
      </div>
      <div class="email">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Digite seu email" required />
      </div>
      <div class="tell">
        <label for="number">Celular</label>
        <input type="tel" name="number" id="number" placeholder="(xx) xxxx-xxxx" required />
      </div>
      <div class="button-form">
        <button><a href="index.php">Fazer parte</a></button>
      </div>
    </form>
  </div>

  <div class="div-empresa" id="div-empresa">
    <h1>Quem somos nós</h1>

    <div class="imagem-empresa">
      <img src="./img/grupo.jpeg" alt="" />
    </div>
    <div class="apresentacao-empresa">
      <h1>Quem é a AuroraIT?</h1>
      <p>
        A Aurorability nasceu de um grupo de jovens estudantes, cada um com sua perspectiva única e experiências
        diversas. Unidos por um propósito comum, eles decidiram transformar o mundo digital em um espaço mais acessível
        e
        acolhedor para todos. As ideias inovadoras de cada um, combinadas com a paixão por criar um ambiente digital
        inclusivo, deram origem à Aurorability, uma empresa que busca fazer a diferença na vida de todos os usuários.
      </p>

      <a href="faleconosco.php"><button class="btn2">Fale conosco</button></a>
    </div>

    <div class="redes" id="redes">
      <h1>Nossas redes sociais</h1>
    </div>
    <div class="container3">
      <a href="#">
        <div data-text="Github" class="glass">
          <svq>
            <i class="bx bxl-github"></i>
          </svq>
        </div>
      </a>
      <a href="#">
        <div data-text="Instagram" class="glass">
          <svq><i class="bx bxl-instagram"></i></svq>
        </div>
      </a>
      <a href="#">
        <div data-text="Discord" class="glass">
          <svq><i class="bx bxl-discord-alt"></i></svq>
        </div>
      </a>
      <a href="#">
        <div data-text="WhatsApp" class="glass">
          <svq><i class="bx bxl-whatsapp"></i></svq>
        </div>
      </a>
    </div>
    <br><br><br><br><br>
    <div class="participantes">
      <h1>Nossos participantes</h1>
      <div class="integrantes">
        <div class="container-card3">

          <div class="cards-sobre-mim">
            <img src="img/pessoa1.jpeg" alt="">
            <div class="info">
              <h2>Nayara</h2>
              <p>olá, sou a programadora do site</p>
              <div class="media-icons">
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
              </div>

            </div>
          </div>

          <div class="cards-sobre-mim">
            <img src="img/pessoa2.jpeg" alt="">
            <div class="info">
              <h2>Iza Tinoco</h2>
              <p>olá, sou a desing do grupo</p>
              <div class="media-icons">
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
              </div>

            </div>
          </div>

          <div class="cards-sobre-mim">
            <img src="img/pessoa3.jpeg" alt="">
            <div class="info">
              <h2>Maria Eduarda Simões</h2>
              <p>Olá, sou a documentadora do grupo</p>
              <div class="media-icons">
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
              </div>

            </div>
          </div>
        </div>

        <div class="container-card3">

          <div class="cards-sobre-mim">
            <img src="img/pessoa4.jpeg" alt="">
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
            <img src="img/pessoa5.jpeg" alt="">
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
            <img src="img/pessoa6.jpeg" alt="">
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
        <div class="container-card3">

          <div class="cards-sobre-mim">
            <img src="img/pessoa7.jpeg" alt="">
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

    </div>

  </div>

  <footer class="rodape" id="contato">
    <div class="rodape-div">
      <div class="rodape-div-1">
        <div class="flex-1 mb-6">
          <img src="img/logo.png" alt="..." />
          <p class="text-muted-foreground">
            Join our newsletter to stay up to date on features and releases.
          </p>
          <div class="flex mt-4">
            <input type="email" placeholder="Enter your email" class="border border-border rounded-l-md p-2 flex-1" />
            <button class="bg-primary text-primary-foreground rounded-r-md p-2">
              Subscribe
            </button>
          </div>
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

  <script src="./js/inicio.js"></script>
  <script src="./js/mode.js"></script>
</body>

</html>