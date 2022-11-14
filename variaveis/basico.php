<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
$numeroA = 1.3 + 13;
if($numeroA == 13);
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
EcHo $somaDosNumeros; // variáveis são case sensitive

echo '<br>';
echo isset($somaDosNumeros);   

unset($somaDosNumeros);   
echo '<br>';
echo !isset($somaDosNumeros);   
echo '<br>';
var_dump($somaDosNumeros);   

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

// Nomes de variável
$var = 'válida';
$var = 'válida';
$VAR3 = 'válida';
$_var_4 = 'válida';
$vâr5 = 'válida'; // evitar acentos !
// $6var = 'ivválida'; 
// $%var7 = 'ivválida'; 
// $var8% = 'ivválida'; 

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]); 