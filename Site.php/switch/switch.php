<div class="titulo"> Switch </div>

<?php

/*$categoria = "Luxo";
$preco;
$carro;



if($categoria == "Luxo") {
    $carro = "Mercedes";
    $preco = 250000;
}

else if ($categoria == "SUV") {
    $carro = "Renegade";
    $preco = 80000;
}

else if ($categoria == "Sedan") {
    $carro = "Etios";
    $preco = 55000;
}

else {
    $carro = "Mobi";
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, "," , ".");
echo "Carro: $carro <br> Preço: R$ $preco";*/


$categoria = "???";

switch($categoria){
    case "Luxo" :
        $carro = "Mercedes";
        $preco = 250000;
        break;

        case "SUV" :
            $carro = "Renegade";
            $preco = 80000;
            break;

            case "Sedan" :
                $carro = "Etios";
                $preco = 55000;
                break;
                default:
                $carro = "Mobi";
                $preco = 33000;
}


echo "Carro: $carro <br> Preço: R$ $preco";






?>