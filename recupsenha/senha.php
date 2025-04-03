<?php
// include('conexao.php');
// session_start();


// if(isset($_POST['email']) || isset($_POST['senha'])) {

//     $email = $_POST['email'];
//     $password = password_hash($_POST['senha'], PASSWORD_DEFAULT);

//  // Verificar se o e-mail já está cadastrado

//  $checkEmail = $mysqli->query("SELECT email FROM usuarios WHERE email = '$email'");
//  if ($checkEmail->num_rows > 0) {
//      $_SESSION['register_error'] = 'Email is already registered!';
//      $_SESSION['active_form'] = 'register';
//  } else {
//      // Inserir novo usuário no banco de dados
//      $mysqli->query("INSERT INTO usuarios ( email, senha) VALUES ('$email', '$password')");
//  }

//  if($checkEmail == 1) {
     
//      $usuario = $sql_query->fetch_assoc();

//      if(!isset($_SESSION)) {
//          session_start();
//      }

//      $_SESSION['id'] = $usuario['id'];
//      $_SESSION['nome'] = $usuario['nome'];
//  } else {
//      // Inserir novo usuário no banco de dados
//      $mysqli->query("INSERT INTO usuarios (email, senha) VALUES ('$email', '$password')");
//  }


   

// }


session_start();
require_once 'conexao.php';

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Verificar se o e-mail já está cadastrado
    $checkEmail = $mysqli->query("SELECT email FROM usuarios WHERE email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'register';
    } else {
        // Inserir novo usuário no banco de dados
        $mysqli->query("INSERT INTO usuarios (email, senha) VALUES ( '$email', '$password')");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button name="register" type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>