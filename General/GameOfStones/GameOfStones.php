<?php
/**
 * Receives an initial number of stones and returns the winner
 * @param int $n
 * @return string
 */
function gameOfStones(int $n)
{
    if ($n < 2) {
        return 'Second';
    }

    $winners[0] = 1;
    $winners[1] = 1;
    $winners[2] = 0;
    $winners[3] = 0;
    $winners[5] = 0;

    $stones = [2,3,5];
    for ($i = 2; $i <= $n; $i++) {
        $found = false;
        foreach ($stones as $j) {
            if ($i >= $j) {
                if ($winners[$i - $j] != $winners[$j]) {
                    $found = true;
                    break;
                }
            }
        }
        if ($found) {
            $winners[$i] = 0;
        } else {
            $winners[$i] = 1;
        }
    }
    return (end($winners) == 0 ? 'First' : 'Second');
}

// Number testcases
$t = 8;

// Array number of stones in a test case
$n = [8, 1, 2, 3, 4, 5, 6, 7, 10];

// Test algorithm
for ($i = 1; $i <= $t; $i++) {
    echo gameOfStones($n[$i]).'<br/>';
}
