<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

// float para int
echo '<p>Float para int</p>';
var_dump((int)6.9); // int(6)
echo '<br>';
var_dump(intval(2.8)); // int(6)
echo '<br>';
var_dump(round(2.8)); // float(3)
var_dump((int)round(2.8)); // int(3)
echo '<br>';
var_dump((int) round(2.8, 10)); // ñ precisa da base 10 pois é padrão
echo '<br>';
var_dump(intval('11010101101', 2)); // int(1709) 
echo '<br>';

// operações com string
echo '<p>String</p>';
var_dump(3 + "2"); // int(5)
echo '<br>';
var_dump("3" + 2); // int(5)
echo '<br>';
var_dump("3" . 2); // string(2) "32"
echo '<br>', is_string("3" + 2); // (espaço branco)ñ é string 
echo '<br>', is_int("3" + 2); // 1 (pq é int)
echo '<br>', is_string("3". 2); // 1 (pq é string)
var_dump(1 + "cinco"); // int(1)
echo '<br>';
var_dump(111 + "5cinco"); // int(116) somou 111 + 5
echo '<br>';
var_dump(1 + "5 cinco"); // int(6) somou 1 + 5
echo '<br>';
var_dump(1 + "cinco 5"); //  int(1) pegou o 1° number e ignorou o final
echo '<br>';
var_dump(""); // string(0) ""
echo '<br>';
var_dump(1 + "2 . 5"); // pegou o 1° number e ignorou o final
echo '<br>';
var_dump(1 + "3.2"); // float (4.2)
echo '<br>';
var_dump(1 + "2+5"); // pegou o 1° number e depois do + ignorou o final
echo '<br>';
var_dump(1 + "25"); // int((26)
echo '<br>';
var_dump(1 + "-3.2e2"); 
echo '<br>';
var_dump((int)"10.5"); // int(10) converte p/ int
echo '<br>';
var_dump((float)"10.5"); // float(10.5) continua float 10.5
echo '<br>';
var_dump((float)"10.5"); // float(10.5) continua float 10.5
