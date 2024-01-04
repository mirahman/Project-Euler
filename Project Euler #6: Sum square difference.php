// Project Euler #6: Sum square difference
// https://www.hackerrank.com/contests/projecteuler/challenges/euler006/problem

<?php
$handle = fopen("php://stdin", "r");
$t = fgets($handle);

for ($i = 0; $i < $t; $i++) {
    $num = trim(fgets($handle));
    $total = pow(($num * ($num + 1)) / 2, 2) - (($num * ($num + 1) * (2 * $num + 1)) / 6);
    print($total) . "\n";
}
fclose($handle);