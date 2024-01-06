// Project Euler #25: N-digit Fibonacci number
// https://www.hackerrank.com/contests/projecteuler/challenges/euler025/problem

<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = fgets($handle);
for ($x = 0; $x < $t; $x++) {
    $num = fgets($handle);
    define('FI', (1 + sqrt(5)) / 2);
    $digit = ceil((log(10, 10) * ($num - 1) + log(5, 10) / 2) / log(FI, 10));
    echo $digit . "\n";
}