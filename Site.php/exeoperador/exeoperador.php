<div class="titulo"> Exercício Operadores </div>

<?php
/*$idade = 65;
$sexo = "Feminino";


if($idade >= 60 && $sexo == 'Masculino') {
    echo "Pode se aposentar --> $sexo";
} elseif ($idade >= 65 && $sexo == 'Feminino'){
    echo "Pode se aposentar --> $sexo";
} else {
    echo "Vai ter trabalhar por mais uns anos";
}



$idade = 65;
$sexo = 'M';
$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

echo "Pode se aposentar --> $podeSeAposentar <br>";*/


$idade = 70;
$status;

if($idade>=18){
    $status = 'Maior de Idade';
} else {
    $status = 'Menor de Idade';
}

echo "$status";

//operador ternário

$idade = 17;
$status = $idade >= 18 ? 'Maior de Idade' : 'Menor de Idade';

echo "$status";







?>