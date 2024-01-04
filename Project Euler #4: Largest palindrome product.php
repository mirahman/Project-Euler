// Project Euler #4: Largest palindrome product
// https://www.hackerrank.com/contests/projecteuler/challenges/euler004/problem

<?php
$arr = array();

for ($i = 100; $i < 1000; $i++)
    for ($j = $i; $j < 1000; $j++) {
        $sum = $i * $j;
        if (strlen($sum) == 6 && $sum == strrev($sum)) {
            $arr[] = $sum;
        }
    }

$arr = array_unique($arr);

sort($arr);
$handle = fopen("php://stdin", "r");
$t = fgets($handle);
for ($i = 0; $i < $t; $i++) {
    $num = trim(fgets($handle));
    $found = 0;
    for ($x = count($arr) - 1; $x >= 0; $x--) {
        if ($arr[$x] < $num) {
            $found = $arr[$x];
            break;
        }
    }
    print($found) . "\n";
}
fclose($handle);