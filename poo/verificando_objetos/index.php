<!-- 
    Em PHP temos alguns métodos que nos ajudam a entender melhor os objetos;

    is_object() - verifica se uma variável é um objeto;
    get_class() - verifica se a classe é um objeto;
    methos_exists() - verifica se o método existe em um objeto;
    property_exists() - verifica se a propriedade existe em um objeto;
    is_a() - verifica se um objeto é uma instância de uma classe ou de uma classe que herda de outra classe;
-->

<?php

class Humano
{
    public function falar()
    {
        echo "Olá <br>";
    }
}

$pessoa = new Humano();

if (is_object($pessoa)) {
    echo "É um objeto <br>";
}

echo get_class($pessoa) . "<br>";


if (method_exists($pessoa, "falar")) {
    echo "Método existe <br>";
}