<?php
session_start();
include_once('config.php');

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

$logado = $_SESSION['email'];

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
}
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Área do Cliente - AuroraIT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/areacli.css">
</head>

<body>
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg bg-body-primary bg-dark">
        <div>
            <a href="index.php"><button class="voltar" type="submit">Home</button></a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php"><b>AuroraIT</b></a>
            <div class="d-flex">
                <a href="sair.php" class="btn btn-danger">Sair</a>
            </div>
        </div>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="flex-fill p-4">
        <div class="container">
            <h1 class="text-white">Bem-vindo, <u><?= $logado ?></u></h1>

            <!-- MENU LATERAL -->
            <div class="row gx-3 menu-lateral">
                <div class="col-lg-3">
                    <div class="list-group">
                        <a href="dadoscliente.php" class="list-group-item list-group-item-action text-dark">
                            <i class='bx bx-user'></i> Dados Pessoais
                        </a>
                        <a href="dadoscliente.php" class="list-group-item list-group-item-action text-dark">
                            <i class='bx bx-phone'></i> Contatos
                        </a>
                        <a href="enderecocliente.php" class="list-group-item list-group-item-action bg-danger text-light">
                            <i class='bx bx-home'></i> Endereço
                        </a>
                        <a href="pedidoscliente.php" class="list-group-item list-group-item-action text-dark">
                            <i class='bx bxs-truck'></i> Pedidos
                        </a>
                        <a href="itensfavoritoscliente.php" class="list-group-item list-group-item-action text-dark">
                            <i class='bx bx-heart'></i> Favoritos
                        </a>
                        <a href="senha.php" class="list-group-item list-group-item-action text-dark">
                            <i class='bx bx-lock-alt'></i> Alterar Senha
                        </a>

                    </div>
                </div>

                <!-- TABELA DE USUÁRIOS -->
                <div class="col-lg-8">
                    <div class="box-search mb-3">
                        <form method="GET" class="d-flex gap-2">
                            <input type="search" name="search" class="form-control" placeholder="Pesquisar por nome, id ou email">
                            <button type="submit" class="btn btn-primary">
                                <i class='bx bx-search-alt'></i> 
                            </button>
                        </form>
                    </div>

                    <div class="table-responsive bg-light rounded">
                        <table class="table table-bordered text-center align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Senha (hash)</th>
                                    <th>Email</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($user_data = mysqli_fetch_assoc($result)) : ?>
                                    <tr>
                                        <td><?= $user_data['id'] ?></td>
                                        <td><?= $user_data['nome'] ?></td>
                                        <td><?= $user_data['senha'] ?></td>
                                        <td><?= $user_data['email'] ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $user_data['id'] ?>" title="Deletar">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
