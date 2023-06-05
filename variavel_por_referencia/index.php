<!-- 
    Para criar uma variável que referência outra, usamos o operdaor =& 

    Lembre-se que, qualquer alteração em qualquer uma das variáveis vai refletir na outra,
    pois ambas apontam para o mesmo espaço na memória.
-->
<?php

$x = 10;

$y = &$x;

echo $x;
echo "<br>";

echo $y;
echo "<br>";

$y = 20;

echo $x;
echo "<br>";

echo $y;
echo "<br>";


?>