<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true 
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo "<p>Relacionais no If/Else</p><hr>";
$idade = 15;
if ($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos<br>";
};    

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);


echo '<p class="divisao">Valores pode ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>

<style>
p {
    margin-bottom<?php
echo pi();
$pi = 3.14;

if($pi === pi()) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

// Operador Relacional
$piErrado = 2.8;

// Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if($pi - pi() <= 0.01) {
    echo '<br>Praticamente iguais!';
}

if($pi - $piErrado <= 0.01) {
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor errado!!';
}: 0px;
}

hr {
    margin-top: 0px;
}

</style>