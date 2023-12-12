<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $password = "senha_da_nasa";

    $conn = new PDO("mysql:host=$host;
                    dbname=$db", $user, $password);


    $stmt = $conn->prepare("SELECT * FROM itens");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //O parâmetro PDO::FETCH_ASSOC é para não repetir as arrays
    
    echo "Selecionando dados do banco de dados: ";

    print_r($result);