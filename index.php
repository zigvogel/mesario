<?php
// abre o arquivo csv para leitura
$arquivo = fopen("partidos.csv");

// laco derepeticao
while ( $linha = fgetcsv($arquivo, 1000, ",") ) {
   // tratamento para mostrar apenas os dados reais
    if( $linha[0] != 'cod') {
    in_array(".$linha[0]." ',' ".$linha[1]."',' "$linha[2]."',' "$linha[3]." ',' ".$linha[4]." ',' ".$linha[5]." ","); <br>;
    echo '<pre>';
    print_r($linha);
    echo '</pre>';
   }
}


// fecha o arquivo da leitura
fclose($arquivo);
?>