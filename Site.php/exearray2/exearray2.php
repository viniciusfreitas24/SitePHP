<div class="titulo">Exercício Array 2</div>

Crie um array com as seguintes características de uma pessoa:
nome, idade, profissão, graduação.
checando se ela é maior de idade e imprima
a mensagem informando.



<?php

$pessoa = array(

    "nome" => "Vinicius",
    "idade" => 30,
    "profissao" => "Programador",
    "graduacao" => "Análise e Desenvolvivento de Sistemas"
    



);

echo '<br>';
echo '<br>';
print_r($pessoa);


echo "<br>";
echo "<br>";

if ($pessoa['idade'] >= 18) {
    echo $pessoa['nome'] . " é maior de idade :)";
}
else {
    echo $pessoa['nome'] . " é menor de idade :(";
}



?>