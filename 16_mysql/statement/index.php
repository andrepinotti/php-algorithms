<?php

$host = "localhost"; // Podemos usar o ip atual
$user = "root"; //usuario no login
$senha = "senha_da_nasa"; //Senha de login no SGBD
$banco = "cursophp"; //Database no SGBD

$conn = new mysqli($host, $user, $senha, $banco);

$nome = "Suporte de microfone";

$descricao = "O suporte é novo e foi fabricado na China";

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

$stmt->bind_param("ss", $nome, $descricao);

$stmt->execute();

