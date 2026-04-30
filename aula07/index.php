<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tbody>
            <tr>
                <th>Nome:</th>
                <th>Cargo:</th>
                <th>Salario: </th>
            </tr>
            <?php
            $funcionarios = [
                ["nome" => "Ana", "cargo" => "Analista", "salario" => 3500],
                ["nome" => "Carlos", "cargo" => "Desenvolvedor", "salario" => 3200],
                ["nome" => "Mariana", "cargo" => "Gerente", "salario" => 3001]
            ];

            foreach ($funcionarios as $f) {
                
                echo "<tr> <td>". $f["nome"] . "</td><td>" . $f["cargo"] . "</td><td>" . $f["salario"];
            }
            ?>
        </tbody>
    </table>
</body>

</html>