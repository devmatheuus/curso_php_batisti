<!-- 
    Com a função extract podemos criar variáveis rapidamente de arrays associativos;
    O nome da chave será o nome da variável;
    Se houver uma variável já criada com o nome da chave, a mesma será sobrescrita
-->

<?php

$myArray = [
    "nome" => "João",
    "idade" => 20,
    "profissao" => "Programador"
];

extract($myArray);

echo $nome;
echo $idade;

?>