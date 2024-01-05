// Project Euler #10: Summation of primes
// https://www.hackerrank.com/contests/projecteuler/challenges/euler010/problem

<?php
$primes = iprimes_upto(1000000);
$mem = array();

$handle = fopen("php://stdin", "r");
$t = fgets($handle);

for ($i = 0; $i < $t; $i++) {
    $num = trim(fgets($handle));
    $ind = 0;
    print($primes[$num]) . "\n";
}
fclose($handle);

function iprimes_upto($limit)
{
    $primes = array(0, 0);
    for ($i = 2; $i <= $limit; $i++) {
        $primes[$i] = true;
    }

    for ($n = 2; $n <= $limit; $n++) {
        if ($primes[$n]) {
            for ($i = $n * $n; $i < $limit; $i += $n) {
                $primes[$i] = false;
            }
        }
    }

    $last = 0;
    for ($i = 2; $i <= $limit; $i++) {
        if ($primes[$i]) {
            $primes[$i] = $i + $last;
            $last = $primes[$i];
        } else {
            $primes[$i] = $primes[$i - 1];
        }
    }
    return $primes;
}


