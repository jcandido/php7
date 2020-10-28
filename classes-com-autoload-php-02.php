<?php
// Classes com autoload. Exemplo 02

function incluirClasses($nomeClasse) {
    if (file_exists($nomeClasse.".php") === true) {
        require_once($nomeClasse.".php");
    }
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse) {
    if (file_exists("/home/jcandido/php7" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
        require_once("/home/jcandido/php7" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }
});

$carro = new Delrey();
$carro->acelerar(80);

?>
