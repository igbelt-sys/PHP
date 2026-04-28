<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s5</title>
</head>
<body>
    <?php 

        $tempoEmpresa = 5; //em anos

    echo "Tempo de empresa: ". $tempoEmpresa . "<br>";

    echo "Status de consolidação: "; 

    if ($tempoEmpresa < 2){

        echo "Nova empresa";
    }
    elseif($tempoEmpresa >2 && $tempoEmpresa <= 5 ){
        echo"Empresa consolidada";
    }
    else{
        echo"Empresa bem Consolidada";
    }


    ?>
</body>
</html>