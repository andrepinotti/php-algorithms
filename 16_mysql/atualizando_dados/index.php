<?php

    $host = "localhost"; // Podemos usar o ip atual
    $user = "root"; //usuario no login
    $senha = "senha_da_nasa"; //Senha de login no SGBD
    $banco = "cursophp"; //Database no SGBD

    $conn = new mysqli($host, $user, $senha, $banco);

    $id = 16;

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

    $nome = "Brinco";
    $descricao = "Brinco de ouro";

    $stmt->bind_param("ssi", $nome, $descricao, $id);

    $stmt->execute();

    if($stmt->error){
        echo "Erro na alteração de dado. <br>";
        echo "Erro: " . $stmt->error;
    }


?>
    
