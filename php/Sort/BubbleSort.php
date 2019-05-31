<?php

/**
 * 冒泡排序
 * @param array $arr
 * @return array
 */
function BubbleSort(array $arr) {
    $len = sizeof($arr);
    if ($len < 2) return $arr;
    for ($j = 1; $j < $len; $j++) {
        for ($i = 0; $i < $len - $j; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
            }
        }
    }
    return $arr;
}

/**
 * 冒泡排序（优化）
 * 增加标识，如果数组已经有序则直接返回
 * @param array $arr
 * @return array
 */
function BubbleSort2(array $arr) {
    $len = sizeof($arr);
    if ($len < 2) return $arr;
    for ($j = 1; $j < $len; $j++) {
        $flag = true;
        for ($i = 0; $i < $len - $j; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $flag = false;
            }
        }
        if ($flag) {
            break;
        }
    }
    return $arr;
}

$arr = [4,2,5,8,6,55,67,99,7,7,9,24,80];
echo '<pre>';print_r(BubbleSort2($arr));
