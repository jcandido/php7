<?php
// Classes

class Pessoa { // Pessoa é o nome da Classe
    public $nome; // Atributo
    public function falar() { // Método de acesso
        return "O meu nome é ".$this->nome;        
    }
}

$jcandido = new Pessoa();
$jcandido->nome = "João Candido";
echo $jcandido->falar();

?>
