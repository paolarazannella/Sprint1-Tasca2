<?php

function op ($num1, $num2, $operacion)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return "Error: los valores deben ser números";
    }

    switch ($operacion) {

        case "suma":
            return $num1 + $num2;

        case "resta":
            return $num1 - $num2;

        case "multiplicacion":
            return $num1 * $num2;

        case "division":

            if ($num2 == 0) {
                return "Error: no se puede dividir entre 0";
            }

            return $num1 / $num2;

        default:
            return "Error: operación no válida";
    }
}
echo " numero 1 es igual a 8 y numero 2 es igual a 4";
echo "<br>";

echo "suma = " .op(8, 4, "suma");
echo "<br>";

echo "resta = " .op(8, 4, "resta");
echo "<br>";

echo "multiplicación = " .op(8, 4, "multiplicacion");
echo "<br>";

echo "división = " .op(8, 4, "division");
echo "<br>";

?>
