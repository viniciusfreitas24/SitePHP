<div class="titulo"> Tabuada While </div>

<form action = "#" method = "post">
    Tabuada do: <input type = "text" name = "tab" /> <br/>
    <input type = "submit" name = "submit" value = "Testar"  /> <br/>
</form>


<?php

$tabuada = $_POST ['tab'];
$count = 1;

while ($count <= 10) {
    echo $tabuada. " X " .$count. " = " .($tabuada * $count). "<br>";
    $count++;
}





?>