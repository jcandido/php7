<?php

require_once("config.php");

$cad =new Cadastro();

$cad->setNome("João Candido");
$cad->setEmail("jcandido.filho@gmail.com");
$cad->setSenha("123456");

echo $cad;

?>
