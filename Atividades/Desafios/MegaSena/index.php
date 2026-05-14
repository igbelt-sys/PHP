<?php
$numeroSorteado = '';

if (isset($_POST['sortear'])) {
    $numeroSorteado = mt_rand(1, 60);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega-Sena</title>
    <style>
        <?php readfile(__DIR__ . '/../../base.css'); ?>
    </style>
</head>
<body>
    <main class="container">
        <h1>Mega-Sena</h1>
        <p>Clique no botao para sortear um numero aleatorio.</p>

        <form method="post">
            <button type="submit" name="sortear">Sortear numero</button>
        </form>

        <?php if ($numeroSorteado): ?>
            <div class="resultado">
                <h2>Numero sorteado</h2>
                <p><?= $numeroSorteado ?></p>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
