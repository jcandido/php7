<?php
$pessoas = array();

array_push($pessoas, array(
    'nome' => 'JCandido',
    'idade' => '58'
));

array_push($pessoas, array(
    'nome' => 'Mirian Candido',
    'idade' => '55'
));

array_push($pessoas, array(
    'nome' => 'Daniela Candido',
    'idade' => '22'
));

print_r($pessoas [0]); // Imprime o conteúdo da Array
print_r($pessoas [0]['idade']); // Imprime a idade

?>