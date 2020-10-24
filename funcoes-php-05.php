<?php
// Funções

$a = 10;

function trocaValor(&$b) { // "$b" é um parâmetro da função trocaValor. 
                           // O "&" é PASSAGEM DE PARÂMETRO POR REFERÊNCIA
    $b += 50;
    return $b;

}
echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";

echo $a; // "$a" é apenas uma variável

?>