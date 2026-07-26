<?php
declare(strict_types=1);
function getPrimenumber($maxNum)
{
    if ($maxNum < 2) return [];

    $prime = [];

    for ($number = 2; $number <= $maxNum; $number++) 
        $prime[$number] = true;

    for ($number = 2; $number <= $maxNum; $number++) {
        if ($prime[$number]) {

            for ($multiple = $number * 2;
             $multiple <= $maxNum; 
             $multiple = $multiple + $number) {
                $prime[$multiple] = false;
            }
        }
    }
$primes = [];
foreach ($prime as $number => $isPrime) {
    if ($isPrime){
        $primes[] = $number;
    }
}
return $primes;
}
echo implode (' ', getPrimenumber(20));
