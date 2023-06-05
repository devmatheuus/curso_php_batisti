<!-- 
    Crie uma função que recebe características de algum objeto como argumento (carro, sofá, cafeteira) em array associativo;
    O array deve conter nome => preço;
    Retorne apenas os itens que custam mais que $$ 10,00;
    Imprima o retorno. 
-->

<?php

function itensMaisCarosQueDezReais($itens)
{
    $res = [];

    foreach ($itens as $item) {
        if ($item > 10) {
            array_push($res, $item);
        }
    }

    return $res;
}

$itens = ["cadeira" => 1500, "sofa" => 2000, "pirulito" => 2, "tomada" => 9];

$res = itensMaisCarosQueDezReais($itens);
print_r($res);

?>