<!-- 
                                         Visibilidade

    É a forma como o PHP coordena quem e como vai poder alterar uma propriedade ou utilizar um método;

    public (default): a propriedade ou método pode ser acessada de qualquer forma.
    protected: a propriedade ou método pode ser acessada apenas pela classe que a criou ou por classes que herdam dela.
    private: a propriedade ou método pode ser acessada apenas pela classe que a criou.
-->

<?php
class Car
{
    public $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    public function vidroDeFabrica($pelicula)
    {
        $this->vidro = $pelicula;
    }

    public function getVidro()
    {
        return $this->vidro;
    }
}

class Mecanico
{
    public function alterarRodas(Car $car)
    {
        $car->rodas = 10;
    }

    public function alterarVidro(Car $car)
    {
        // $car->vidro = "Com película";

        // Note que é gerado um erro, já que a propriedade private só é acessível dentro
        // da classe que a criou.
    }
}


$car = new Car();
echo $car->rodas . "<br>";

$mecanico = new Mecanico();
$mecanico->alterarRodas($car);
echo $car->rodas . "<br>";

// Note que foi possível alterar uma propriedade da classe Car a partir de um método da classe Mecanico.
// Podemos notar que o tipo de visibilidade public não infere nenhuma restrição.

// $car->vidroDeFabrica("G10");
echo $car->getVidro() . "<br>";

// echo $car->portas  . "<br>"; Note que a prop "portas" não pode ser acessada porque é do tipo protected 