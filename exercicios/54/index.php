<!-- 
    Crie uma classe Pessoa;
    Crie a propriedade nome e idade;
    E também um método andar;
-->

<?php
class Pessoa
{
    public $nome;
    public $idade;

    // function __construct($nome, $idade)
    // {
    //     $this->nome = $nome;
    //     $this->idade = $idade;
    // }

    function andar($metros)
    {
        echo "A pessoa andou {$metros}m <br>";
    }
}

// $maria = new Pessoa("Maria", 25);
// $matheus = new Pessoa("Matheus", 20);

$maria = new Pessoa;
$maria->nome = "maria";

echo $maria->nome . "<br>";
// echo $matheus->idade;
?>