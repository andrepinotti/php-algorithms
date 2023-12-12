<?php

    //Usaremos a função extract onde criaremos variáveis rapidamente
    //As chaves do array associativo serão transformados em variaveis com o mesmo nome da chave


    $arr = [
        "cor" => "vermelho",
        "numero" => 5,
        "objeto" => "chave",
        "transporte" => "bicicleta"
    ];

    //Coloquei quatro chaves e valores aleatórios agora chamaremos a função extract e colocar o array como parâmetro
    extract($arr);

    //Agora que passamos por parâmetro e chamamos a função iremos imprimir uma das chaves, que agora podemos usar como variáveis
    echo $cor . "<br>";
    
    //Agora iremos usar duas variáveis iguais que retornarão resultados diferentes

    $arr2 = [
        "numero" => 6,
        "objeto" => "computador",
        "animal" => "girafa"
    ];
    echo $numero . "<br>"; //Retornará 5

    extract($arr2);//Agora que chamamos a extract e colocarmos para imprimir o resultado ele irá retornar outro valor de variável

    echo $numero;