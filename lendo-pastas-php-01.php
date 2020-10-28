<?php
// Lendo e manipulando pastas/diretórios com PHP 7

$name = "cenel";

if (!is_dir($name)) {
    mkdir($name);
    echo "Diretório $name criado com sucesso";
 } else {
    rmdir($name);
    echo "Diretório $name já existe";
}

?>
