<?php
$numero = '';

//verifica se a o numero nao é nulo e se a variavel existe
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Posterior</title>
    <link rel="stylesheet" href="../../base.css">
</head>
<body>
    <main class="container">
        <h1>Antecessor e Posterior</h1>
        <p>Digite um numero para ver o antecessor e o posterior.</p>

        <form method="post">
            <label for="numero">Digite um numero:</label>
            <input type="number" name="numero" id="numero" value="<?= $numero ?>">
            <button type="submit">Mostrar</button>
        </form>

        <?php if ($numero !== ''): ?>
            <div class="resultado">
                <h2>Resultado</h2>
                <p>Numero: <?= $numero ?></p>
                <p>Antecessor: <?= $numero - 1 ?></p>
                <p>Posterior: <?= $numero + 1 ?></p>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
