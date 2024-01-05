// Project Euler #9: Special Pythagorean triplet
// https://www.hackerrank.com/contests/projecteuler/challenges/euler009/problem

<?php
$handle = fopen("php://stdin", "r");
$t = fgets($handle);

for ($i = 0; $i < $t; $i++) {
    $num = trim(fgets($handle));
    print(newTri($num)) . "\n";
}
fclose($handle);


function newTri($n)
{
    $max = -1;
    for ($a = 2; $a < $n; $a++) {

        if (($n * $n - 2 * $n * $a) % (2 * $n - 2 * $a) == 0) {
            $b = ($n * $n - 2 * $n * $a) / (2 * $n - 2 * $a);
            $ret = $a * $b * ($n - $a - $b);
            if ($ret > $max && $ret > 0)
                $max = $ret;
        }
    }
    return $max; //no Triplet
}