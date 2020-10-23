<?php
// Converte dados de Array para Json
header('Content-Type: text/html; charset=utf-8'); // Trata caracteres de acentuação

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João Candido',
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

echo json_encode($pessoas);

?>