<?php
//caminho http://localhost:3003/Atividades/S9_R1_AT1/index.php
// Funcao simples para exibir os dados recebidos do formulario.
function exibirCampo($label, $valor)
{
    echo '<p><strong>' . $label . ':</strong> ' . htmlspecialchars($valor, ENT_QUOTES, 'UTF-8') . '</p>';
}

// Valores padrao para manter o formulario preenchido apos o envio.
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';
$formularioEnviado = isset($_POST['nome'], $_POST['email'], $_POST['mensagem']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade S9</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background-color: #dfeaf4;
            color: #222222;
        }

        .container {
            max-width: 700px;
            margin: 40px auto;
            padding: 24px;
            background-color: #ffffff;
            border: 1px solid #dcdcdc;
            border-radius: 8px;
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
        }

        h1,
        h2 {
            margin-top: 0;
            color: #1f4e79;
        }

        p {
            line-height: 1.5;
        }

        form {
            margin-top: 20px;
        }

        .campo {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #bbbbbb;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            background-color: #fcfcfc;
        }

        textarea {
            resize: vertical;
        }

        .botao {
            width: auto;
            min-width: 130px;
            padding: 10px 18px;
            border: none;
            border-radius: 4px;
            background-color: #1f4e79;
            color: #ffffff;
            cursor: pointer;
            font-weight: bold;
        }

        .resultado {
            margin-top: 24px;
            padding: 16px;
            background-color: #eef5fb;
            border: 1px solid #c9dff1;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Contato</h1>
        <p>Preencha os campos abaixo para enviar sua mensagem.</p>

        <!-- Formulario HTML usando o metodo POST -->
        <form method="post">
            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?>" required>
            </div>

            <div class="campo">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" required>
            </div>

            <div class="campo">
                <label for="mensagem">Mensagem:</label>
                <textarea name="mensagem" id="mensagem" rows="5" required><?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8') ?></textarea>
            </div>

            <input class="botao" type="submit" value="Enviar">
        </form>

        <?php if ($formularioEnviado): ?>
            <div class="resultado">
                <h2>Dados recebidos</h2>
                <?php
                // Exibe os dados enviados pelo usuario.
                exibirCampo('Nome', $nome);
                exibirCampo('Email', $email);
                exibirCampo('Mensagem', $mensagem);
                ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
