<?php
// Funcao simples para exibir os dados recebidos do formulario.
function exibirCampo($label, $valor)
{
    echo '<div class="item-resultado">';
    echo '<h2>' . $label . '</h2>';
    echo '<p>' . nl2br(htmlspecialchars($valor, ENT_QUOTES, 'UTF-8')) . '</p>';
    echo '</div>';
}

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Mensagem Enviada</h1>
        <p>Sua mensagem foi recebida com sucesso. Veja abaixo os dados informados no formulario.</p>

        <?php
        // Verifica se os campos foram enviados pelo metodo POST.
        if (isset($_POST['nome'], $_POST['email'], $_POST['mensagem'])) {
            echo '<div class="resultado">';
            exibirCampo('Nome', $nome);
            exibirCampo('Email', $email);
            exibirCampo('Mensagem', $mensagem);
            echo '</div>';
        } else {
            echo '<p>Nenhum dado foi enviado.</p>';
        }
        ?>

        <div class="acoes">
            <a class="botao link-botao" href="index.php">Voltar</a>
        </div>
    </div>
</body>
</html>
