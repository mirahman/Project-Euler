// The Longest Increasing Subsequence
// https://www.hackerrank.com/challenges/longest-increasing-subsequent/problem

<?php
$handle = fopen("php://stdin", "r");
$t = fgets($handle);

$numbers = array();

for ($x = 0; $x < $t; $x++) {
    $numbers[] = trim(fgets($handle));
}

print lis($numbers);

fclose($handle);



class Node
{
    public $val;
    public $back = NULL;
}

function lis($n)
{
    $pileTops = array();
    // sort into piles
    foreach ($n as $x) {
        // binary search
        $low = 0;
        $high = count($pileTops) - 1;
        while ($low <= $high) {
            $mid = (int) (($low + $high) / 2);
            if ($pileTops[$mid]->val >= $x)
                $high = $mid - 1;
            else
                $low = $mid + 1;
        }
        $i = $low;
        $node = new Node();
        $node->val = $x;
        if ($i != 0)
            $node->back = $pileTops[$i - 1];
        $pileTops[$i] = $node;
    }
    $result = array();
    for (
        $node = count($pileTops) ? $pileTops[count($pileTops) - 1] : NULL;
        $node != NULL;
        $node = $node->back
    )
        $result[] = $node->val;

    return count($result);
}