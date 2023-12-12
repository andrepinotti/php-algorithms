<?php

    $host = "localhost"; // Podemos usar o ip atual
    $user = "root"; //usuario no login
    $senha = "senha_da_nasa"; //Senha de login no SGBD
    $banco = "cursophp"; //Database no SGBD

    $conn = new mysqli($host, $user, $senha, $banco);

    if(isset($conn)){
        echo "Conectado";
    }