<?php

$host = "localhost"; // Podemos usar o ip atual
$user = "root"; //usuario no login
$senha = "senha_da_nasa"; //Senha de login no SGBD
$banco = "cursophp"; //Database no SGBD

$conn = new mysqli($host, $user, $senha, $banco);

//Criando tabela dentro do phpmyadmin

$query = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

//$conn->query($query);

//Depois que enviamos os dados para o sgbd, agora colocamos um linha para dletar a tabela

$query_drop = "DROP TABLE teste";

$conn->query($query_drop);

$conn->close();