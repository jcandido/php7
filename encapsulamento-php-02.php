<?php
// Encapsulamento. Exemplo 02

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

class Programador extends Pessoa {
    public function verDados() {
        echo get_class($this); // Mostra e confirma que esta é a classe que está sendo exibida
        
        echo "Nome: ";  // Eu acrescentei esta linha
        echo $this->nome . "<br/>" . "Idade: "; // Eu concatenei a string Idade
        echo $this->idade . "<br/>" . "Senha: "; // Eu concatenei a string Senha
        echo $this->senha . "<br/>";
    }
}

$objeto = new Programador();

//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//echo $objeto->senha . "<br/>";

$objeto->verDados();

?>
