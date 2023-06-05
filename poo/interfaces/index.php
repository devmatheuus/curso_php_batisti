<!-- 
    As interfaces criam um modelo de definição de uma classe;
    Então toda classe que implementar uma interface, deverá implementar também suas propriedades e métodos, obrigatoriamente;
    A palavra reservada é implements;

    Exemplo:

    class Humano implements Caracteristicas
    {
        // código
    }
-->

<?php

interface Caracteristicas
{
    public function falar();
    const nome = "Matheus";
}

class Humano implements Caracteristicas
{
    public function falar()
    {
        echo "Olá, eu sou um humano";
    }

    public function recuperarNome()
    {
        echo self::nome;
    }
}

$humano = new Humano();

$humano->falar();
echo "<br>";
$humano->recuperarNome();
?>