<?php

    //Iremos fazer exercício usando o this 

    class Car {

        public $velocidade_maxima;
        public $cor;
        public $modelo;

        function setVelocidadeMaxima($velocidadeMax){
            $this->velocidade_maxima = $velocidadeMax;
        }

        function getVelocidadeMaxima($marcaCarro){
            echo "Velocidade Máxima definida para o $marcaCarro é " . $this->velocidade_maxima . " km/h <br>";
        }


    }

    $BMW = new Car;

    $BMW->cor = "Preta";

    echo "A cor da BMW é $BMW->cor <br>";
    $BMW->setVelocidadeMaxima(140);
    $BMW->getVelocidadeMaxima("BMW");

