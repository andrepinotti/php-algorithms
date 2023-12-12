<?php

$host = "localhost"; // Podemos usar o ip atual
$user = "root"; //usuario no login
$senha = "senha_da_nasa"; //Senha de login no SGBD
$banco = "cursophp"; //Database no SGBD

$conn = new mysqli($host, $user, $senha, $banco);

//Iremos adicionar itens na tabela itens do projeto cursophp
//Iremos colocar os valores deles como variáveis 

$table = "itens";
$nome = "Xícara";
$descricao = "Xícara usada de cor rosa";


$insert = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";
$insert2 = "INSERT INTO $table (nome, descricao) VALUES ('Chinelo','Havaiana 43')";

//$delete = "DELETE FROM itens
//                WHERE id IN (2, 3)"; Como foi duplicado o valor da xícara, eu usei o delete para excluir os dois de uma vez pelo id 

$conn->query($insert);
$conn->query($insert2);

//$conn->query($delete);

$conn->close();

?>