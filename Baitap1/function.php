<?php
function selectionSort($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        $max = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$max] > $list[$j]) {
                $max = $j;
            }
        }
        $list = swapPositions($list, $i, $max);
    }
    return $list;
}

function swapPositions($data, $left, $right)
{
    $backupOldDataRightValue = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backupOldDataRightValue;
    return $data;
}
$arr = [0, 2, 4, -5, 9, 11, -2];
echo "Mang ban dau la: ";
echo implode(", ", $arr);
echo "<br>";
echo "Mang da sap xep la: ";
echo implode(', ', selectionSort($arr));

