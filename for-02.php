<?php
// Cria um combo com o ano atual(2020) até ano menor ou igual com menos 100. Data de Hoje 22/10/2020 ano decresceu até 1920
    echo "<select>";
    for ($i=date("Y"); $i >= date("Y") - 100; $i--){
        echo '<option value="' .$i.' ">' .$i. '</option>';
    }
    echo "</select>";

?>
