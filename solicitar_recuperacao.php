<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // PHPMailer via Composer

$msg = "";
$msgClass = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
  $email = $_POST['email'];

  try {
    $pdo = new PDO("mysql:host=localhost;dbname=login", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
      $token = bin2hex(random_bytes(50));
      $stmt = $pdo->prepare("UPDATE usuarios SET password_reset_token = :token WHERE email = :email");
      $stmt->bindParam(':token', $token);
      $stmt->bindParam(':email', $email);
      $stmt->execute();

      $resetLink = "http://localhost/Aurorait/forgot_password.php?token=" . $token;

      $mail = new PHPMailer(true);
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'nayarasp07@gmail.com';
      $mail->Password = 'gwpu bnhr nlle rskc'; // senha de app
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;

      $mail->setFrom('seuemail@gmail.com', 'Aurorait Suporte');
      $mail->addAddress($email);

      $mail->isHTML(true);
      $mail->Subject = 'Recuperação de Senha';
      $mail->Body = "Olá,<br><br>Clique no link abaixo para redefinir sua senha:<br><br>
                           <a href='{$resetLink}'>Redefinir Senha</a><br><br>Se você não solicitou isso, ignore este e-mail.";

      $mail->send();
      $msg = "Um link de recuperação foi enviado para seu e-mail.";
      $msgClass = "alert alert-success fade show text-center";
    } else {
      $msg = "E-mail não encontrado.";
      $msgClass = "alert alert-danger fade show text-center";
    }
  } catch (Exception $e) {
    $msg = "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    $msgClass = "alert alert-danger fade show text-center";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Esqueceu a Senha</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/solicitarecup.css">
</head>

<body>
  <div class="container">
    <div class="formulario">
      <h2>Recuperar Senha</h2>

      <?php if ($msg): ?>
        <div class="<?= $msgClass ?>" role="alert">
          <?= $msg ?>
        </div>
      <?php endif; ?>

      <form action="" method="POST">
        <div class="input-box">
          <label for="email">Digite seu e-mail:</label>
          <br><br>
          <input type="email" name="email" id="email" required>
        </div>
        <br><br><br>
        <div class="input-box-button">
          <input type="submit" value="Enviar link de recuperação">
        </div>
    </div>
    </form>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Espera 4 segundos e esconde o alerta
    setTimeout(() => {
      const alert = document.querySelector('.alert');
      if (alert) {
        alert.classList.add('fade');
        setTimeout(() => alert.remove(), 500);
      }
    }, 4000);
  </script>

</body>

</html>