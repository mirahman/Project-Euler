// Project Euler #7: 10001st prime
// https://www.hackerrank.com/contests/projecteuler/challenges/euler007/problem

<?php
$primes = iprimes_upto(104750);
$handle = fopen("php://stdin", "r");
$t = fgets($handle);

for ($i = 0; $i < $t; $i++) {
    $num = trim(fgets($handle));
    print($primes[$num]) . "\n";
}
fclose($handle);

function iprimes_upto($limit)
{
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

    $p = array(" ");
    for ($i = 2; $i <= $limit; $i++) {
        if ($primes[$i])
            $p[] = $i;
    }
    return $p;
}
