<?php

function binary_search(array $list, int $item) {
    $low = 0;
    $high = count($list) - 1;


    while ($low <= $high) {
        $mid = round(($low + $high) / 2);
        $guess = $list[$mid];

        if ($guess === $item) {
            return $mid;
        }

        if ($item > $guess) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return 'none';
}


echo binary_search([1,2,3,4,5], 5);
