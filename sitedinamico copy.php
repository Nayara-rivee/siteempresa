<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/sitesdinamico.css">
    <link href="https://cdn.jsdelivr.net/gh/codeOpacity/op_icons@main/op_icons.all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="components">
            <div class="container-image">
                <img src="./img/undraw_vibe-coding_mjme.svg" alt="">
            </div>
            <div class="introducao">
                <h1>As dinânimas mais diferente que você verá para seus sites</h1>
                <p>Com nossos sites vocês podem explorar a dinÂnima com seus clientes. Lorem, ipsum dolor sit amet
                    consectetur adipisicing elit. Accusamus sit rerum nulla totam earum veniam aut. A, quas aliquid
                    nihil quis consequatur quam suscipit nobis at voluptatem, perferendis incidunt expedita.</p>
                <button><a href="planoseprodutos.html">assine já!</a></button>
            </div>
        </div>
    </div>

    <div class="explicacao">
        <div class="main">
            <div class="video1">
               
                <div class="bg-button2">
                <button class="botao" id="play"><span class="op-play"></span></button>
            </div>
                <div class="modal" id="video1">
                    <div class="modal_container">
                        <span class="close" data-modal="video1">&times;</span>
                        <div class="iframe_container">
                            <iframe width="560" height="315" src="./img/2024-11-29 19-46-56.mp4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="conteudo">
                    <h2>mais diversao</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, asperiores sequi officia laboriosam placeat facilis reiciendis, eius at quidem odio dicta minima totam itaque doloremque culpa quae exercitationem veniam alias?</p>
                </div>
            </div>

            <div class="video2">
                <div class="bg-button2">
                <button class="botao" id="play2">
                    <span class="op-play"></span>
                </button>
                </div>
                <div class="modal" id="video2">
                    <div class="modal_container">
                        <span class="close" data-modal="video2">&times;</span>
                        <div class="iframe_container">
                            <iframe width="560" height="315" src="./img/2024-11-29 16-43-52.mp4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="conteudo">
                    <h2>mais diversao</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, asperiores sequi officia laboriosam placeat facilis reiciendis, eius at quidem odio dicta minima totam itaque doloremque culpa quae exercitationem veniam alias?</p>
                </div>
            </div>

        </div>
    </div>

    <div class="contato">
        <img src="./img/computador.png" alt="" />
        <h1>Venha acertar seu orçamento!</h1>
        <form name="form1" id="form1" method="POST" action="#">
          <div class="name">
            <label for="name">Nome</label>
            <input
              type="text"
              name="firstname"
              id="firstname"
              placeholder="Digite seu primeiro nome"
              required
            />
          </div>
          <div class="email">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Digite seu email"
              required
            />
          </div>
          <div class="tell">
            <label for="number">WhatsApp</label>
            <input
              type="tel"
              name="number"
              id="number"
              placeholder="(xx) xxxx-xxxx"
              required
            />
          </div>
          <div class="mensagem">
            <textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
          </div>
          <div class="button-form">
            <button><a href="index.php">Fazer orçamento</a></button>
          </div>

        </form>
        <div class="meios-contato">
            <h4>Nossos meios de comunicação</h4>
            <p>@instagramempresa</p>
            <p>(xx) xxxxx-xxxx</p>
            <p>facebook</p>
          </div>
      </div>
    <script src="./js/sitedinamico.js"></script>
</body>

</html>