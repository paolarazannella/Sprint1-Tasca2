<?php

function calculatePrice($minutes)
{
    if ($minutes <= 0) {
        return "Error: tiene que ser mayor que 0";
    }

    if ($minutes <= 3) {
        return 10;
    } else {
        $extraMinutes = $minutes - 3;
        $totalPrice = 10 + ($extraMinutes * 5);

        return $totalPrice;
    }
}
try { echo "Precio a pagar: " . calculatePrice(5) . " centimos";
}catch(InvalidArgumentException $e) {
    echo $e->getMessage();}
