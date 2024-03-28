<div class="titulo">POST - Operações Lógicos</div>



<form action = "#" method = "post">
    <div>
        <label for = "t1"> Trabalho 1 (Terça-Feira): </label>
        <select name = "t1" id = "t1">
        <option value = "1"> Executado </option>
        <option value = "0"> Não Executado </option>
    </select>
</div>
<br>
    <div>
        <label for = "t2"> Trabalho 2 (Quinta-Feira): </label>
        <select name = "t2" id = "t2">
        <option value = "1"> Executado </option>
        <option value = "0"> Não Executado </option>
    </select>
</div>
<br>
<button>Executar</button>

</form>

<style>
    button, select {
        font-size: 30px;
    }
</style>
        
        



<?php

    if(isset($_POST['t1']) && isset($_POST['t2'])) {
        $t1 = $_POST['t1'] === '1'; //inclui o valor 1 ou 0
        $t2 = !!$_POST['t2'];   //utilizando dupla negação, recebe o valor de fato inserido.
        $tv = ''; //inicialmete vazio pois vai depender da condição cumprida.
        $acai = false;
    }

    if($t1 && $t2) {  //se t1 e t2 foi '1'  
        $tv = '50'; //atribui dentro da variavel TV o valor 50

    }

    elseif ($t1 XOR $t2) {
        $tv = '32';
    }

    if ($t1 || $t2) {
        $acai = true;
    }

    if($tv) {
        $resultado = "Vamos ganhar uma TV de $tv polegadas";
    }

    else {
        $resultado = "Sem TV dessa vez :(";
    }

    if ($acai) {
        $resultado .= "<br> Estamos mais saudáveis!";
    }

    else {
        $resultado .= "<br> Açai Liberado \o/"; 
    }




    echo "<p> $resultado </p>";











?>