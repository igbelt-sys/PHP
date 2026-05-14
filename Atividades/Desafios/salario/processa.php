<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Analise</title>
    <style>
        <?php readfile(__DIR__ . '/../../base.css'); ?>

    </style>
</head>
<body>
    <main class="container painel">
        <div class="resultado">
            <?php
            $salarioMinimo = 1621.00;

            if ($_SERVER["REQUEST_METHOD"] !== "POST") {
                echo "<h1>Analise do Salario</h1>";
                echo "<p>Envie um salario pelo formulario.</p>";
            } else {
                $salarioInformado = str_replace(",", ".", $_POST["salario"] ?? "");
                $salario = filter_var($salarioInformado, FILTER_VALIDATE_FLOAT);

                echo "<h1>Analise do Salario</h1>";

                if ($salario === false || $salario <= 0) {
                    echo "<p>Informe um salario valido.</p>";
                } else {
                    $quantidade = (int) floor($salario / $salarioMinimo);
                    $sobra = $salario - ($quantidade * $salarioMinimo);

                    echo '<div class="item-resultado">';
                    echo "<p>Quem recebe um salario de <strong>R$ " . number_format($salario, 2, ",", ".") . "</strong></p>";
                    echo "<p>Ganha <strong>{$quantidade}</strong> salario minimo(s)</p>";
                    echo "<p>E sobra: <strong>R$ " . number_format($sobra, 2, ",", ".") . "</strong></p>";
                    echo "</div>";
                }
            }
            ?>

            <div class="acoes">
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main>
</body>
</html>
