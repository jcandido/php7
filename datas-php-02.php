<?php
// Função Date em PHP

$timestamp = strtotime("2020-10-23");
$dataAgora = strtotime("2020-10-23");
$dataMaisUmDia = strtotime("2020-10-23");
$dataMaisUmaSemana = strtotime("2020-10-23");

$timestamp = strtotime("now"); // Pega a data atual
echo "<br> ";
$dataAgora = strtotime("now"); // Pega a data atual
echo "<br> ";
$dataMaisUmDia = strtotime("+1 day"); // Pega a data atual +1 dia
echo "<br> ";
$dataMaisUmaSemana = strtotime("+1 week"); // Pega a data atual +1 semana

echo date("l, d/m/Y", $timestamp);
echo date("l, d/m/Y", $dataAgora);
echo date("l, d/m/Y", $dataMaisUmDia);
echo date("l, d/m/Y", $dataMaisUmaSemana);

?>
