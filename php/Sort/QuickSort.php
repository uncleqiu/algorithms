<?php

/**
 * 快速排序
 * @param array $arr
 * @return array
 */
function QuickSort(array $arr) {
    $len = count($arr);
    if ($len <= 1) return $arr;
    $middle = $arr[0];
    $left = $right = [];
    for ($i = 1; $i < $len; $i++) {
        if ($middle > $arr[$i]) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    $left = QuickSort($left);
    $right = QuickSort($right);
    return array_merge($left, [$middle], $right);
}