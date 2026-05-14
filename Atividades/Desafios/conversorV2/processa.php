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
<body class="tema-azul">
    <main class="container">
        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $valor = filter_var($_POST["valor"] ?? null, FILTER_VALIDATE_FLOAT);

                if ($valor === false || $valor <= 0) {
                    echo "<h2>Resultado da conversao</h2>";
                    echo "<p>Informe um valor em reais maior que zero.</p>";
                } else {
                    $inicio = date("m-d-Y", strtotime("-7 days"));
                    $fim = date("m-d-Y");

                    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='{$inicio}'&@dataFinalCotacao='{$fim}'&\$top=100&\$format=json";

                    $resposta = @file_get_contents($url);
                    $dados = $resposta ? json_decode($resposta, true) : null;

                    echo "<h2>Resultado da conversao</h2>";

                    if (
                        $dados === null ||
                        !isset($dados["value"]) ||
                        empty($dados["value"])
                    ) {
                        echo "<p>Nao foi possivel obter a cotacao do dolar.</p>";
                    } else {
                        $ultimaCotacao = end($dados["value"]);
                        $dolar = $ultimaCotacao["cotacaoCompra"] ?? 0;

                        if ($dolar <= 0) {
                            echo "<p>A cotacao retornada pela API e invalida.</p>";
                        } else {
                            $resultado = $valor / $dolar;

                            $padraoBrasil = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                            $padraoEua = numfmt_create("en_US", NumberFormatter::CURRENCY);

                            echo '<div class="item-resultado">';
                            echo "<p><strong>Valor em reais:</strong> " . numfmt_format_currency($padraoBrasil, $valor, "BRL") . "</p>";
                            echo "<p><strong>Cotacao do dolar:</strong> " . numfmt_format_currency($padraoEua, $dolar, "USD") . "</p>";
                            echo "<p><strong>Valor convertido:</strong> " . numfmt_format_currency($padraoEua, $resultado, "USD") . "</p>";
                            echo "</div>";
                        }
                    }
                }
            } else {
                echo "<h2>Resultado da conversao</h2>";
                echo "<p>Envie um valor pelo formulario para ver o resultado.</p>";
            }
            ?>

            <div class="acoes">
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main>
</body>
</html>
