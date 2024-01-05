// Project Euler #22: Names scores
// https://www.hackerrank.com/contests/projecteuler/challenges/euler022/problem

<?php
$handle = fopen("php://stdin", "r");
$chars = array('A' => 1, 'B' => 2, 'C' => 3, 'D' => 4, 'E' => 5, 'F' => 6, 'G' => 7, 'H' => 8, 'I' => 9, 'J' => 10, 'K' => 11, 'L' => 12, 'M' => 13, 'N' => 14, 'O' => 15, 'P' => 16, 'Q' => 17, 'R' => 18, 'S' => 19, 'T' => 20, 'U' => 21, 'V' => 22, 'W' => 23, 'X' => 24, 'Y' => 25, 'Z' => 26);

$case = fgets($handle);
$scores = array();

for ($i = 0; $i < $case; $i++) {
    $tmp = trim(fgets($handle));
    $scores[] = strtoupper($tmp);
}

sort($scores);
$Q = fgets($handle);
for ($i = 1; $i <= $Q; $i++) {
    $name = trim(fgets($handle));
    $score = calculateScore($name);
    $position = array_search($name, $scores) + 1;
    print($score * $position) . "\n";
}
fclose($handle);

function calculateScore($name = "")
{
    global $chars;
    $score = 0;
    for ($i = 0; $i < strlen($name); $i++) {
        $score += $chars[$name[$i]];
    }
    return $score;
}