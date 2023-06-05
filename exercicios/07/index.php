<!--
    Crie um arquivo php; 
    Crie um array associativo com características de uma pessoa;
    Desafio: faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja
-->

<?php

$pessoa = [
    "idade" => 20,
    "nome" => "Matheus",
    "nacionalidade" => "Brasileiro",
];

if ($pessoa["idade"] >= 18) {
    echo $pessoa["nome"] .  " é maior de idade!";
    echo "<br>";
}
