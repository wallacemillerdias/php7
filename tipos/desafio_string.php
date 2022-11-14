<div class="titulo">Desafio String</div>

<?php

// Enunciado:
//Avaliando os métodos da documentação da string,
// qual o método que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1?
echo strpos('!AbcaBcabc', 'abc') . '<br>';//diferencia letras grandes
echo stripos('!AbcaBcabc', 'abc') . '<br>';// Ao contrário de strpos() , stripos() não diferencia maiúsculas de minúsculas.

echo stripos(strtolower('!AbcaBcabc'), 'abc') . '<br>';
echo stripos(strtolower('!AbcaBcabc'), strtolower('ABC')) ;
