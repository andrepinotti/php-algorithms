<?php

    //---Como os parâmetros do cookie são interpretados---
    //name- valor do cookie 
    //value- O valor do cookie. Esse valor é guardado no computador do cliente; não guarde informação sensíve
    //expires_or_options- O tempo para o cookie expirar. Esse valor é uma timestamp Unix, portanto é o número de segundos desde a época (epoch).
    //path- O caminho no servidor onde o cookie estará disponível.
    //domain- O (sub)domínio para qual o cookie estará disponível. 
    //secure- Indica que o cookie só poderá ser transmitido sob uma conexão segura HTTPS do cliente. 
    //httponly- Quando for true o cookie será acessível somente sob o protocolo HTTP
    //options- Um array associativo onde quaisquer chaves expires, path, domain, secure, httponly e samesite. 

    setcookie("name", "André", time() + 3600);

    if(isset($_COOKIE['name'])){
        $nome = $_COOKIE['name'];
    }

    print_r($_COOKIE);
    echo "<br>";
    echo "Nome do cookie: " . $nome;