<div class="titulo">Altura e Peso</div>

<?php

$altura = $_GET['a'];   

$pesoIdeal = (72.7* $altura) - 58;

echo "A sua altura é $altura";

echo "<br>O seu peso ideal é $pesoIdeal"; 




?>