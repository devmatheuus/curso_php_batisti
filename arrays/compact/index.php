<!-- 
    Com a função compact podemos criar um array associativo a partir de variáveis;
    Passamos para a função o nome das variáveis em string;
    E então um novo array é criado, podendo ser atribuído para uma variável.
-->

<?php

$marca = "BMW";
$motor = "3.0";
$portas = 4;


$carro = compact("marca", "motor", "portas");

print_r($carro);
?>