<!-- 
    Por padrão, variáveis no escopo global não podem ser acessadas no escopo local, como em funções, por exemplo.
    Para acessar uma variável global dentro de uma função, usamos a palavra reservada global. 
-->

<?php

$x = 10;

function trocaValor()
{
    global $x;
    $x = 20;
}

echo $x; // 10
echo "<br>";

trocaValor(); // Alterando o valor da variável global para 20
echo $x; //20
echo "<br>";


// Outra forma de acessar uma variável global dentro de uma função é usando a variável superglobal $GLOBALS
function trocaValor2()
{
    $GLOBALS['x'] = 30;
}

echo $x; // 20
echo "<br>";

trocaValor2(); // Alterando o valor da variável global para 30
echo $x; //30
echo "<br>";