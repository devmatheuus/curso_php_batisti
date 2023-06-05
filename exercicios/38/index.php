<!--
    Crie uma função que recebe um array de itens de supermercado;
    Retorne este array em forma de string, separado em vírgulas
-->

<?php

function listaDeCompras($array)
{
    if (!is_array($array)) {
        return "Envie um array de itens";
    }

    return implode(", ", $array);
}

function listaParaString($lista)
{
    $str = "Você levou esses itens do mercado: ";

    for ($i = 0; $i < count($lista); $i++) {
        if ($i + 1 === count($lista)) {
            $str .= $lista[$i] . ".";
        } else {
            $str .= $lista[$i] . ", ";
        }
    }

    return $str;
}

$lista = ["banana", "maçã", "laranja"];

// echo listaDeCompras($lista);
echo listaParaString($lista);