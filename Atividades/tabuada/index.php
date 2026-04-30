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
            <?php
            $x = 4;

            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>";
                echo "$x x $i = " . ($x * $i) . "<br>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>