// Lonely Integer
// https://www.hackerrank.com/challenges/lonely-integer/problem

<?php
function lonelyinteger($a)
{
    return array_search(1, array_count_values($a));
}

$__fp = fopen("php://stdin", "r");
fscanf($__fp, "%d", $_a_cnt);
$_a = fgets($__fp);
$_a = explode(' ', $_a);
$res = lonelyinteger($_a);
echo $res;