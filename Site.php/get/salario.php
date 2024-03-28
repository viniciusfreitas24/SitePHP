<div class="titulo">Salário</div>

<?php   


$horadia = $_GET['d'];
$horames = $_GET['m'];
$total = $horadia * $horames;

echo "Ele recebe R$$horadia reais por hora";
echo "<br> Ele trabalha R$$horames horas por mês";
echo "<br> O salário que ele recebe por mês é R$$total";













?>