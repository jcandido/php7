<?php
// Imprime na tela o novo ID de sessão. Quando executado sempre vai gerar um novo ID de sessão

require_once("session-php-03-config.php");

session_regenerate_id(); // Cria um novo ID de sessão

echo session_id();

var_dump($_SESSION);

?>
