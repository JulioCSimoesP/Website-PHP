<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Atividade Avaliativa - Rand()</title>
</head>
<body>
    <div class="flex-center">
        <h1 class="unclickable-color sign page-title">
            Rand()
        </h1>
    </div>
    <nav class="navigation-bar">
        <a href="index.html">
            Home
        </a>
        <a href="array_sum.html">
            Array_sum()
        </a>
        <a href="rand.php">
            Rand()
        </a>
    </nav>
    <p class="common-text-color common-text">
        Rand() é uma função do PHP que gera um número pseudo randômico do tipo inteiro.
    </p>
    <form class="content-frame" action="rand_resultado.php" method="post">
        <div class="flex-container">
            <h2 class="unclickable-color form-sign page-sub-title">
                Exemplo #1
            </h2>
        </div>
        <h3 class="unclickable-color form-text">
            Pressione o botão para gerar um número aleatório entre 0 e getmaxrand() = <?=getrandmax()?>.
        </h3>
        <input type="hidden" name="rand-minimo" value=0>
        <input type="hidden" name="rand-maximo" value="maximo">
        <input class="submit-button" type="submit" value="Gerar número"/>
    </form>
    <form class="content-frame" action="rand_resultado.php" method="post">
        <div class="flex-container">
            <h2 class="unclickable-color form-sign page-sub-title">
                Exemplo #2
            </h2>
        </div>
        <h3 class="unclickable-color form-text">
            Defina um intervalo de números e gere um número aleatório desse intervalo:
        </h3>
        <label class="input-spacing">
            <span class="input-align">
                Limite mínimo:
            </span>
            <input type="number" name="rand-minimo">
        </label>
        <label class="input-spacing">
            <span class="input-align">
                Limite máximo:
            </span>
            <input type="number" name="rand-maximo">
        </label>
        <input class="submit-button" type="submit" value="Gerar número"/>
    </form>
    <div class="footer-button">
        <button onclick="location.href='index.html'" type="button">
            Home
        </button>
    </div>
    <div class="end"></div>
</body>
</html>