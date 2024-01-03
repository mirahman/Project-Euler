// The Love-Letter Mystery
// https://www.hackerrank.com/challenges/the-love-letter-mystery/problem

<?php
$handle = fopen("php://stdin", "r");
$t = fgets($handle);
for ($i = 0; $i < $t; $i++) {
    $str = trim(fgets($handle));
    $change = 0;
    if ($str === strrev($str) || strlen($str) == 1) {
        $change = 0;
    } else {
        $left = "";
        $right = "";
        if (strlen($str) % 2 == 1) {
            $s = floor(strlen($str) / 2);
            $left = substr($str, 0, $s);
            $right = strrev(substr($str, $s + 1));
        } else {
            $s = floor(strlen($str) / 2);
            $left = substr($str, 0, $s);
            $right = strrev(substr($str, $s));
        }
        $leftComp = 0;
        $rightComp = 0;

        for ($x = 0; $x < $s; $x++) {
            $leftComp += abs((ord($left[$x]) - 62) - (ord($right[$x]) - 62));
        }

        $tmp = $left;
        $left = $right;
        $right = $tmp;

        for ($x = 0; $x < $s; $x++) {
            $rightComp += abs((ord($left[$x]) - 62) - (ord($right[$x]) - 62));
        }

        $change = $leftComp < $rightComp ? $leftComp : $rightComp;
    }
    print($change) . "\n";
}
fclose($handle);