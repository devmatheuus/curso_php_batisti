<!-- 
    Crie uma classe Cachorro;
    Crie o método latir e andar;
    Execute o método em novas instâncias da classe
-->

<?php
class Cachorro
{
    function latir()
    {
        echo "Au Au!";
    }

    function andar($metros)
    {
        echo "O cachorro andou {$metros}m <br>";
    }
}

$tobi = new Cachorro;
$flash = new Cachorro;

$tobi->andar(5);
$flash->andar(52);
?>