<?php

$host = "localhost"; // Podemos usar o ip atual
$user = "root"; //usuario no login
$senha = "senha_da_nasa"; //Senha de login no SGBD
$banco = "cursophp"; //Database no SGBD

$conn = new mysqli($host, $user, $senha, $banco);

$id = 4; // O que iremos selecionar

$stmt = $conn->prepare("SELECT * FROM itens");

//$stmt->bind_param();

$stmt->execute();

$result = $stmt->get_result(); //Variável para pegar o resultado 

echo "Dados sobre a consulta: ";
print_r($result);
echo "<br>";

$data = $result->fetch_all(); //Pega o resultados do que enviamos ao banco em array

echo "<br>";

echo "Dados da consulta: ";
print_r($data);

