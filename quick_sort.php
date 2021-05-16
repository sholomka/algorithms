<?php

function quicksort($array) {
    if (count($array) < 2) {
        return $array;
    }

    $pivot = $array[0];

    $less = array_filter(array_slice($array, 1), function($i) use ($pivot) {
        return $pivot >= $i;
    });

    $greater = array_filter(array_slice($array, 1), function($i) use ($pivot) {
        return $pivot < $i;
    });

    return array_merge(quicksort($less), [$pivot], quicksort($greater));
}

print_r(quicksort([10,5,2,3]));