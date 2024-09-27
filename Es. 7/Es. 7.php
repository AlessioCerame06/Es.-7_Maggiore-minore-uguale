<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
</html>

<?php
    $x = rand(1, 50);
    $y = rand(1, 50);

    echo "<p>Numero 1: $x - Numero 2: $y</p>";

    if ($x > $y) {
        $risultato = "Maggiore";
        $massimo = $x;
    } else if ($x < $y) {
        $risultato = "Minore";
        $massimo = $y;
    } else {
        $risultato = "Uguale";
        $massimo = $x;
    }

    echo "<h1>$risultato</h1>";

    if ($massimo < 10) {
        $str = "<p>$massimo minore di 10</p>";
    } else if ($massimo >= 10 && $massimo <= 20) {
        $str = "<p>$massimo compreso tra 10 e 20</p>";
    } else if ($massimo >= 21 && $massimo <= 30) {
        $str = "<p>$massimo compreso tra 21 e 30</p>";
    } else {
        $str = "<p>$massimo maggiore di 30</p>";
    }

    echo $str;

?>