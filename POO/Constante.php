<?php

    class Pessoa {

        public const olhos = 'Verdes';
        public const Bracos = 2;
        Public const ANOS = 55;

        function mostraConstante(){
            echo "Idade: " . self::ANOS . "<br>";
            echo "Número de Braços: " . self::Bracos . "<br>";
            echo "Olhos: " . self::olhos . "<br>";
        }

    }

    $André = new Pessoa; 

    $André::mostraConstante();