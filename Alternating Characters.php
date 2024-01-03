// Alternating Characters
// https://www.hackerrank.com/challenges/alternating-characters/problem

<?php
$handle = fopen("php://stdin", "r");
$t = fgets($handle);
for ($i = 0; $i < $t; $i++) {
    $string = fgets($handle);
    $delete = 0;
    $prev = $string[0];
    for ($j = 1; $j < strlen($string); $j++) {
        if ($prev == $string[$j]) {
            $delete++;
        }
        $prev = $string[$j];
    }
    print($delete) . "\n";
}
fclose($handle);