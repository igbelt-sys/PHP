<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        <?php readfile(__DIR__ . '/../base.css'); ?>
    </style>
</head>

<body>
    <main class="container">
        <h1>Tabuada</h1>
        <p>Exemplo da tabuada do numero 4.</p>

        <table>
            <tbody>
                <?php
                $x = 4;

                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    echo "<td>$x x $i</td>";
                    echo "<td>" . ($x * $i) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>
