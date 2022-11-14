<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>';
var_dump(1 + 2.5) . '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // divide e arredonda p/ o inteiro =1.75 foi p/ 1  
echo round(7 / 4), '<br>'; // arredonda p/ o + próximo = 1.75 foi p/ 2
echo 7 % 4, '<br>'; // resto da divisão sobrando 3
echo 7 % 2, '<br>'; // se for ímpar o resultado é 1
echo 8 % 2, '<br>'; // se for par o resultado é 0
echo 7 / 0, '<br>'; // resultado é INF >> infinito
// echo intdiv(7, 0), '<br>'; # erro!
echo 4 ** 2, '<br>';

//Precedência de operadores
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;