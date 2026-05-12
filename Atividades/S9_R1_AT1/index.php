<?php
// Funcao simples para exibir os dados recebidos do formulario.
function exibirCampo($label, $valor)
{
    echo $label . ': ' . $valor . '<br>';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade S9</title>
</head>
<body>
    <h1>Formulario de Contato</h1>

    //usando o post no html
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" rows="4" cols="30" required></textarea>
        <br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    //verificação dos campos com isset
    if (isset($_POST['nome'], $_POST['email'], $_POST['mensagem'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        echo '<h2>Dados recebidos</h2>';
        exibirCampo('Nome', $nome);
        exibirCampo('Email', $email);
        exibirCampo('Mensagem', $mensagem);
    }
    ?>
</body>
</html>
