<?php
if($_POST['rand-minimo'] == ""){

    $minimo = 0;

} else {

    $minimo = $_POST['rand-minimo'];

}

if($_POST['rand-maximo'] == ""){

    $maximo = 0;

} elseif($_POST['rand-maximo'] == "maximo"){

    $maximo = getrandmax();

} else {

    $maximo = $_POST['rand-maximo'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Resultado - Rand()</title>
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
    <div class="content-frame">
        <div class="flex-container">
            <h2 class="unclickable-color form-sign page-sub-title">
                Número gerado:
            </h2>
        </div>
        <p class="unclickable-color form-text">
            <?=rand($minimo,$maximo)?>
        </p>
    </div>
    <div class="footer-button margem-button">
        <button type="button" onclick="history.back()">
            Voltar
        </button>
    </div>
    <div class="end"></div>
</body>
</html>