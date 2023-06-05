<!-- 
    Crie uma classe Cachorro com propriedades;
    Inicie as propriedades via construtor;
    Crie um método para exibir cada uma das propriedades que você criou;
-->

<?php
class Cachorro
{
    public $_nome;
    public $_porte;

    function __construct($nome, $porte)
    {
        $this->_nome = $nome;
        $this->_porte = $porte;
    }

    public function exibirNome()
    {
        echo $this->_nome;
    }

    public function exibirPorte()
    {
        echo $this->_porte;
    }
}

$dog = new Cachorro("Rex", "Grande");

$dog->exibirNome();
$dog->exibirPorte();
?>