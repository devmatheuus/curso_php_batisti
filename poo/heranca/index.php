<?php

class Humano
{
    public $idade = 20;

    public function falar()
    {
        echo "Olá mundo! <br>";
    }
}

class Programador extends Humano
{
    public function programar()
    {
        echo "Estou programando <br>";
    }
}

$humano = new Humano();
$humano->falar();

$programador = new Programador();
$programador->falar();
$programador->programar();