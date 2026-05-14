<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <style>
        <?php readfile(__DIR__ . '/../../base.css'); ?>
    </style>
</head>
<body>
    <main class="container">
        <h1>Conversor de Moeda</h1>

        <form action="processa.php" method="post">
            <label for="valor">Valor em reais:</label>
            <input type="number" name="valor" id="valor" step="0.01" required>

            <label for="dolar">Cotacao do dolar:</label>
            <input type="number" name="dolar" id="dolar" step="0.01" required>

            <button type="submit">Converter</button>
        </form>
    </main>
</body>
</html>
