<!--
    Para criar uma variável estática, usamos a palavra reservada static.
    A variável estática só é inicializada uma vez, e o valor dela é mantido entre as chamadas da função.
-->

<?php

function teste()
{
    $a = 0;
    $a++;

    echo "$a <br>";
}


teste();
teste();
teste();

//Note que o valor imprimido na tela é sempre 1, porque a varíavel comum é sempre restaurada ao seu valor original
//após o término da função;

function teste2()
{
    static $a = 0;
    $a++;

    echo "$a <br>";
}

echo "<br>";

teste2();
teste2();
teste2();

//Agora podemos notar que a função teste2 imprime na tela 1,2,3. Isso acontece porque uma variável declarada como static
//tem seu valor final mantido após o término da função.
?>