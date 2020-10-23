<?php
// Converte dados de Json para Arrays
$json = '[{"nome":"Jo\u00e3o Candido","idade":"58"},{"nome":"Mirian Candido","idade":"55"},{"nome":"Daniela Candido","idade":"22"}]';

$data = json_decode($json, true);

var_dump($data);

?>
