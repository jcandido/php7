<?php
// Funções

function ola() {
    echo "Olá mundo com echo ==> ";
}

ola();

// Ou dessa outra maneira abaixo
echo "<br>" ;

function ola1() {
    return "Olá mundo com return ==> ";
}

echo ola1();

$frase = ola1();

echo strlen($frase); // Conta e exibe a quantidade de caracteres dentro de "ola1"

?>
