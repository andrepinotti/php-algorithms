<?php

    $host = "localhost"; // Podemos usar o ip atual
    $user = "root"; //usuario no login
    $senha = "senha_da_nasa"; //Senha de login no SGBD
    $banco = "cursophp"; //Database no SGBD

    $conn = new mysqli($host, $user, $senha, $banco);

    $nome = "Xícara";

    $stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

    $stmt->bind_param("s", $nome);

    $stmt->execute();

    if($stmt->error){
        echo "Erro de funcionamento: " . $stmt->error;
    }