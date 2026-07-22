<?php

declare(strict_types=1);

function isBitten(): bool
{
    return rand(0, 1) === 1;
}

if (isBitten()) {
    echo "Charlie has biten me.<br>";
} else {
    echo "Charlie has not bitten me.<br>";
}

//==  mismo valor
//=== mismo valor y mismo tipo