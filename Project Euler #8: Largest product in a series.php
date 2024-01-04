// Project Euler #8: Largest product in a series
// https://www.hackerrank.com/contests/projecteuler/challenges/euler008/problem

<?php
$handle = fopen("php://stdin", "r");
$t = fgets($handle);

for ($i = 0; $i < $t; $i++) {
    $num = trim(fgets($handle));
    $tx = explode(" ", $num);

    $N = trim($tx[0]);
    $K = trim($tx[1]);

    $str = trim(fgets($handle));
    $max = 0;
    for ($x = 0; $x < $N - $K; $x++) {
        $s = substr($str, $x, $K);
        $mult = 1;
        for ($y = 0; $y < $K; $y++) {
            $mult *= $s[$y];
        }
        if ($mult > $max) {
            $max = $mult;
        }
    }
    print($max) . "\n";
}
fclose($handle);