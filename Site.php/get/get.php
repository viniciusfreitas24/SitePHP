<div class="titulo">Método Get</div>

<?php


/*$preco = $_GET['p'];
$nome = $_GET['n'];

echo "O preço do produto é $preco";
echo "<br>O nome digitado foi : Vinicius";*/

$C = $_GET['C'];

$F = ($C * 9/5) + 32;

echo "A temperatura em Fahrenheit é $F";    

$F = $_GET['F'];
$C = ($F - 32) * 5/9;

echo "<br>A temperatura em Celsius é $C";














?>