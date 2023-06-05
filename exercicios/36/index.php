<!-- 
    Crie uma função que recebe apenas um array de números;
    Crie um novo array com apenas os números que são maiores que 7;
    Retorne este novo array e imprima na tela.
-->

<?php
function maioresQueSete($array)
{
    $resultado = [];

    if (!is_array($array)) {
        return "Envie um array de números inteiros";
    }

    foreach ($array as $num) {
        if (!is_integer($num)) {
            return "O array deve conter apenas números inteiros";
        }

        if ($num > 7) {
            array_push($resultado, $num);
        }
    }

    return $resultado;
}


$array = 1;

$resultado = maioresQueSete($array);

print_r($resultado);
?>