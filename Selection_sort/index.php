<?php
$arr = [5, 4, 0, 10, 33, -4, 2, 50];
$count = count($arr);
for ($i = 0; $i < $count - 1; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($arr[min] > $arr[i]) {
            $min = $i;
        }
    }
    return $min;
}
