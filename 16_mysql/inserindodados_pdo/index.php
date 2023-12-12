<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $password = "senha_da_nasa";

    $conn = new PDO("mysql:host=$host;
        dbname=$db", $user, $password);

    
    $stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES (:nome, :descricao)");

    $nome = "Enceradeira";
    $descricao = "Suporte está novo e na caixa ainda.";

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();

    echo "Teste de funcionamento.";