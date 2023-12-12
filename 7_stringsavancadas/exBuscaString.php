<?php   
    //Exercício de busca de string que 
    $frase = "Cadê o meu queijo? Ele estava aqui em cima.";

    $busca = substr($frase,11,7);//Ele pega o índice no caracter onze e vai até 7 caracteres depois

    echo $busca;

    //Irá apresentar apenas queijo