<?php
include __DIR__ . '/app.php';

// Quando o formulário é enviado, salva os dados e vai para o painel.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeSalvo = trim($_POST['nome'] ?? '');
    $tema = ($_POST['tema'] ?? '') === 'azul' ? 'azul' : 'claro';

    if ($nomeSalvo === '') {
        unset($_SESSION['nome']);
    } else {
        $_SESSION['nome'] = $nomeSalvo;
    }

    setcookie('tema_s10', $tema, time() + 604800, '/');
    header('Location: painel.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade S10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?= $classeTema ?>">
    <nav class="menu">
        <a href="index.php">Formulario</a>
        <a href="painel.php">Painel</a>
    </nav>

    <h1>Sistema XPTO</h1>
    <p>Digite seu nome e escolha um tema.</p>

    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($nomeSalvo, ENT_QUOTES, 'UTF-8') ?>" required>

        <label for="tema">Tema:</label>
        <select name="tema" id="tema">
            <option value="claro" <?= $tema === 'claro' ? 'selected' : '' ?>>Branco</option>
            <option value="azul" <?= $tema === 'azul' ? 'selected' : '' ?>>Azul</option>
        </select>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>
