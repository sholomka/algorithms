<?php

function findSmallestIndex($arr) {
    $smallest = $arr[0];
    $smallestIndex = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($smallest > $arr[$i]) {
            $smallest = $arr[$i];
            $smallestIndex = $i;
        }
    }

    return $smallestIndex;
}


function selectionSort($arr) {
    $newArr = [];
    $count = count($arr);

    for ($i = 0; $i < $count; $i++) {
        $smallestIndex = findSmallestIndex($arr);
        $newArr[] = current(array_splice($arr, $smallestIndex, 1));
    }

    return $newArr;
}

$arr = [5,2,1,4,3];
var_dump(selectionSort($arr));
