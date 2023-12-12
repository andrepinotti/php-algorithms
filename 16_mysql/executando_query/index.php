<?php

    $host = "localhost"; // Podemos usar o ip atual
    $user = "root"; //usuario no login
    $senha = "senha_da_nasa"; //Senha de login no SGBD
    $banco = "projetooak"; //Database no SGBD

    $conn = new mysqli($host, $user, $senha, $banco);


    //Comando básico sql 


    $sql = "SELECT * FROM produtos";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();