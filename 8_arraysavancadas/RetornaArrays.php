<?php 

    //Iremos usar a função array_keys e retornar apenas as chaves 

    $carro = ["Modelo" =>"Sedan", 
            "Marca"=> "BMW",
            "Câmbio" => "Automático",
            "Ano" => 2021,
            "Motor" => 2.7];

    $printchaves = array_keys($carro);

    print_r($printchaves);