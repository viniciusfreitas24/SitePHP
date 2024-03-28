<div class="titulo">POST - Exercício
    
<form action = "#" method = "post">
    Numero 1: <input type = "number" name = "numero1" /> <br/>
    Numero 2: <input type = "number" name = "numero2" /> <br/>
    Numero 3: <input type = "number" name = "numero3" /> <br/>
    Numero 4: <input type = "number" name = "numero4" /> <br/>
    Numero 5: <input type = "number" name = "numero5" /> <br/>
    
    <input type = "submit" name = "submit" value = "Válidar" />
</form>

<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];
$numero4 = $_POST['numero4'];
$numero5 = $_POST['numero5'];

if ($numero1 > $numero2 && $numero1 > $numero3 && $numero1 > $numero4 && $numero1 > $numero5) {
    echo "<br>O $numero1 é o maior número";
}

else if ($numero2 > $numero1 && $numero2 > $numero3 && $numero2 > $numero4 && $numero2 > $numero5) {
    echo "<br>O $numero2 é o maior número";
}

else if ($numero3 > $numero1 && $numero3 > $numero2 && $numero3 > $numero4 && $numero3 > $numero5) {
    echo "<br>O $numero3 é o maior número";
} 

else if ($numero4 > $numero1 && $numero4 > $numero2 && $numero4 > $numero3 && $numero4 > $numero5) {
    echo "<br>O $numero4 é o maior número";
}

else {
    echo "<br>O $numero5 é o maior número";
}

$soma = ($numero1 + $numero2 + $numero3 + $numero4 + $numero5);
$media = ($soma) / 5;




echo "<br>A soma dos números é $soma";
echo "<br>A média dos valores é de $media";
?>