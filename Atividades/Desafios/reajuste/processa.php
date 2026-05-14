<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Reajuste</title>
    <style>
        <?php readfile(__DIR__ . '/../../base.css'); ?>
    </style>
</head>
<body>
    <main class="container painel">
        <div class="resultado">
            <?php
            echo "<h1>Resultado do Reajuste</h1>";

            if ($_SERVER["REQUEST_METHOD"] !== "POST") {
                echo "<p>Envie os dados pelo formulario.</p>";
            } else {
                $precoInformado = str_replace(",", ".", $_POST["preco"] ?? "0");
                $percentualInformado = str_replace(",", ".", $_POST["percentual"] ?? "0");

                $preco = (float) $precoInformado;
                $percentual = (float) $percentualInformado;

                if ($preco <= 0 || $percentual < 0) {
                    echo "<p>Informe valores validos.</p>";
                } else {
                    $reajuste = $preco * ($percentual / 100);
                    $novoPreco = $preco + $reajuste;

                    echo '<div class="item-resultado">';
                    echo "<p>O produto que custava <strong>R$ " . number_format($preco, 2, ",", ".") . "</strong> com um reajuste de <strong>" . number_format($percentual, 2, ",", ".") . "%</strong> passara a custar <strong>R$ " . number_format($novoPreco, 2, ",", ".") . "</strong>.</p>";
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
