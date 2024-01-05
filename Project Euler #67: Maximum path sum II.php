// Project Euler #67: Maximum path sum II
// https://www.hackerrank.com/contests/projecteuler/challenges/euler067/problem

<?php
$handle = fopen("php://stdin", "r");
$t = fgets($handle);

for ($x = 0; $x < $t; $x++) {
    $num = trim(fgets($handle));
    $numbers = array();
    for ($j = 0; $j < $num; $j++) {
        $numbers[] = explode(" ", trim(fgets($handle)));
    }

    $max = 0;
    for ($i = $num - 2; $i >= 0; $i--) {
        for ($j = 0; $j <= $i; $j++) {
            $numbers[$i][$j] += max($numbers[$i + 1][$j], $numbers[$i + 1][$j + 1]);
        }
    }
    print($numbers[0][0]) . "\n";
}
fclose($handle);