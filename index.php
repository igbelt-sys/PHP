<?php
$sections = array(
    'inicio' => array(
        'label' => 'Inicio',
        'title' => 'Primeiros passos',
        'description' => 'Paginas iniciais para revisar o basico de PHP.',
        'items' => array(
            array(
                'title' => 'Introducao ao PHP',
                'description' => 'Primeira pagina com saida simples e estrutura basica.',
                'badge' => 'PHP',
                'path' => 'introdução/index.php',
            ),
        ),
    ),
    'aulas' => array(
        'label' => 'Aulas',
        'title' => 'Aulas e exemplos',
        'description' => 'Resumo das aulas e exercicios curtos.',
        'items' => array(
            array('title' => 'Aula 03', 'description' => 'Pagina principal da aula.', 'badge' => 'Resumo', 'path' => 'aul03/index.php'),
            array('title' => 'Aula 03 - Variavel 1', 'description' => 'Exercicio simples com variaveis.', 'badge' => 'Variaveis', 'path' => 'aul03/var1.php'),
            array('title' => 'Aula 03 - Variavel 2', 'description' => 'Mais pratica com variaveis.', 'badge' => 'PHP', 'path' => 'aul03/var2.php'),
            array('title' => 'Aula 04', 'description' => 'Pagina principal da aula.', 'badge' => 'Resumo', 'path' => 'aula04/index.php'),
            array('title' => 'Aula 04 - Variavel 1', 'description' => 'Exercicio com variaveis.', 'badge' => 'Variaveis', 'path' => 'aula04/var1.php'),
            array('title' => 'Aula 04 - Variavel 2', 'description' => 'Exercicio complementar.', 'badge' => 'PHP', 'path' => 'aula04/var2.php'),
            array('title' => 'Aula 05', 'description' => 'Pagina principal da aula.', 'badge' => 'Resumo', 'path' => 'aula05/index.php'),
            array('title' => 'Aula 05 - Variavel 1', 'description' => 'Exercicio com exibicao de dados.', 'badge' => 'Variaveis', 'path' => 'aula05/var1.php'),
            array('title' => 'Aula 05 - Variavel 2', 'description' => 'Mais pratica com variaveis.', 'badge' => 'PHP', 'path' => 'aula05/var2.php'),
            array('title' => 'Aula 06', 'description' => 'Conteudo principal da aula.', 'badge' => 'Resumo', 'path' => 'aula06/index.php'),
            array('title' => 'Aula 06 - While', 'description' => 'Exercicio com repeticao.', 'badge' => 'Loops', 'path' => 'aula06/while.php'),
            array('title' => 'Aula 07', 'description' => 'Material da aula 07.', 'badge' => 'PHP', 'path' => 'aula07/index.php'),
        ),
    ),
    'atividades' => array(
        'label' => 'Atividades',
        'title' => 'Entregas e desafios',
        'description' => 'Atividades separadas por etapa.',
        'items' => array(
            array('title' => 'Atividade S1 R1 AT1', 'description' => 'Mini desafio com mensagens em PHP.', 'badge' => 'Exercicio', 'path' => 'Atividades/S1_R1_AT1/MiniDesafio.php'),
            array('title' => 'Atividade S2 R2 AT1', 'description' => 'HTML com saida dinamica em PHP.', 'badge' => 'HTML + PHP', 'path' => 'Atividades/S2_R2_AT1/index.php'),
            array('title' => 'Atividade S3 R1 AT1', 'description' => 'Atividade pratica da etapa 3.', 'badge' => 'Exercicio', 'path' => 'Atividades/S3_R1_AT1/index.php'),
            array('title' => 'Atividade S4 R1 AT1', 'description' => 'Atividade pratica da etapa 4.', 'badge' => 'Exercicio', 'path' => 'Atividades/S4_R1_AT1/index.php'),
            array('title' => 'Atividade S5 R1 AT1', 'description' => 'Atividade pratica da etapa 5.', 'badge' => 'Exercicio', 'path' => 'Atividades/S5_R1_AT1/index.php'),
            array('title' => 'Atividade S6 R1 AT1', 'description' => 'Atividade pratica da etapa 6.', 'badge' => 'Loops', 'path' => 'Atividades/S6_R1_AT1/index.php'),
            array('title' => 'Atividade S7 R1 AT1', 'description' => 'Atividade pratica da etapa 7.', 'badge' => 'Revisao', 'path' => 'Atividades/S7_R1_AT1/index.php'),
        ),
    ),
    'projetos' => array(
        'label' => 'Projetos',
        'title' => 'Mini projetos',
        'description' => 'Exercicios um pouco mais completos.',
        'items' => array(
            array('title' => 'Projeto Tabuada', 'description' => 'Projeto simples para praticar logica e repeticao.', 'badge' => 'Projeto', 'path' => 'Atividades/tabuada/index.php'),
        ),
    ),
);

