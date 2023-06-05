<?php

class Dog
{
    public $nome;

    function escolherNome($nome)
    {
        $this->nome = $nome;
    }

    function latir()
    {
        return "Au au <br>";
    }

    function latirForte()
    {
        return strtoupper($this->latir());
    }
}

$tobi = new Dog;

$tobi->escolherNome("Tobi");
echo $tobi->latir();
echo $tobi->latirForte();