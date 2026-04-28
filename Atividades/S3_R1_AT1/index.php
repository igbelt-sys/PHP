<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOI</title>
</head>
<body>
    <?php 
        $ano = 2000;
        $nome ="BOI";
        $ativa = true;
        $rendaBruta = 2.50;
        $rendaLiquida = 1.0;
        $status = $ativa ? "Ativa" : "Desativada";

    echo "<h1>Ano: $ano</h1>";
    echo "<h1>nome: $nome</h1>";
    echo "<h1>Empresa esta: $status</h1>";
    echo "<h1>Renda Bruta: $rendaBruta</h1>";
    echo" <h1>/renda Liquida: $rendaLiquida</h1>";

    ?>

    
</body>
</html>
