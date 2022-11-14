<div class="titulo">Desafio Equaçao</div>
<?php
 
echo '<p>Minha resposta</p>';
$numA = 6 * (3 + 2); // 30
$denA = $numA ** 2; // 900
$resA = $denA / (3 * 2); // 150

$numB = (1 - 5) * (2 - 7); // 20
$denB = $numB / 2; // 10
$resB = $denB ** 2; // 100

$superior = ($resA - $resB) ** 3; // 125000

$result = $superior / (10 ** 3); // 125

echo '<br>'.$result;

echo '<p>resposta professor</p>';
$numA = (6 * (3 + 2)) ** 2; 
$denA = 3 * 2; 

$numB = (1 - 5) * (2 - 7);
$denB = 2; 

$superiorA = $numA / $denA; 
$superiorB = ($numB / $denB) ** 2; 

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;
echo "O resultado final é : " . $final . ".";

