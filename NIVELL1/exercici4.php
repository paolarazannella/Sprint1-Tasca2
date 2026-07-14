<?php

function contador ($defecto = 10, $paso = 1)
{
    if ($paso <= 0) {
        echo "Eror: el paso tiene que ser mayor que 0";
        return;
    }

    for ($numero = 0; $numero <= $defecto; $numero = $numero + $paso){
        echo $numero;
        echo "<br>";
    }
}

    contador();

    ?>
