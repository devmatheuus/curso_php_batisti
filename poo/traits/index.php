<!-- 
    As traits permitem o reuso do código sem hierarquia de classes, ou seja, sem herança;
    Podemos assim utilizar os métodos da classe que foi feita a trait;
    Utilizamos a palavra reservada use;

    Exemplo:
        use \App\Traits\TraitA;

        
        class ClasseA
        {
            use TraitA;
        }
-->

<?php

trait Objeto
{
    public function teste()
    {
        echo "Testando trait de objeto <br>";
    }
}

trait Testando
{
    public function testeTrait()
    {
        echo "Este método é da classe testeTrait <br>";
    }
}

class Central
{
    use Objeto;
    use Testando;
}

$x = new Central();

$x->teste();
$x->testeTrait();
?>