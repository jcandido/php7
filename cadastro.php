<?php
// Usando Namespace. Exemplo 02

class Cadastro {
    private $nome;
    private $email;
    private $senha;

    public function getNome():string
    {
        return $this->nome;
    }
    public function getEmail():string
    {
        return $this->email;
    }
    public function getSenha():string
    {
        return $this->senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setEmail($email) {
        $this->nome = $email;
    }
    public function setSenha($senha) {
        $this->nome = $senha;
    }

    public function __toString()
    {
        return json_encode(array(
            "nome"=>$this->getNome(),
            "emails"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));

        }
    }
}

?>
