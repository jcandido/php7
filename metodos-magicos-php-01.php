<?php
// Métodos Mágicos

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) { // Isso é um "Construtor
                                              // Os nomes dos parâmetros passados aqui pode ser diferente das variaveis "private"
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }
    public function __destruct() { // Destroi ou limpa os dados do construtor "$meuEndereco"
    //    var_dump("DESTRUIR"); 
    }
    public function __toString() { // Este é um método
        return $this->logradouro. ", " .$this->numero. " - " .$this->cidade;
    }
}

$meuEndereco = new Endereco("Rua Rio Solimões", "267", "Pinhais");
//var_dump($meuEndereco);

//unset($meuEndereco);

echo $meuEndereco;
?>
