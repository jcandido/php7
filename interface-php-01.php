<?php
// Interface. Exemplo 01

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo { // AS linhas abaixo preparam o acesso de acordo com as regras da "interface"
    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até " . $velocidade . "km/h";
    }
    public function frenar($velocidade)
    {
        echo "O veículo frenou em " . $velocidade . "km/h";
    }
    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha " . $marcha;
    }
}

$carro = new Civic();
$carro->trocarMarcha(1);
//var_dump($carro);
echo $carro;

?>
