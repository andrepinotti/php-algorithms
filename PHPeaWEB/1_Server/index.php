<?php

    //Ele irá apresentar as informações sobre o servidor 
    print_r($_SERVER);

    //Após isso irei imprimir no navegador algumas informações sobre o servidor 
    echo "<br>";
    echo "<br>";

    echo "Identificação do Servidor: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
    echo "<br>";
    
    echo "HostName: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "<br>";

    echo "Protocolo do Servidor: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
    echo "<br>";

    echo "Porta do Servidor: " . $_SERVER['SERVER_PORT'] . "<br>";
    echo "<br>";

    echo "HTTP Host: " . $_SERVER['HTTP_HOST'] . "<br>";
    echo "<br>";


