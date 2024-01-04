// Project Euler #5: Smallest multiple
// https://www.hackerrank.com/contests/projecteuler/challenges/euler005/problem

<?php
$handle = fopen("php://stdin", "r");
$t = fgets($handle);
for ($i = 0; $i < $t; $i++) {
    $num = trim(fgets($handle));

    $lcm = 1;
    for ($x = 2; $x <= $num; $x++) {
        $lcm = lcm($lcm, $x);
    }

    print($lcm) . "\n";
}
fclose($handle);

function lcm($m, $n)
{
    if ($m == 0 || $n == 0)
        return 0;
    $r = ($m * $n) / gcd($m, $n);
    return abs($r);
}

function gcd($a, $b)
{
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}