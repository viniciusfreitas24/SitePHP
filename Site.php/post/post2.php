<div class="titulo">POST - Exemplo 1</div>

<form action = "#" method = "post">
    Insira uma nota: <input type= "number" name = "number"/> <br/>

    <input type= "submit" name = "submit" value = "Inserir" />
</form>

<?php

$nota = $_POST['number'];

if ($nota < 0 || $nota > 10) {
  echo "<br>Inserir uma nota válida entre 0 e 10";
}

else {
  echo "<br>Nota inserida com sucesso";

}






?>

