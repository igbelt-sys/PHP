<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade S9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Formulario de Contato</h1>
        <p>Preencha os campos abaixo para enviar sua mensagem.</p>

        <form action="processa.php" method="post">
            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="campo">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="campo">
                <label for="mensagem">Mensagem:</label>
                <textarea name="mensagem" id="mensagem" rows="5" required></textarea>
            </div>

            <input class="botao" type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
