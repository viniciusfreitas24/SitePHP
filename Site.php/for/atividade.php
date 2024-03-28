<div class="titulo"> Atividade Laço For </div>




<br/>

<form action = "#" method = "post">
    Primeira nota do aluno: <input type = "number" name = "nota" /> <br/>
    Segunda nota do aluno: <input type = "number" name = "nota" /> <br/>
    Terceira nota do aluno: <input type = "number" name = "nota" /> <br/>
    <input type = "submit" name = "submit" value = "Testar"  /> <br/>
</form>



<?php

$no1 = $_POST['nota'];
$no2 = $_POST['nota'];
$no3 = $_POST['nota'];

$array = [$no1, $no2, $no3];

print_r($array);












?>