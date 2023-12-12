<?php

    //Iremos criar uma class cachorro com o método construtor, após isso faremos instanciação de um objeto a essa classe ja declarando 
    //as propriedades na chamada desse método 

    class Cachorro {

        public $raca;
        public $orelhas;
        public $pelo;
        public $cor;

        function __construct($raca, $orelhas, $pelo, $cor)
        {
            $this->raca = $raca;
            $this->orelhas = $orelhas;
            $this->pelo = $pelo;
            $this->cor = $cor;

        }

    }

    $LillyMaria = new Cachorro("Vira Lata", "caídas", "curto", "preta");

    echo "-----Lilly Maria-----<br>";
    echo "Raça: " . $LillyMaria->raca . "<br>";
    echo "Orelhas: " . $LillyMaria->orelhas . "<br>";
    echo "Pelo: " . $LillyMaria->pelo . "<br>";
    echo "Cor: " . $LillyMaria->cor . "<br>";

    $nanni = new Cachorro("Cocker", "Caídas", "Médio", "Marrom"); 

    echo "-----Nanni-----<br>";
    echo "Raça: ". $nanni->raca . "<br>";
    echo "Orelhas: " . $nanni->orelhas . "<br>";
    echo "Pelo: " . $nanni->pelo . "<br>";
    echo "Cor: " . $nanni->cor . "<br>";