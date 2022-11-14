<div class="titulo">constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS . '!'; // $TAXA_DE_JUROS não usa $
// TAXA_DE_JUROS = 2.5; não funciona também

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
//define('NOVISSIMA_TAXA', $valorVariavel); 'define'pode usar $variavel e valores literais 
//const NOVISSIMA_TAXA, $valorVariavel;'const' só funciona com valores literais
const NOVISSIMA_TAXA = 2.8 + 1.2; // só funciona com valores literais
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION; // 8.1.2
echo '<br>' . PHP_INT_MAX;

echo '<br> . Linha:' . __LINE__ ;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;
