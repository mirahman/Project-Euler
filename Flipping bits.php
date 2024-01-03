// Flipping bits
// https://www.hackerrank.com/challenges/flipping-bits/problem

<?php

$handle = fopen("php://stdin", "r");
$t = fgets($handle);
for ($i = 0; $i < $t; $i++) {
    $num = fgets($handle);
    $sum = 4294967295 - $num;
    print($sum) . "\n";
}
fclose($handle);