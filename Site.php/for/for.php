<div class="titulo"> Laço For </div>

<?php

for ($count = 1; $count <= 5; $count++) {
    echo "$count <br>";
}

echo "<hr>";
for (; $count <= 10; $count++) {
    echo "$count <br>";
}

echo "<hr>";

$array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 
'Quinta', 'Sexta', 'Sabado'];

for ($i = 0; $i < count($array); $i++) {
    echo "{$array[$i]} <br>";
}





?>