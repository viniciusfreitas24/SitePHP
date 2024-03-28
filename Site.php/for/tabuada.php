<div class="titulo"> Tabuada </div>


<form action = "#" method = "post">
    Tabuada do: <input type = "text" name = "tab" /> <br/>
    <input type = "submit" name = "submit" value = "Testar"  /> <br/>
</form>

<?php

$tabuada = $_POST ['tab'];

for ($count = 1; $count <= 10; $count++) {
    echo $tabuada. " X " .$count. " = " .($tabuada * $count). "<br>";
}






?>