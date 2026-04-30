<?php
    // Array associativo com uma lista de produtos.
    $produtos = [
        ["nome" => "Caderno", "categoria" => "Papelaria", "preco" => 15.50],
        ["nome" => "Caneta", "categoria" => "Papelaria", "preco" => 3.00],
        ["nome" => "Mochila", "categoria" => "Material escolar", "preco" => 89.90]
    ];

    echo "<h1>Lista de Produtos</h1>";

    // O foreach percorre o array e exibe os dados de cada produto.
    foreach ($produtos as $produto) {
        echo "<strong>Produto:</strong> " . $produto["nome"] . "<br>";
        echo "<strong>Categoria:</strong> " . $produto["categoria"] . "<br>";
        echo "<strong>Preco:</strong> R$ " . number_format($produto["preco"], 2, ",", ".") . "<br><br>";
    }
?>
