<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analise de Salario</title>
    <style>
        <?php readfile(__DIR__ . '/../../base.css'); ?>
    </style>
</head>
<body>
    <main class="container painel">
        <form action="processa.php" method="post">
            <label for="salario">Salario R$:</label>
            <input type="number" name="salario" id="salario" step="0.01" min="0.01" placeholder="0" required>

            <p class="aviso">
                Considerando o salario minimo de <strong>R$ 1.621,00</strong>
            </p>

            <button type="submit">Analisar</button>
        </form>
    </main>
</body>
</html>
