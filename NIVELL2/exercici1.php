<?php

function precio($minutos)
{
    if ($minuts <= 0) {
        return "Error: tiene que ser mayor que 0";
    }

    if ($minutos <= 3) {
        return 10;
    } else {
        $minutosExtra = $minutos - 3;
        $precioTotal = 10 + ($minutosExtra * 5);

        return $preuTotal;
    }
}

echo "Precio a pagar: " . precio(5) . " centimos";

?>