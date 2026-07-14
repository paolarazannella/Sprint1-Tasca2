<?php

// X, Y
$X = 3;
$Y = 8;

echo "X = " . $X;
echo "<br>";
echo "Y = " . $Y;
echo "<br>";

echo "La suma de X + Y es: " . ($X + $Y);
echo "<br>";

echo "La resta de X - Y es: " . ($X - $Y);
echo "<br>";

echo "La multiplicación de X x Y es: " . ($X * $Y);
echo "<br>";

echo "El modulo de X % Y es: " . ($X % $Y);
echo "<br>";
echo "<br>";

// N, M

$N = 4.56;
$M = 2.90;

echo "N = " . $N;
echo "<br>";
echo "M = " . $M;
echo "<br>";

echo "La suma de N + M es: " . ($N + $M);
echo "<br>";

echo "La resta de N - M es: " . ($N - $M);
echo "<br>";

echo "La multiplicación de N x M es: " . ($N * $M);
echo "<br>";

echo "El modulo de N % M es: " . fmod($N, $M);
echo "<br>";
echo "<br>";

// X, Y, N, M

echo "El doble de X es: " .($X * 2);
echo "<br>";
echo "El doble de Y es: " .($Y * 2);
echo "<br>";
echo "El doble de N es: " .($N * 2);
echo "<br>";
echo "El doble de M es: " .($M * 2);
echo "<br>";

echo "La suma de todas las variables es: " .($X + $Y + $N + $M);
echo "<br>";
echo "El producto de todas las variables es: " .($X * $Y * $N * $M);
echo "<br>";


?>
