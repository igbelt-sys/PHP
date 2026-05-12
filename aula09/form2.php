<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 2 </title>
</head>
<body>
    <form method="post">
        <label >E-mail</label>
        <input type="email" name="email" id="email" placeholder="seu@email.com">
        <input type="subimit" value="Enviar">
    </form>
    <?php 
        $email = $_POST ["email"];
        echo"E-mail informado: $email";
    ?>
</body>
</html>