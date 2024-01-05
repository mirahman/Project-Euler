// Project Euler #11: Largest product in a grid
// https://www.hackerrank.com/contests/projecteuler/challenges/euler011/submissions

<?php
$handle = fopen("php://stdin", "r");
$numbers = array();

for ($i = 0; $i < 20; $i++) {
    $numbers[] = explode(" ", trim(fgets($handle)));
}

print(findMaxMultiple()) . "\n";

function findMaxMultiple()
{
    global $numbers;
    $max = 0;
    for ($i = 0; $i < 20; $i++)
        for ($j = 0; $j < 20; $j++) {
            $tmp = findMaxGrid($i, $j);
            if ($max < $tmp) {
                $max = $tmp;
            }
        }
    return $max;
}
function findMaxGrid($i, $j)
{
    global $numbers;
    $max = 0;
    $sum = getNum($i, $j) * getNum($i, $j + 1) * getNum($i, $j + 2) * getNum($i, $j + 3);

    if ($sum > $max)
        $max = $sum;

    $sum = getNum($i, $j) * getNum($i, $j - 1) * getNum($i, $j - 2) * getNum($i, $j - 3);

    if ($sum > $max)
        $max = $sum;

    $sum = getNum($i, $j) + getNum($i - 1, $j) + getNum($i - 2, $j) + getNum($i - 3, $j);

    if ($sum > $max)
        $max = $sum;

    $sum = getNum($i, $j) + getNum($i + 1, $j) + getNum($i + 2, $j) + getNum($i + 3, $j);

    if ($sum > $max)
        $max = $sum;

    $sum = getNum($i, $j) + getNum($i + 1, $j + 1) + getNum($i + 2, $j + 2) + getNum($i + 3, $j + 3);

    if ($sum > $max)
        $max = $sum;

    $sum = getNum($i, $j) * getNum($i - 1, $j - 1) * getNum($i - 2, $j - 2) * getNum($i - 3, $j - 3);

    if ($sum > $max)
        $max = $sum;

    $sum = getNum($i, $j) * getNum($i - 1, $j + 1) * getNum($i - 2, $j + 2) * getNum($i - 3, $j + 3);
    if ($sum > $max)
        $max = $sum;

    $sum = getNum($i, $j) * getNum($i + 1, $j - 1) * getNum($i + 2, $j - 2) * getNum($i + 3, $j - 3);
    if ($sum > $max)
        $max = $sum;

    return $max;
}

function getNum($i, $j)
{
    global $numbers;
    if (isset($numbers[$i][$j])) {
        return intval($numbers[$i][$j]);
    }
    return 0;
}