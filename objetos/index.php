<?php

class Pessoa
{
    function falar()
    {
        echo "Oi";
    }
}

$matheus = new Pessoa();

//Criando uma prop nome para o objeto $matheus;
$matheus->nome = "Matheus";

echo $matheus->nome;
