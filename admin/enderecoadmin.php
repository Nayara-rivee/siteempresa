<!DOCTYPE html>

<html lang="pt-br" dir="ltr">

<head>
    <meta charset="UTF-8">


    <title> documento</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
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
    body {

        height: 100px;
        align-items: center;
        justify-content: center;
        background: #4f4d61;
        position: relative;
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

    .flex-fill {
        top: -50px;
        position: relative;
    }

    .titulo {
        color: #fff;
    }

    .areas{
        right: 10px;
        position: relative;
        top: 50px;
    }

    .campos{
        width: 700px;
        display: flex;
        position: relative;
        justify-content: flex-end;
        align-items: flex-end;
    }

    .campos2{
        width: 500px;
        margin-left: -50px;
        display: flex;
        position: relative;
        justify-content: flex-end;
        align-items: flex-end;
    }

    .container{
        position:relative;
        top: 100px;
    }
</style>

<body>
<nav class="navbar navbar-expand-lg bg-body-primary bg-dark">
        <div>
            <a href="index.php"><button class="voltar" type="submit">home</button></a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><b class="text-white">AuroraIT</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-grow-1">
                </ul>
                <div class="align-self-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="login.php" class="nav-link text-black text-white">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <span class="badge rounded-pill bg-white text-white position-absolute ms-4 mt-0" title="5 produto(s) no carrinho"><small class="text-black">5</small></span>
                            <a href="carrinho.php" class="nav-link text-white">
                                <i class='bx bx-cart-alt' style="font-size:24px"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <main class="flex-fill">
        <div class="container">
            <h1 class="text-white">Minha Conta</h1>
            <div class="row gx-3">
                <div class="col-4 areas">
                    <div class="list-group">
                    <a href="admin.php" class="list-group-item list-group-item-action bg-danger text-light">
                            <i class='bx bx-user'></i> Dados Pessoais
                        </a>
                        <a href="contatosadmin.php" class="list-group-item list-group-item-action">
                            <i class='bx bxs-contact'></i> Contatos
                        </a>
                        <a href="enderecoadmin.php" class="list-group-item list-group-item-action">
                            <i class='bx bx-home'></i> Endereço
                        </a>
                        <a href="funcionariosclientesadmin.php" class="list-group-item list-group-item-action">
                            <i class='bx bxs-truck'></i> Funcionários e clientes
                        </a>
                        <a href="itensadmin.php" class="list-group-item list-group-item-action">
                            <i class='bx bx-heart'></i> Itens
                        </a>
                        <a href="senha.php" class="list-group-item list-group-item-action">
                            <i class='bx bx-lock-alt'></i> Alterar Senha
                        </a>
                        <a href="login.php" class="list-group-item list-group-item-action">
                            <i class='bx bxs-door-open'></i> Sair
                        </a>
                    </div>
                </div>
                 
                <div class="col-8 campos">
                    <form action="">
                        <div class="form-floating mb-3 col-md-6 col-lg-4 campos2">
                            <input type="text" class="form-control" id="txtCEP" placeholder=" " autofocus>
                            <label for="txtCEP">CEP</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6 col-lg-4 campos2">
                            <input type="text" class="form-control" id="txtEndereco" placeholder=" " >
                            <label for="txtEndereco">Endereço</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6 col-lg-4 campos2">
                            <input type="text" class="form-control" id="txtBairro" placeholder=" ">
                            <label for="txtBairro">Bairro</label>
                        </div>
                        <div class="form-floating mb-3 col-md-4 campos2">
                            <input type="text" class="form-control" id="txtNumero" placeholder=" ">
                            <label for="txtNumero">Número</label>
                        </div>
                        <div class="form-floating mb-3 col-md-8 campos2">
                            <input type="text" class="form-control" id="txtComplemento" placeholder=" ">
                            <label for="txtComplemento">Complemento</label>
                        </div>
                        <div class="form-floating mb-3 campos2">
                            <input type="text" class="form-control" id="txtReferência" placeholder=" ">
                            <label for="txtReferência">Ponto de Referência</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    


</body>

</html>