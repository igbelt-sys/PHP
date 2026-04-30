<?php 
    $funcionarios = ["Ana", "pedro", "ricardo", "paulo"];
 
    // podia ter usado o foreach que é mais simples, mas basicamente ele faz uma lista imprimindo o seu index do array ou seja seu nome;
    echo "Lista de funcionarios:" . "<br>";
    for($i = 0; $i < count($funcionarios); $i++){
        echo $funcionarios[$i] . "<br>";
    }

    //contando a quantidade de funcionarios dentro da lista e comparando
    if (count($funcionarios) < 5 ){
        echo "Sua empresa tem menos que 5 funcionarios";
    }
    else{
        echo"Sua empresa tem mais que 5 funcionarios";
    }
    

?>