<!-- 
    A função array_reduce tem como objetivo reduzir um array a apenas um valor;
    Podemos passar uma segunda função como parâmetro, para algum processo ser executado;

    array_reduce($arr, $funcao)
-->

<?php

$arr = [1, 2, 3, 4, 5];

function soma($a, $b)
{
    return $a + $b;
}

$resultado = array_reduce($arr, "soma");

echo $resultado;