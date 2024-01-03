// Utopian Tree
// https://www.hackerrank.com/challenges/utopian-tree/problem

<?php
$_fp = fopen("php://stdin", "r");
$t = fgets($_fp);
for ($i = 0; $i < $t; $i++) {
    $cycle = fgets($_fp);
    $height = 1;
    for ($j = 1; $j <= $cycle; $j++) {
        if ($j % 2 == 1) {
            $height *= 2;
        } else {
            $height++;
        }
    }
    print($height) . "\n";
}
fclose($_fp);