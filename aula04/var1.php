<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula04</title>
</head>
<body>
    <?php 
        $anofundacao = 2000;
        $anoatual = 2026;
        
        $tempoEmpresa = $anoatual - $anofundacao;

        echo "Ano de fundação: $anofundacao";
        echo "Ano atual: $anoatual";
        echo "O tempo da empresa é: $tempoEmpresa;"
    ?>
</body>
</html>