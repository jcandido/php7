<?php
// Funções

function ola($texto = "Mundo", $periodo = "Bom dia") {
    return "Olá $texto! $periodo! <br>";
}
echo ola();
echo ola("Mundo","Boa noite");
echo ola("JCandio","Boa tarde");
echo ola("Miran Candido","");

// Ou desse outro jeito abaixo
function ola1($texto, $periodo = "Bom dia") {
    return "Olá $texto! $periodo! <br>";
}
echo ola1("Mundo");
echo ola1("","Boa noite");
echo ola1("JCandio","Boa tarde");
echo ola1("Miran Candido","");

?>
