<?php


interface Message {

    public function mensagem();
}

class Humano implements Message {

   public function mensagem(){
        return "A pessoa passa a mensagem adiante.";
   }

}

$Pessoa = new Humano ;


echo $Pessoa->mensagem();