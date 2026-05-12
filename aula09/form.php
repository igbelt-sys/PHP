<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Aula 09</title>
</head>
<body>
    <form method="GET">
        <label for="nome" >Nome:</label>
        <input name="nome" type="text" placeholder="Insira o nome do usuario">
        <input type="submit" value="Enviar">
    </form>
    <?php 
        $nome = $_GET["nome"];
        echo "<br> Nome informado: $nome <br>";
        var_dump($_GET);
    ?>
</body>
</html>
