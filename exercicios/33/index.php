<!-- 
    Crie uma função;
    Ela deve receber um parâmetro de nome e idade;
    Imprima: "Olá, eu sou o NOME e tenho X anos!"
-->

<?php
function apresentacao($nome, $idade)
{
    if (is_string($nome) && is_integer($idade) && $idade >= 1) {
        echo "Olá, eu sou o $nome e tenho $idade anos!";
    } else {
        echo "Por favor, informe uma string válida para o nome e um número válido para a idade";
    }
}

apresentacao("Matheus", -20);
?>