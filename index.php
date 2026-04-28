<?php
$pages = [
    [
        'title' => 'Introducao',
        'description' => 'Primeira pagina PHP com saida simples.',
        'path' => 'introdução/index.php',
    ],
    [
        'title' => 'Aula 03',
        'description' => 'Resumo da aula com dados da empresa.',
        'path' => 'aul03/index.php',
    ],
    [
        'title' => 'Aula 03 - Variavel 1',
        'description' => 'Exibe o nome da empresa.',
        'path' => 'aul03/var1.php',
    ],
    [
        'title' => 'Aula 03 - Variavel 2',
        'description' => 'Define variaveis basicas da empresa.',
        'path' => 'aul03/var2.php',
    ],
    [
        'title' => 'Atividade S1 R1 AT1',
        'description' => 'Mini desafio com duas mensagens em PHP.',
        'path' => 'Atividades/S1_R1_AT1/MiniDesafio.php',
    ],
    [
        'title' => 'Atividade S2 R2 AT1',
        'description' => 'Exemplo de HTML com saidas em PHP.',
        'path' => 'Atividades/S2_R2_AT1/index.php',
    ],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Backend</title>
    <style>
        :root {
            color-scheme: light;
            --bg: #f3efe5;
            --panel: #fffaf1;
            --text: #1f2933;
            --muted: #52606d;
            --accent: #b44f1e;
            --border: #e7d8bf;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Georgia, "Times New Roman", serif;
            background:
                radial-gradient(circle at top left, rgba(180, 79, 30, 0.14), transparent 30%),
                linear-gradient(135deg, var(--bg), #f8f5ee 55%, #efe5d2);
            color: var(--text);
        }

        main {
            width: min(960px, calc(100% - 32px));
            margin: 0 auto;
            padding: 48px 0 64px;
        }

        .hero {
            padding: 24px 0 32px;
        }

        h1 {
            margin: 0 0 12px;
            font-size: clamp(2.4rem, 5vw, 4rem);
            line-height: 0.95;
        }

        .hero p {
            max-width: 720px;
            margin: 0;
            color: var(--muted);
            font-size: 1.05rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
        }

        .card {
            display: block;
            padding: 20px;
            border: 1px solid var(--border);
            border-radius: 18px;
            background: rgba(255, 250, 241, 0.9);
            color: inherit;
            text-decoration: none;
            box-shadow: 0 16px 40px rgba(82, 96, 109, 0.08);
            transition: transform 160ms ease, box-shadow 160ms ease, border-color 160ms ease;
        }

        .card:hover,
        .card:focus-visible {
            transform: translateY(-4px);
            box-shadow: 0 24px 50px rgba(82, 96, 109, 0.14);
            border-color: var(--accent);
        }

        .card strong {
            display: block;
            margin-bottom: 10px;
            color: var(--accent);
            font-size: 1.1rem;
        }

        .card span {
            color: var(--muted);
            line-height: 1.45;
        }
    </style>
</head>
<body>
    <main>
        <section class="hero">
            <h1>Backend PHP</h1>
            <p>Pagina inicial criada para responder ao acesso em <code>/</code> e facilitar a navegacao entre os exercicios do projeto.</p>
        </section>

        <section class="grid">
            <?php foreach ($pages as $page): ?>
                <a class="card" href="<?= htmlspecialchars($page['path'], ENT_QUOTES, 'UTF-8') ?>">
                    <strong><?= htmlspecialchars($page['title'], ENT_QUOTES, 'UTF-8') ?></strong>
                    <span><?= htmlspecialchars($page['description'], ENT_QUOTES, 'UTF-8') ?></span>
                </a>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>
