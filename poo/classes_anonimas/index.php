<!-- 
    As classes anônimas são criadas em uma variável e não possuem nome;
    Elas funcionam como qualquer outra classe;
    Precisamos fechar ela com ";"

    Exemplo:

    $x = new class
    {
        public function teste()
        {
            echo "Testando";
        }
    };
 -->

<?php

$pessoa = new class()
{
    public $nome = "Matheus";

    public function exibirNome()
    {
        echo $this->nome;
    }
};

echo $pessoa->nome;
$pessoa->exibirNome();
?>