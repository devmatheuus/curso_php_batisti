<!-- 
    Em PHP temos alguns métodos que nos ajudam a enteder as classes;

    get_class() - Retorna o nome da classe;
    get_class_methods() - Retorna um array com os métodos da classe;
    get_class_vars() - Retorna um array com as propriedades da classe;
    get_parent_class() - Retorna o nome da classe pai;
    is_subclass_of() - Verifica se um objeto é uma instância de uma classe;
    method_exists() - Verifica se um método existe;
    property_exists() - Verifica se uma propriedade existe;
    is_a() - Verifica se um objeto é uma instância de uma classe ou de uma classe que herda de outra classe;
-->

<?php

class Humano
{
    public $idade;
    public $nome;

    public function falar()
    {
        echo "Olá";
    }
}

if (class_exists("Humano")) {
    echo "A classe existe <br>";
}

print_r(get_class_vars("Humano"));
print_r(get_class_methods("Humano"));