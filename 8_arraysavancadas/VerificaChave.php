<?php

    //Iremos verificar a existência das chaves das arrays, fazendo situações de retorno de encontrado e não encontrado
    //Usaremos dois tipos de função: array_key_exists e mais usado no dia a dia dos desenvolvedores isset (está definido)

    $carro = ["Modelo" =>"Sedan", 
    "Marca"=> "BMW",
    "Câmbio" => "Automático",
    "Ano" => 2021,
    "Motor" => 2.7];

    if(array_key_exists("Marca",$carro)){
        echo "A chave existe. <br>";
    }
    else{
        echo "A chave não existe. <br>";
    }

    if(array_key_exists("Roda",$carro)){
        echo "A chave existe. <br>";
    }
    else{
        echo "A chave não existe. <br>";
    }

    if(isset($carro["Motor"])){
        echo "Chave encontrada";
    }
    else{
        echo "Chave nao encontrada <br>";
    }
    
