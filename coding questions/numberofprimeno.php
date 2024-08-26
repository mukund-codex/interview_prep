<?php

function isPrime(int $num) {
    if ($num < 2) {
        return false;
    }

    for($i = 2; $i<=sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

function generatePrimeNumbers(int $n) {
    if ($n == 0) {
        return 'Enter correct number';
    }

    $count = 0;
    $primes = [];
    $num = 2;

    while($count < $n) {
        if (isPrime($num)) {
            $primes[] = $num;
            $count++;
        }
        $num ++;
    }
    return $primes;
}

$primes = generatePrimeNumbers(3);
print_r($primes);

?>