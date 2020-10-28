<?php
// Classes com autoload. Exemplo 01

//function spl_autoload_register($nomeClasse) {
function __autoload($nomeClasse) {
//    var_dump($nomeClasse);
    require_once("$nomeClasse.php");
}
$carro = new Delrey();
$carro->acelerar(80);

?>
