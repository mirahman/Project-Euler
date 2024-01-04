// Project Euler #3: Largest prime factor
// https://www.hackerrank.com/contests/projecteuler/challenges/euler003/problem

<?php
$handle = fopen("php://stdin", "r");
$t = fgets($handle);

for ($i = 0; $i < $t; $i++) {
    $num = trim(fgets($handle));
    print(lpf($num)) . "\n";
}
fclose($handle);

function lpf($n)
{
    $p = 2;
    while ($p * $p <= $n) {
        if ($n % $p == 0) {
            $n = $n / $p;
        } else {
            $p = $p > 2 ? $p + 2 : $p + 1;
        }
    }
    return $n;
}