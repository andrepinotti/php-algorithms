<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $password = "senha_da_nasa";

    $conn = new PDO("mysql:host=$host;
                    dbname=$db", $user, $password);

    $id = 17;

    $stmt = $conn->prepare("DELETE FROM itens WHERE id= :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    echo "Deletando dados...";