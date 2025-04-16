<?php
// Conectar ao banco
$pdo = new PDO("mysql:host=localhost;dbname=login", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Verifica se o token foi enviado pela URL
if (!isset($_GET['token'])) {
    die("Token não fornecido.");
}

$token = $_GET['token'];

// Verifica se o token é válido
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE password_reset_token = :token");
$stmt->bindParam(':token', $token);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("Token inválido ou expirado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Senha</title>
</head>
<body>
    <h2>Redefinir Senha</h2>
    <form action="reset_password_action.php" method="POST">
        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
        <label for="new_password">Nova Senha:</label><br>
        <input type="password" name="new_password" required><br><br>
        <input type="submit" value="Redefinir Senha">
    </form>
</body>
</html>
