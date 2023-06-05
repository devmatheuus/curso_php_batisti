<?php
function soma($a, $b)
{

    print_r(func_get_args()); // retorna uma lista contendo os argumentos passados para a função
    print_r(func_num_args()); // retorna o número de argumentos da função

    return $a + $b;
}