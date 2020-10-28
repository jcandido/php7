<?php
// Encapsulamento. Exemplo 01

class Pessoa {
    public $nome = "Rasmus Lerdorf - criador do PHP";
    protected $idade = 58;
    private $senha = "123456";

    public function verDados() {
        echo "Nome: ";  // Eu acrescentei esta linha
        echo $this->nome . "<br/>" . "Idade: "; // Eu concatenei a string Idade
        echo $this->idade . "<br/>" . "Senha: "; // Eu concatenei a string Senha
        echo $this->senha . "<br/>";
    }
}

$objeto = new Pessoa();

//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//echo $objeto->senha . "<br/>";

$objeto->verDados();

?>

