<?php
$resultado = '';

if (isset($_POST['sortear'])) {
    $numerosSorteados = [];

    while (count($numerosSorteados) < 6) {
        $numero = mt_rand(1, 60);

        if (!in_array($numero, $numerosSorteados)) {
            $numerosSorteados[] = $numero;
        }
    }

    $numerosFormatados = [];

    foreach ($numerosSorteados as $numero) {
        $numerosFormatados[] = str_pad($numero, 2, '0', STR_PAD_LEFT);
        //strpadleft é uma funcao que completa o texto co caracteres ate ele ficar com um tamanho definido, 01 07 12
    }

    $resultado = implode('-', $numerosFormatados);
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
        <p>Clique no botao para sortear 6 numeros.</p>

        <form method="post">
            <button type="submit" name="sortear">Sortear numeros</button>
        </form>

        <?php if ($resultado !== ''): ?>
            <div class="resultado">
                <h2>Numeros sorteados</h2>
                <p><?= $resultado ?></p>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
