<?php
include('config.php');

if (isset($_POST['nome']) && isset($_POST['sobrenome'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE nome = ? AND sobrenome = ?");
    $stmt->bind_param("ss", $nome, $sobrenome);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(['existe' => true]);
    } else {
        echo json_encode(['existe' => false]);
    }
}
?>
