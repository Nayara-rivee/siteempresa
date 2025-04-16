<?php
// Conectar ao banco
$pdo = new PDO("mysql:host=localhost;dbname=login", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Verifica os dados recebidos
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && isset($_POST['new_password'])) {
    $token = $_POST['token'];
    $newPassword = $_POST['new_password'];

    // Verifica se o token existe
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE password_reset_token = :token");
    $stmt->bindParam(':token', $token);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        die("Token inválido.");
    }

    // Criptografa a nova senha (usando password_hash)
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Atualiza a senha e remove o token
    $stmt = $pdo->prepare("UPDATE usuarios SET senha = :password, password_reset_token = NULL WHERE id = :id");
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':id', $user['id']);
    $stmt->execute();

    echo "Senha redefinida com sucesso!";
} else {
    echo "Requisição inválida.";
}
?>

