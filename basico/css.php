<div class="titulo">Integraçao CSS</div>

<h1 center > 
<!-- <h1 center>  foi utilizado o seletor [center] -->
<?php
echo 'Olá';
echo '<small>';
echo ' Mundo';
echo '<small>';
?>
</h1>

<?="<div center azul>Outra forma de expressar sem precisar usar o 'echo'!</div>"?> <!--seletor [center][azul] -->
<br>

<div center><button dobro><?="php na tag html"?></button></div>
<!-- [center]div [dobro]button-->

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
        /* [dobro]; */
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    /* <?="[azul]"?> {
        color: #4286f4;
    } */
    
    [dobro] {
        font-size: 2rem;
    }

</style>