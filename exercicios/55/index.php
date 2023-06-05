<!-- 
    Crie uma classe Carro;
    Crie algumas propriedades e também a propriedade velocidade_maxima;
    Crie um método setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro;
    E também getVelocidadeMaxima onde é possível imprimir a velocidade do carro.
-->

<?php
class Carro
{
    public $cor;
    public $ano;
    public $velocidade_maxima;

    public const NUMERO_DE_RODAS = 4;

    function __construct($cor, $ano)
    {
        $this->cor = $cor;
        $this->ano = $ano;
    }

    function setVelocidadeMaxima($velocidade)
    {
        $this->velocidade_maxima = $velocidade;
    }

    function getVelocidadeMaxima()
    {
        echo "A velocidade máxima do carro é {$this->velocidade_maxima}km/h <br>";
    }

    function mostrarConstante()
    {
        echo self::NUMERO_DE_RODAS . "<br>";
    }
}

$carro1 = new Carro("Azul", 2020);

$carro1->setVelocidadeMaxima(200);
$carro1->getVelocidadeMaxima();
echo $carro1->cor . "<br>";
echo $carro1->ano . "<br>";
echo $carro1->mostrarConstante();
?>