<!-- 
    Crie uma classe Humano com algumas propriedades e o método falar;
    Crie outra classe Professor que herda de humano, crie também as propriedades e métodos particulares desta classe;
    Exiba os valores das propriedades da classe pai e também utilize os métodos
 -->

<?php
class Humano
{
    public $nome;
    public $idade;
    public $sexo;

    public function falar()
    {
        echo "Olá";
    }
}

class Professor extends Humano
{
    private $salario = "R$ 2.500,00";
    private $disciplina = "Matemática";

    public function recuperarInfo()
    {
        echo "
            Nome: " . $this->nome . "<br>
            Idade: " . $this->idade . "<br>
            Sexo: " . $this->sexo . "<br>
            Salário: " . $this->salario . "<br>
            Disciplina: " . $this->disciplina . "<br>";
    }
}

$professor = new Professor();

$professor->nome = "João";
$professor->idade = 30;
$professor->sexo = "Masculino";

$professor->recuperarInfo();
?>