<div class = "titulo">Tintas</div> 

<?php

if(isset($_GET['a']))

    $area = $_GET['a'];

    $litrosTinta = $area / 3;
       
    $latasTinta = ceil($litrosTinta / 18);
    
    $precoTotal = $latasTinta * 80;
    
    echo "Área: $area metros quadrados";
    echo "<br>Quantidade de latas necessárias: $latasTinta latas";
    echo "<br>Preço total: R$$precoTotal reais";


?>