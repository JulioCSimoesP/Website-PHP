<?php
foreach ($_POST as $elemento){

    if($elemento == ''){

        $array[] = 0;

    } elseif($elemento == 'true'){

        $array[] = true;

    } elseif($elemento == 'false'){

        $array[] = false;

    } else {

        $array[] = $elemento;

    }

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
    <title>Resultado - Array_sum()</title>
</head>
<body>
    <div class="flex-center">
        <h1 class="unclickable-color sign page-title">
            Array_sum()
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
                Elementos do array:
            </h2>
        </div>
        <p class="unclickable-color form-text">
            [ <?php foreach ($array as $indice => $item) {

                if($indice != 4){

                    echo $item.", ";

                } else {

                    echo $item;

                }

            }?> ]
        </p>
    </div>
    <div class="content-frame">
        <div class="flex-container">
            <h2 class="unclickable-color form-sign page-sub-title">
                Resultado da soma dos elementos:
            </h2>
        </div>
        <p class="unclickable-color form-text">
            <?=array_sum($array);?>
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