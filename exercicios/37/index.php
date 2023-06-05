<!-- 
    Crie uma função chamada defineCorCarro;
    Onde há uma parâmetro chamado cor, com valor default de vermelho;
    Retorne a cor do carro;
    Imprima o retorno tanto com o parâmetro default, como também definindo a cor.
-->

<?php
function defineCorCarro($cor = "vermelho")
{
    return $cor;
}

echo defineCorCarro() . "<br>";
echo defineCorCarro("azul") . "<br>";
?>