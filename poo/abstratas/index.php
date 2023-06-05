<!-- 
    As classes abstratas não podem ser instanciadas;
    Podemos ter métodos abstratos, que devem ser implementados obrigatoriamente se uma classe herdar a abstrata;
    A palavra reservada tanto para classes como para métodos é abstract;

    Exemplo:

    abstract class ClasseAbstrata
    {
        abstract public function metodoAbstrato();
    }
 -->

<?php

abstract class Teste
{
    // abstract public function metodoAbstrato();

    public static function testandoClasse()
    {
        echo "Este método é de uma classe abstrata <br>";
    }

    abstract public function testeAbstract();
    // A classe que herdar dessa classe, deverá obrigatoriamente implementar o método abstrato.
}

class Testando extends Teste
{
    public function testeAbstract()
    {
        echo "Este método é obrigatório <br>";
    }
}

// $x = new Teste; // Note que é gerado um erro, pois classes abstratas não podem ser instanciadas

Teste::testandoClasse(); // Note que podemos chamar o método direto da classe, porém o método deve ser static

$x = new Testando;
$x->testeAbstract();