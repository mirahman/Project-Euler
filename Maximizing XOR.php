// Maximizing XOR
// https://www.hackerrank.com/challenges/maximizing-xor/problem

<?php
function maxXor($l, $r)
{
    $max = 0;
    for ($i = $l; $i <= $r; $i++) {
        for ($j = $i; $j <= $r; $j++) {
            $xor = $i ^ $j;
            $max = $xor > $max ? $xor : $max;
        }
    }
    return $max;
}

$__fp = fopen("php://stdin", "r");
fscanf($__fp, "%d", $_l);
fscanf($__fp, "%d", $_r);
$res = maxXor($_l, $_r);
echo $res;