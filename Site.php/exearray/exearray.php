<div class="titulo">Exercício Array</div>




Crie um array com as características de um carro, sendo elas:
marca é BMW, total de rodas é 4, com teto solar, atinge velocidade 
maxima de 300 e não é blindado.
Imprima duas dessas características.







<?php

$carro = array(

    "marca" => "BMW",
    "rodas" => 4,
    "teto solar" => true,
    "velocidadeM" => 300,
    "blindagem" => false




);



echo '<br>';
echo '<br>';
print_r($carro);
echo '<br>';
echo $carro["marca"];
echo '<br>';
echo $carro["velocidadeM"];








?>