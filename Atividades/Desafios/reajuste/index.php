<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Precos</title>
    <style>
         <?php readfile(__DIR__ . '/../../base.css'); ?>
    </style>
</head>
<body>
    <main class="container painel">
        <h1>Reajustador de Precos</h1>

        <form action="processa.php" method="post">
            <label for="preco">Preco do Produto:</label>
            <input type="number" name="preco" id="preco" step="0.01" min="0.01" value="100" required>

            <label for="percentual">Percentual de Reajuste <span id="valor-percentual">15</span>%</label>
            <input class="faixa" type="range" name="percentual" id="percentual" min="0" max="100" value="15" oninput="document.getElementById('valor-percentual').textContent = this.value">

            <button type="submit">Calcular Reajuste</button>
        </form>
    </main>
</body>
</html>
