<?php
// Atributos e Métodos

class Carro { // Carro é uma classe
    private $modelo; // Método
    private $motor;  // Método
    private $ano;    // Método

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function getMotor():float { // Transforma "$motor" em tipo de dado "float" (flutuante)
        return $this->motor;
    }
    public function setMotor($motor) {
        $this->motor = $motor;
    }
    public function getAno():int { // Transforma "$ano" em tipo de dado "int" (inteiro)
        return $this->ano;
    }
    public function setAno($ano) {
        $this->ano = $ano;
    }
    public function exibir() {
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

//print_r($gol->exibir());
var_dump($gol->exibir());

?>
