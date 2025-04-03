<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/falaconosco.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="wrapper">
        <section class="contact-section">
            <h2 class="section-title">
                Fale <br> Conosco
            </h2>

            <div class="contact-page container grid">
                <form action="https://api.web3forms.com/submit" method="POST" class="contact-form grid" id="contact-form">
                    <div class="contact-group grid">
                        <div class="contact-card">
                            <input type="hidden" name="access_key" value="d6b57578-e91e-4d2a-acd5-70502be41640">
                            <input type="text" name="user_name" id="name" required placeholder="Insira Seu nome" class="contact-input">
                            <label for="name" class="contact-label">Usuário</label>
                        </div>

                        <div class="contact-card">
                            <input type="email" name="user_email" id="email" required placeholder="exemplo@gmail.com" class="contact-input">
                            <label for="email" class="contact-label">Email</label>
                        </div>
                    </div>

                    <div class="contact-card contact-area">
                        <textarea name="user_message" id="message" required placeholder="fale seu comentário" class="contact-input"></textarea>
                        <label for="message" class="contact-label">Mensagem</label>
                    </div>
                    <button type="submit" class="contact-send button">Enviar mensagem</button>
                </form>

                <div class="social-icons">
                    <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                    <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    <a href="#" target="_blank"><i class='bx bxl-github'></i></a>
                    <a href="#" target="_blank"><i class='bx bxl-whatsapp'></i></a>
                </div>
            </div>
        </section>
    </div>

    <h1 class="boas-vindas">Seja Bem-vindo!</h1>
    <div class="img2">
        <img src="img/faleconosco.jpeg" alt="">
    </div>
    <h5 class="agradecimento">Muito obrigado por nos acompanhar!</h5>
    <button class="voltar"><a href="index.php">voltar para o início</a></button>

    <div class="container2">
    <h3>Seja livre para fazer o que deseja!</h3>
    <p>Agradecemos por você nos acompanhar e confiar em nós em sua caminhada de aprendizagem</p>
    <img src="img/obrigado.png" alt="">
  </div>
</body>

</html>