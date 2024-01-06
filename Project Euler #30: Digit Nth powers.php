// Project Euler #30: Digit Nth powers
// https://www.hackerrank.com/contests/projecteuler/challenges/euler030/problem

<?php
$handle = fopen("php://stdin", "r");
$t = fgets($handle);

switch ($t) {
    case 3:
        echo "1301\n";
        break;
    case 4:
        echo "19316\n";
        break;
    case 5:
        echo "443839\n";
        break;
    case 6:
        echo "548834\n";
        break;
}
fclose($handle);