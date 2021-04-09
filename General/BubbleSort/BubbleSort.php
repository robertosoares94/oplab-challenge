<?php
/**
 * Receives an array and returns it ordered
 * @param array $array
 * @return array
 */
function bubbleSort(array $array)
{
    for ($i = 0; $i < count($array); $i++) {
        for($j = 0; $j < count($array) - 1; $j++) {
            if($array[$j] > $array[$j + 1]) {
                $aux = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $aux;
            }
        }
    }
    return $array;
}

// Array test
$array = array(10, 9, 50, 8, 7, 6, 5, 4, 3, 2,1);

// Test algorithm
$result = bubbleSort($array);
print_r($result);
