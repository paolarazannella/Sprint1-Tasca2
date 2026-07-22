<?php
$int = 24;
$double = 24.2;
$string = "Hola";
$boolean = true;

echo $int . " is a " . gettype($int) . PHP_EOL;
echo $double . " is a " . gettype($double) . PHP_EOL;
echo $string . " is a " . gettype($string) . PHP_EOL;
echo $boolean . " is a " . gettype($boolean) . PHP_EOL;


define("MY_NAME", "Paola");
echo "<h1>";
echo MY_NAME;
echo "</h1>";

