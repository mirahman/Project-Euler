// Project Euler #21: Amicable numbers
// https://www.hackerrank.com/contests/projecteuler/challenges/euler021/problem

<?php
$amicableNumbers = [];
function numberOfDivisors($amicable)
{
    global $amicableNumbers;
    $tempAmicable = $amicable;
    $factors = [1];
    $sum = 1;
    for ($i = 2; $i <= intval(sqrt($tempAmicable)); $i++) {
        $amicable = $tempAmicable;
        $count = 0;
        while ($amicable % $i == 0) {
            if (!in_array($i, $factors)) {
                $factors[] = $i;
                $sum += $i;
            }
            $amicable = floor($amicable / $i);
            if (!in_array($amicable, $factors)) {
                $factors[] = $amicable;
                $sum += $amicable;
            }
        }
    }
    if ($sum > 1)
        $amicableNumbers[$tempAmicable] = $sum;
}

for ($i = 1; $i <= 100000; $i++) {
    numberOfDivisors($i);
}

$validAmicableNumbers = [];
foreach ($amicableNumbers as $i => $val) {
    if (isset($amicableNumbers[$i]) && isset($amicableNumbers[$val]) && $amicableNumbers[$val] == $i && $i != $val) {
        $validAmicableNumbers[$i] = $i;
    }
}


$handle = fopen("php://stdin", "r");
$t = fgets($handle);
for ($i = 0; $i < $t; $i++) {
    $n = trim(fgets($handle));
    $sum = 0;

    foreach ($validAmicableNumbers as $number) {
        if ($number > $n) {
            break;
        }
        $sum += $number;
    }
    echo $sum . "\n";
}