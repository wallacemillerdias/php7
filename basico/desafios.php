<div class="titulo">Desafio PHP</div>

<ul>
    <li>1 + 1 = <?= 1 + 1 ?></li>
    <li>4 + 4 = <?php echo 4 + 4 ?></li>
    <li>8 + 8 = <?php echo "1"?><?= 3 + 3; ?></li>
</ul>

<p>Resposta</p>

<?php
echo 1 + 1;
echo "<br>";
echo 4 + 4;
echo "<br>";
echo 8 + 8;
?>

<p><?= 1 + 1 . "<br>", 4 + 4 . "<br>", 8 + 8;?></p>