function buildHref($path)
{
    $segments = explode('/', str_replace('\\', '/', $path));
    $encoded = array();

    foreach ($segments as $segment) {
        $encoded[] = rawurlencode($segment);
    }

    return implode('/', $encoded);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend PHP</title>
    <style>
        :root {
            color-scheme: dark;
            --bg: #0f0f14;
            --panel: #1f1f2e;
            --panel-2: #171722;
            --text: #f3f4f6;
            --muted: #a1a1b5;
            --border: rgba(255, 255, 255, 0.08);
            --accent: #7c3aed;
            --accent-2: #4c1d95;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, "Segoe UI", sans-serif;
            background: linear-gradient(180deg, #0f0f14 0%, #12121a 100%);
            color: var(--text);
        }

        .layout {
            display: grid;
            grid-template-columns: 220px 1fr;
            min-height: 100vh;
        }

        .sidebar {
            position: sticky;
            top: 0;
            height: 100vh;
            padding: 24px 18px;
            border-right: 1px solid var(--border);
            background: rgba(15, 15, 20, 0.95);
        }

        .brand {
            margin-bottom: 28px;
        }

        .brand h1 {
            margin: 0 0 8px;
            font-size: 1.15rem;
        }

        .brand p {
            margin: 0;
            color: var(--muted);
            font-size: 0.92rem;
            line-height: 1.5;
        }

        .nav {
            display: grid;
            gap: 10px;
        }

        .nav a {
            display: block;
            padding: 10px 12px;
            border-radius: 12px;
            color: var(--muted);
            text-decoration: none;
            transition: 0.2s ease;
        }

        .nav a:hover,
        .nav a:focus-visible {
            background: rgba(124, 58, 237, 0.14);
            color: var(--text);
            outline: none;
        }

        .content {
            padding: 32px;
        }

        .topbar {
            margin-bottom: 32px;
        }

        .topbar h2 {
            margin: 0 0 8px;
            font-size: clamp(2rem, 4vw, 2.8rem);
        }

        .topbar p {
            margin: 0;
            max-width: 720px;
            color: var(--muted);
            line-height: 1.6;
        }

        .section {
            margin-bottom: 32px;
        }

        .section-header {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 16px;
        }

        .section-header h3 {
            margin: 0 0 6px;
            font-size: 1.3rem;
        }

        .section-header p {
            margin: 0;
            color: var(--muted);
        }

        .count {
            padding: 6px 10px;
            border: 1px solid var(--border);
            border-radius: 999px;
            color: var(--muted);
            font-size: 0.85rem;
            white-space: nowrap;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 16px;
        }

        .card {
            display: block;
            padding: 18px;
            border: 1px solid var(--border);
            border-radius: 16px;
            background: linear-gradient(180deg, var(--panel) 0%, var(--panel-2) 100%);
            color: inherit;
            text-decoration: none;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.18);
            transition: transform 0.18s ease, border-color 0.18s ease, box-shadow 0.18s ease;
        }

        .card:hover,
        .card:focus-visible {
            transform: translateY(-3px);
            border-color: rgba(124, 58, 237, 0.45);
            box-shadow: 0 14px 28px rgba(76, 29, 149, 0.22);
            outline: none;
        }

        .card h4 {
            margin: 0 0 10px;
            font-size: 1rem;
        }

        .card p {
            margin: 0 0 14px;
            color: var(--muted);
            line-height: 1.55;
            font-size: 0.94rem;
        }

        .meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 999px;
            background: rgba(124, 58, 237, 0.16);
            color: #ddd6fe;
            font-size: 0.8rem;
        }

        .path {
            color: var(--muted);
            font-size: 0.8rem;
        }

        @media (max-width: 820px) {
            .layout {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: static;
                height: auto;
                border-right: none;
                border-bottom: 1px solid var(--border);
            }

            .content {
                padding: 20px;
            }

            .section-header {
                flex-direction: column;
                align-items: start;
            }
        }
    </style>
</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            <div class="brand">
                <h1>Backend PHP</h1>
                <p>Repositorio pessoal de exercicios, aulas e pequenos projetos.</p>
            </div>

            <nav class="nav">
                <?php foreach ($sections as $id => $section): ?>
                    <a href="#<?= htmlspecialchars($id, ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($section['label'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        </aside>

        <main class="content">
            <header class="topbar">
                <h2>Backend PHP</h2>
                <p>Uma home simples para abrir rapidamente cada aula, atividade e projeto do repositorio.</p>
            </header>

            <?php foreach ($sections as $id => $section): ?>
                <section class="section" id="<?= htmlspecialchars($id, ENT_QUOTES, 'UTF-8') ?>">
                    <div class="section-header">
                        <div>
                            <h3><?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p><?= htmlspecialchars($section['description'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                        <span class="count"><?= count($section['items']) ?> itens</span>
                    </div>

                    <div class="grid">
                        <?php foreach ($section['items'] as $item): ?>
                            <a class="card" href="<?= htmlspecialchars(buildHref($item['path']), ENT_QUOTES, 'UTF-8') ?>">
                                <h4><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h4>
                                <p><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') ?></p>
                                <div class="meta">
                                    <span class="badge"><?= htmlspecialchars($item['badge'], ENT_QUOTES, 'UTF-8') ?></span>
                                    <span class="path"><?= htmlspecialchars($item['path'], ENT_QUOTES, 'UTF-8') ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        </main>
    </div>
</body>
</html>
