<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice de Exercícios</h2>
    </header>
    <main class="principal">
        <div class = "conteudo">
            <nav class="modulos">
               <div class="modulo verde">
                <h3> Módulo 1 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=teste&file=teste">Op. Aritmética</a></li>
                    <li><a href="exercicio.php?dir=equacao&file=equacao">Desafio Equações</a></li>
                    <li><a href="exercicio.php?dir=incremento&file=incremento">Incremento</a></li>
                    <li><a href="exercicio.php?dir=incremento2&file=incremento2">Incremento2</a></li>
                </ul>
               </div>
               <div class="modulo vermelho">
                <h3> Módulo 2 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=operadores&file=operadores">Operadores</a></li>
                    <li><a href="exercicio.php?dir=exeoperador&file=exeoperador">Exercício Operadores</a></li>
                    <li><a href="exercicio.php?dir=switch&file=switch">Switch</a></li>
                    <li><a href="exercicio.php?dir=array&file=array">Array</a></li>
                </ul>
               </div>
               <div class="modulo azul">
                <h3> Módulo 3 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=exearray&file=exearray">Exercício Array</a></li>
                    <li><a href="exercicio.php?dir=exearray2&file=exearray2">Exercício Array 2</a></li>
                    <li><a href="exercicio.php?dir=get&file=get">Método Get</a></li>
                    <li><a href="exercicio.php?dir=post&file=post">Método Post</a></li>
                </ul>
               </div>
               <div class="modulo roxo">
                <h3> Módulo 4 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=get&file=salario">Salário</a></li>
                    <li><a href="exercicio.php?dir=get&file=peso">Altura e Peso</a></li>
                    <li><a href="exercicio.php?dir=get&file=metro">Metro e Centimetros</a></li>
                    <li><a href="exercicio.php?dir=get&file=tintas">Loja de Tintas</a></li>
                </ul>
               </div>
               <div class="modulo laranja">
                <h3> Módulo 5 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=post&file=post2">Método Post 2</a></li>
                    <li><a href="exercicio.php?dir=post&file=post3">Método Post 3</a></li>
                    <li><a href="exercicio.php?dir=post&file=post4">Exercício Post</a></li>
                    <li><a href="exercicio.php?dir=for&file=for">Laço for</a></li>

                </ul>
               </div>
               <div class="modulo verde-escuro">
                <h3> Módulo 6 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=for&file=tabuada">Tabuada</a></li>
                    <li><a href="exercicio.php?dir=for&file=dowhile">Tabuada DoWhile</a></li>
                    <li><a href="exercicio.php?dir=for&file=while">Tabuada While</a></li>
                    <li><a href="exercicio.php?dir=for&file=exelacofor">Exercício Laço For</a></li>
                </ul>
               </div>
               <div class="modulo vermelho-escuro">
                <h3> Módulo 7 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=for&file=atividade">Atividade Laço For</a></li>
                    <li><a href="exercicio.php?dir=for&file=funcao">Função</a></li>
                    <li><a href="#">Exercício C</a></li>
                    <li><a href="#">Exercício D</a></li>
                </ul>
               </div>
               <div class="modulo azul-escuro">
                <h3> Módulo 8 </h3>
                <ul>
                    <li><a href="#">Exercício A</a></li>
                    <li><a href="#">Exercício B</a></li>
                    <li><a href="#">Exercício C</a></li>
                    <li><a href="#">Exercício D</a></li>
                </ul>
               </div>
               <div class="modulo roxo-escuro">
                <h3> Módulo 9 </h3>
                <ul>
                    <li><a href="#">Exercício A</a></li>
                    <li><a href="#">Exercício B</a></li>
                    <li><a href="#">Exercício C</a></li>
                    <li><a href="#">Exercício D</a></li>
                </ul>
               </div>   
            </nav>
        </div>
    </main>
    <footer class="rodape">
     DTEC CURSO PHP <?=date('Y'); ?>
    </footer>

</body>
</html>

