<?php
// Mostra números de 0 a 899 desconsiderando os números entre 200 e 800
for ($i = 0; $i < 1000; $i++){

    if ($i > 200 && $i < 800) continue;
    if ($i === 900) break;
    //    echo $i;
    echo $i . " --> ";
    
}
?>
