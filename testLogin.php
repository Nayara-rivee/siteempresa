<?php
session_start();
include_once('config.php');

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Busca o usuário com o e-mail informado
    $stmt = $conexao->prepare("SELECT id, nome, sobrenome, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        // Verifica se a senha está correta
        if (password_verify($senha, $usuario['senha'])) {
            // Login bem-sucedido
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            $_SESSION['usuario_sobrenome'] = $usuario['sobrenome'];
            $_SESSION['email'] = $email;

            // Redireciona com JavaScript e define localStorage
            echo "
            <!DOCTYPE html>
            <html lang='pt-br'>
            <head>
              <meta charset='UTF-8'>
              <title>Redirecionando...</title>
              <script>
                document.addEventListener('DOMContentLoaded', function () {
                  localStorage.setItem('usuarioLogado', 'true');
                  window.location.href = 'enderecocliente.php';
                });
              </script>
              <noscript>
                <meta http-equiv='refresh' content='0;url=sistema.php'>
              </noscript>
            </head>
            <body>
              Redirecionando para seu painel...
            </body>
            </html>";
            
            exit;
        } else {
            $_SESSION['erro_login'] = 'Senha incorreta!';
            header('Location: login.php');
            exit;
        }
    } else {
        $_SESSION['erro_login'] = 'E-mail não encontrado!';
        header('Location: login.php');
        exit;
    }

    $stmt->close();
} else {
    $_SESSION['erro_login'] = 'Preencha todos os campos.';
    header('Location: login.php');
    exit;
}
