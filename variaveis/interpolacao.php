<div class="titulo">Interpolação</div> 

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // ('') não interpola
echo "<br> $numero"; // ("") interpola

$texto = "A sua nota é: $numero." ;
echo "<br> $texto";

$objeto = 'caneta' ;
echo "<br>Eu tenho 5 $objeto"."s"; // Eu tenho 5 canetas
echo "<br>Eu tenho 5 $objeto s"; // Eu tenho 5 caneta s
echo "<br>Eu tenho 5 {$objeto}s."; // Eu tenho 5 canetas.
echo "<br>Eu tenho 5 { $objeto}s mas perdi 3 {$objeto }s"; // Eu tenho 5 { caneta}s mas perdi 3 canetas