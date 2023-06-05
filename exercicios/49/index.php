<!-- 
    Crie variáveis com característica de algum objeto ou animal;
    Depois crie um array com compact com estas mesmas variáveis;
    Faça um loop no array e imprima os valores.
-->

<?php

$nome = "Matheus";
$idade = 20;
$altura = "1.90";

$pessoa = compact("nome", "idade", "altura");

foreach ($pessoa as $caracteristica => $info) {
    echo "$caracteristica: $info <br>";
}