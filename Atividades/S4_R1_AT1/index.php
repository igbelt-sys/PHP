<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empresa</title>
</head>
<body>
    <?php
    // variaveis
        $funcionarios = 102;
        $vBruto = 3000;
        $custos = 1200;
        $vLiquido = $vBruto - $custos;
        $ano = 1980;
        $anoAtual = 2026;
        $tempoEmpresa = $anoAtual - $ano;

        $grande = $funcionarios >= 100;

        echo "A empresa e de: " . ($grande ? "Grande Porte" : "Pequeno/medio Porte") . "<br>";
        echo "O valor Liquido da empresa e de: " . $vLiquido . "<br>";
        echo "O tempo de empresa e de: $tempoEmpresa";
    ?>
</body>
</html>
