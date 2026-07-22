<?php

function counter ($maximum = 10, $step = 1)
{
    if ($step <= 0) {
        throw new InvalidArgumentException("Eror: el paso tiene que ser mayor que 0");
    }
    if ($maximum <= 0) {
        throw new InvalidArgumentException("El maximo tiene que ser mayor a 0");
    }

    for ($numero = 0; 
    $numero <= $maximum; 
    $numero = $numero + $step){
        echo $numero;
        echo "<br>";
    }
}

 counter(5,1);

 
