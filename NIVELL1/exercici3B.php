<?php
function calculator($num1, $num2, $operation){
    
    switch ($operation) {

        case "addition":
            return $num1 + $num2;

        case "subtraction":
            return $num1 - $num2;

        case "multiplication":
            return $num1 * $num2;

        case "division":

            if ($num2 == 0) {
                throw new InvalidArgumentException("Error: cannot divide by 0");
            }

            return $num1 / $num2;
    }
}

try {
    $num1 = 8.3;
    $num2 = 2;

    echo "$num1 + $num2 = " . calculator($num1, $num2, "addition") . "<br>";
    echo "$num1 - $num2 = " . calculator($num1, $num2, "subtraction") . "<br>";
    echo "$num1 * $num2 = " . calculator($num1, $num2, "multiplication") . "<br>";
    echo "$num1 / $num2 = " . calculator($num1, $num2, "division") . "<br>";
} catch(InvalidArgumentException $e) {
    echo $e->getMessage() . "<br>";
}
