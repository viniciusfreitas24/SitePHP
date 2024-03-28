<div class="titulo">POST - Exemplo 2</div>

<form action = "#" method = "post">
    Login: <input type = "text" name = "login" /> <br/>
    Senha: <input type = "password" name = "password" /> <br/>
    Confirme a senha: <input type = "password" name = "repassword" /> <br/>
    <input type = "submit" name = "submit" value = "Válidar" />
</form>

<?php

$login = $_POST['login'];
$password = $_POST['password'];
$repassword = $_POST['$repassword'];

if($login != $password && $password == $repassword){
    echo  "Cadastro realizado com sucesso";
} 

else {
    echo "Erro. Login é igual a senha ou as senhas são diferentes";
}





?>

