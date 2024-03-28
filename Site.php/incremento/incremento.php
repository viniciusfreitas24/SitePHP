<div class="titulo">Desafio Incremento</div>

<?php

$preco = 100;

echo "O preço do produto é R$: $preco <br>";

$preco = $preco - ($preco*10/100);
//$preco -= ($preco*10/100);     Ele da o desconto normalmente
//$preco += ($preco*10/100);     Ele aumenta o valor com juros
//$preco *= ($preco*10/100);     Ele multiplica o valor 
//$preco /= ($preco*10/100);     Ele dividi o valor 

echo "O novo preço com 10% de desconto será R$: $preco";



?>