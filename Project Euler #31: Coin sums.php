// Project Euler #31: Coin sums
// https://www.hackerrank.com/contests/projecteuler/challenges/euler031/problem

<?php
$target = 100000;

$coinSizes = [1, 2, 5, 10, 20, 50, 100, 200];
$ways = array_fill(0, $target + 1, 0);
$ways[0] = 1;

for ($i = 0; $i < count($coinSizes); $i++) {
    for ($j = $coinSizes[$i]; $j <= $target; $j++) {
        $ways[$j] = ($ways[$j] + $ways[$j - $coinSizes[$i]]) % 1000000007;
    }
}

$handle = fopen("php://stdin", "r");
$t = fgets($handle);

for ($x = 0; $x < $t; $x++) {
    $target = trim(fgets($handle));
    print $ways[$target] . "\n";
}
fclose($handle);