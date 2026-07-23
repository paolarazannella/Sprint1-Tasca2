<?php

function getPrimenumber($maxNum)
{
    if ($maxNum < 2) return [];

    $prime = [];

    for ($i = 2; $i <= $maxNum; $i++) 
        $prime[$i] = true;

    for ($i = 2; $i * $i <= $maxNum; $i++) {
        if ($prime[$i]) {

            for ($j = $i * $i; $j <= $maxNum; $j = $j + $i) {
                $prime[$j] = false;
            }
        }
    }
$primes = [];
foreach ($prime as $num => $isPrime) {
    if ($isPrime){
        $primes[] = $num;
    }
}
return $primes;
}
echo implode (' ', getPrimenumber(20));
