<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $password = "senha_da_nasa";

    $conn = new PDO("mysql:host=$host;
        dbname=$db", $user, $password);

    $nome = "Teclado Razer";
    $descricao ="Black Widow";
    $id = 18;

    $stmt = $conn->prepare("UPDATE itens SET nome= :nome, descricao=:descricao WHERE id = :id");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    
    $stmt->execute();

    echo "Teste de atualização";