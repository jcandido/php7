<?php
// Herança. Exemplo 01

class Documento {
    private $numero;

    public function getNumero() {
        return $this->numero;
    }
    public function setNumero($num)
    {
        $this->numero = $num;
    }
}

class CPF extends Documento { // "extends" serve herdar uma classe
    public function validar():bool
    {
        $numeroCPF = $this->getNumero();
        return true;
    }
}

$doc = new CPF();
$doc->setNumero("111222333-44");
var_dump($doc->validar());
echo "<br/>";
echo $doc->getNumero();

?>
