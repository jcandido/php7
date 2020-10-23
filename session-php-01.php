<?php
// Uso do comando "session_start" para iniciar uma sessão no PHP

require_once("session-php-03-config.php");

session_unset($_SESSION['nome']); // Limpa o conteúdo da variável de sessão

$_SESSION["nome"] = "Hcode";

?>
