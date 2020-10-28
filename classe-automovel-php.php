<?php
// É uma classe

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo { // AS linhas abaixo preparam o acesso de acordo com as regras da "interface"
    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }
    public function frenar($velocidade)
    {
        echo "O veículo frenou em " . $velocidade . " km/h";
    }
    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha " . $marcha;
    }
}

?>