<div class="titulo">If Else</div>

<?php
if ("")
    echo "Serei impresso<br>"; // ("") false não imprime
if (" ")
    echo "Serei impresso<br>"; // (" ") true imprime
if(0)
    echo "Serei impresso<br>"; // (0) false não imprime
if (0000000000.1)
    echo "Serei impresso<br>"; // (000.1) true imprime

if(false){
    echo "Verdadeiro - parte A<br>";
    echo "Verdadeiro - parte B<br>";
} else{
    echo "Falso - parte B<br>";
    echo "Falso - parte B<br>";
}

if(false){
    echo "Passo A<br>";
} elseif (false){
    echo "Passo B<br>";
} elseif (true){
    echo "Passo C<br>";
} elseif (false){
    echo "Passo D<br>";
} elseif (false){
    echo "Passo E<br>";
} else{
    echo "Último Passo E<br>";
}

echo "Fim<br>";
