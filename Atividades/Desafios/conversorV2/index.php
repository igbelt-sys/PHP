<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor com PTAX</title>
    <style>
        <?php readfile(__DIR__ . '/../../base.css'); ?>
    </style>
</head>
<body>
    <main class="container">
        <h1>Conversor de Reais para Dolares</h1>
        <p>A cotacao mais recente e buscada automaticamente no Banco Central.</p>

        <form action="processa.php" method="post">
            <label for="valor">Valor em reais:</label>
            <input type="number" name="valor" id="valor" step="0.01" min="0.01" required>

            <button type="submit">Converter</button>
        </form>
    </main>
</body>
</html>
