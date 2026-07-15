<?php

function eratostenes($numero)
{
    $esPrimo = [];

    for ($i = 0; $i <= $numero; $i++) {
        $esPrimo[$i] = true;
    }

    $esPrimo[0] = false;
    $esPrimo[1] = false;

    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($esPrimo[$i] == true) {

            for ($j = $i * $i; $j <= $numero; $j = $j + $i) {
                $esPrimo[$j] = false;
            }
        }
    }

    for ($i = 2; $i <= $numero; $i++) {
        if ($esPrimo[$i] == true) {
            echo $i . " ";
        }
    }
}

eratostenes(20);

?>