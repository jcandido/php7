<?php
// Classe DateTime

$dt = new DateTime(); // Está a classe "DateTime"
$periodo = new DateInterval("P15D"); // Está usando a classe "DateInterval"

echo $dt -> format("d/m/Y H:i:s"); // Está usando o método "format"

$dt -> add($periodo);
echo "<br>";

echo $dt -> format("d/m/Y H:i:s"); // Está usando o método "format"

?>
