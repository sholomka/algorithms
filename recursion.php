<?php

$arr = [2,4,6, 11];

function sum($arr) {
    if (count($arr) === 0) {
        return 0;
    }

    return $arr[0] + sum(array_splice($arr, 1));
}

function countArr($arr) {
    if (count($arr) === 0) {
        return 0;
    }

    return 1 + countArr(array_splice($arr, 1));
}


//echo countArr($arr);

function maxArr($arr, $bigger = 0) {
    $item = current(array_splice($arr, 0, 1));

    if ($item > $bigger) {
        $bigger = $item;
    }

    return count($arr) === 0 ? $bigger : maxArr($arr, $bigger);
}


function maxArr2($arr) {
    if (count($arr) === 2) {
        return $arr[0] > $arr[1] ? $arr[0] : $arr[1];
    }

    $subMax = maxArr2(array_splice($arr, 1));

    return $arr[0] > $subMax ? $arr[0] : $subMax;
}


echo maxArr2($arr);


