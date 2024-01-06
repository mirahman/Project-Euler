// Project Euler #24: Lexicographic permutations
// https://www.hackerrank.com/contests/projecteuler/challenges/euler024/problem

<?php
$handle = fopen("php://stdin", "r");

$factorial = factorial(13);

$t = fgets($handle);
for ($x = 0; $x < $t; $x++) {
    $num = fgets($handle);
    //echo nthPerm($num, "abcdefghijklm")."\n";
    $arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm'];
    //echo(implode(array_reverse(nth_permutation(array_reverse($arr),$num-1, 3))))."\n";
    echo permN($arr, $num - 1) . "\n";
}

fclose($handle);

function permN($seq, $index)
{
    global $factorial;
    $seqC = $seq;
    $result = [];
    $fact = $factorial;
    $index %= $fact;

    while ($seqC) {
        $fact = $fact / count($seqC);
        $choice = $index / $fact;
        $index = $index % $fact;
        $result[] = $seqC[$choice];
        array_splice($seqC, $choice, 1);
    }
    return implode("", $result);
}

function factorial($num)
{
    $sum = 1;
    for ($i = 1; $i <= $num; $i++)
        $sum *= $i;
    return $sum;
}