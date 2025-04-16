<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Carrega o PHPMailer via Composer

// Dados do banco
$pdo = new PDO("mysql:host=localhost;dbname=login", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];

    // Verificar se o e-mail existe no banco
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $token = bin2hex(random_bytes(50));

        // Armazena o token no banco
        $stmt = $pdo->prepare("UPDATE usuarios SET password_reset_token = :token WHERE email = :email");
        $stmt->bindParam(':token', $token);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Link de recuperação
        $resetLink = "http://localhost/Aurorait/forgot_password.php?token=" . $token;

        // Enviar e-mail com PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Configurações do servidor
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nayarasp07@gmail.com'; // Seu e-mail Gmail
            $mail->Password = 'gwpu bnhr nlle rskc'; // Senha de app gerada
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Remetente e destinatário
            $mail->setFrom('seuemail@gmail.com', 'Aurorait Suporte');
            $mail->addAddress($email);

            // Conteúdo
            $mail->isHTML(true);
            $mail->Subject = 'Recuperação de Senha';
            $mail->Body = "Olá, <br><br> Clique no link abaixo para redefinir sua senha:<br><br>
                           <a href='{$resetLink}'>Redefinir Senha</a><br><br>Se você não solicitou isso, ignore este e-mail.";

            $mail->send();
            echo "Um link de recuperação foi enviado para seu e-mail.";
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
        }

    } else {
        echo "E-mail não encontrado.";
    }
}
?>
