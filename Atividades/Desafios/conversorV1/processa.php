<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversao</title>
    <style>
        <?php readfile(__DIR__ . '/../../base.css'); ?>
    </style>
</head>
<body>
    <main class="container">
        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valor = $_POST["valor"] ?? 0;
                $dolar = $_POST["dolar"] ?? 0;

                echo "<h2>Resultado da conversao: </h2>";

                if ($dolar > 0) {
                    $result = $valor / $dolar;

                    if (function_exists("numfmt_create")) {
                        $padrao_brasil = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                        $padrao_eua = numfmt_create("en_US", NumberFormatter::CURRENCY);

                        echo "<p>Valor em Reais (R$): " . numfmt_format_currency($padrao_brasil, $valor, "BRL") . "</p>";
                        echo "<p><strong>Valor em Dolares (US$): </strong>" . numfmt_format_currency($padrao_eua, $result, "USD") . "</p>";
                    } else {
                        echo "<p>Valor em Reais (R$): R$ " . number_format($valor, 2, ",", ".") . "</p>";
                        echo "<p><strong>Valor em Dolares (US$): </strong>US$ " . number_format($result, 2, ",", ".") . "</p>";
                    }
                } else {
                    echo "<p>Digite uma cotacao maior que zero.</p>";
                }
            } else {
                echo "Por favor, envie um valor usando o formulario.";
            }
            ?>
            <p><a href="index.php">Voltar</a></p>
        </div>
    </main>
</body>
</html>
