<?php
// Exibe alguns números randômicamente entre 1 e 10 e exibe a string TRÊS!!!
$condicao = true;
while ($condicao) {
    $numero = rand(1, 10);
    if ($numero === 3) {
        echo "TRÊS!!! ";
        $condicao = false;
    }
    echo $numero . " ";
}
