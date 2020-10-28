<?php
// Usando Namespace. Exemplo 01

spl_autoload_register(function($nameClass) {
    $dirClass = "class";
//    $filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClass . ".php";
    $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");
    if (file_exists($filename)) {
        require_once($filename);
    }
});

?>
