<div class="titulo">Variáveis Variáveis</div>

<?php

$a = 'valorA'; 
$$a = 'valorAA'; 
echo "$a {$$a} ${$a} $valorA" . "<br>";

$epa = 'opa'; 
$opa = 'vish'; 
$vish = 'eita!!!'; 
echo "$epa {$$epa} {$$$epa} <br>";

$a = 'carro1'; 
$carro1 = 'carro2'; 
$carro2 = 'carro3'; 
echo "$a {$$a} {$$$a} <br>";