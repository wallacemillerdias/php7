<div class="titulo">Tipo tring</div>

<?php
 echo ('Eu sou uma String');
 echo '<br>';
 var_dump("Eu também");
 echo '<br>';
 
 // concatenação
 echo ("Nós também" . ' somos' . '<br>');
 echo ("Número é " . 123);
 echo '<br>', "Também aceito", " virgulas";

 echo '<br>';
 echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\'Teste\' " . "\\";
 
 print("<br>Também existe a função print");
 print'<br>Também existe a função print';
 
 // Algumas funções 
 echo '<br>' . strtoupper('maximixado'); //string to upper >> maximizar
 echo '<br>' . strtolower('MINIMIZADO'); //string to lower >> minimizar
 echo '<br>' . ucfirst('Só a primeira letra'); //uper case  >> 1° letras
 echo '<br>' . ucwords('Todas as palavras'); //uper case words  >> todas as 1°letras
 echo '<br>' . strlen('Quantas letras?');
//  echo '<br>' . mb_strlen("Eu também" "utf-8"); não funciona essa merda
echo '<br>' . substr('Só uma parte mesmo', 7, 6); //parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar a palavra isso');