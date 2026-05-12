<?php
include __DIR__ . '/app.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?= $classeTema ?>">
    <nav class="menu">
        <a href="index.php">Formulario</a>
        <a href="painel.php">Painel</a>
    </nav>

    <h1>Painel</h1>

    <!-- Mostra os dados salvos, se existirem. -->
    <?php if ($nomeSalvo !== ''): ?>
        <p>Bem-vindo, <?= $nomeSalvo ?>!</p>
        <p>Seu nome foi enviado pelo formulario e salvo na sessao.</p>
        <p><strong>Tema salvo no cookie:</strong> <?= $temaTexto ?></p>
    <?php else: ?>
        <p>Nenhum nome foi salvo.</p>
        <p><a href="index.php">Voltar para o formulario</a></p>
    <?php endif; ?>
</body>
</html>
