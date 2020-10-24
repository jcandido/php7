<?php
// Função Date com setlocale (Para formatar em Portugues do Brasil)

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B"));

?>
