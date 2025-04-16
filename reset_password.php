<?php
// Conectar ao banco de dados
$pdo = new PDO("mysql:host=localhost;dbname=seu_banco", "seu_usuario", "sua_senha");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Verificar se o token foi passado na URL
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Buscar o usuário com esse token
    $stmt = $pdo->prepare("SELECT * FROM users WHERE password_reset_token = :token");
    $stmt->bindParam(':token', $token);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Exibir formulário de nova senha
        echo '<form action="reset_password_action.php" method="POST">
                <input type="hidden" name="token" value="' . $token . '">
                <label for="new_password">Nova Senha:</label>
                <input type="password" name="new_password" required>
                <input type="submit" value="Redefinir Senha">
              </form>';
    } else {
        echo "Token inválido ou expirado.";
    }
} else {
    echo "Token não fornecido.";
}
?>
